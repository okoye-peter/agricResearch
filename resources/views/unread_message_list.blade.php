<x-layout-component title="Message list">
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <style>
            .users_image{
                height: 6em;
                width: 6em;
                border-radius: 50%;
                display: inline;
                margin: 0;
                padding: 0.25em;
                border: 0.25em solid #679dd6;
            }
        </style>
    </x-slot>
    {{-- table begins --}}
    <div class="container">
        <div class="row justify-center my-8">
            <table id="example" class=" table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Specialty</th>
                        <th>Unread Message(s)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <img src="{{ asset($user->file->url) }}" alt="" class="users_image">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->specialty->name }}</td>
                            <td>{{ $user->chats->count() }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}">view chats</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Specialty</th>
                        <th>Message Count</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{-- table begins --}}

    <x-slot name="scripts">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </x-slot>
</x-layout-component>