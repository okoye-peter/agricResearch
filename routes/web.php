<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PageController;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('blogs', BlogController::class);
Route::group(['middleware' => 'auth'], function(){
    Route::post('/blogs/{blog}/ratings', [BlogController::class, 'rateBlog'])->name('blogs.rate');
    Route::post('/ratings/{blog}/reply', [BlogController::class, 'replyRating'])->name('ratings.reply');
    Route::get('users/chat/unread', [ChatController::class, 'getUreadChats'])->name('users.message');
    Route::get('chat/{user}', [ChatController::class, 'getMyChatWithUser'])->name('user.chats');
    Route::get('chat/{user}/markedAsRead', [ChatController::class, 'markedUreadChatAsRead'])->name('chats.read');
    Route::post('chat/{user}', [ChatController::class, 'storeChat']);
    Route::get('/room/{room}/chats', [ChatController::class, 'getRoomChat'])->name('room.chats');
});
Route::get('profile/{user}', [ProfileController::class, 'viewProfile'])->name('users.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
