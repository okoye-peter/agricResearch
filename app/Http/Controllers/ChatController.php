<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Models\Chat;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getMyChatWithUser(User $user)
    {
        $auth_user = auth()->user();
        $chats = Chat::where(function($q) use ($auth_user, $user){
            $q->where('user_id', $user->id)->where('receiver_id', $auth_user->id);
        })->orWhere(function($q) use ($auth_user, $user){
            $q->where('receiver_id', $user->id)->where('user_id', $auth_user->id);
        })->with(['user', 'user.file'])->get();
        return response()->json($chats);
    }

    public function getRoomChat(Room $room)
    {
        $chats = $room->chats->loadMissing(['user', 'user.file']);

        return response()->json($chats);
    }

    public function storeChat(Request $request, User $user)
    {
        $request->validate([
            'message' => 'required|string'
        ]);
        $auth_user = auth()->user();
        $chat = $auth_user->chats()->create([
            'message' => $request->message,
            'receiver_id' => $user->id
        ]);
        
        broadcast(new MessageSentEvent($chat->load(['user', 'user.file'])));

        return response()->josn($chat);

    }

    public function getUreadChats()
    {
        $auth_user = auth()->user();
        $users = User::whereHas('chats', function($q) use ($auth_user){
            $q->where('receiver_id', $auth_user->id)->whereNull('read_at');
        })->with(['chats' => function($w) use ($auth_user){
            $w->where('receiver_id', $auth_user->id);
        }, 'file', 'specialty'])->get();
        
        return view('unread_message_list', compact('users', 'auth_user'));
    }

    public function markedUreadChatAsRead(User $user)
    {
        $auth_user = auth()->user();
        $chats = Chat::whereNull('read_at')->where(function($q) use ($auth_user, $user){
            $q->where('user_id', $user->id)->where('receiver_id', $auth_user->id);
        })->get();
        $chats->each(function($chat){
            $chat->markAsRead();
        });
        return response()->json(['message' => 'messages marked as read']);
    }
}
