<x-layout-component title="Create Blog">
    <x-slot name="header">
        <style>
            .create-form input,
            .create-form select {
                border-width: 1px;
                font-size: 16px;
            }
            .create-form select{
                padding: 0.57em;
            }
            .create_btn {
                padding: 0.5em 2em;
                color: white;
                font-family: 'Roboto';
                font-size: 1.25em;
                border-radius: 0.25em;
                background: black;
            }
            .create_btn:hover {
                background: rgba(0, 0, 0, 0.85);
            }
        </style>
    </x-slot>
    <div class="container my-8">
        <h1 class="text-red-900">Create New Blog</h1>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="create-form">
            @csrf
            @if ($errors->any())
                <div class="bg-red-200 p-2.5 rounded-md ">
                    <ul class="border-l-4 border-red-800 pl-2.5 text-red-700 rounded-l-md">
                        @foreach ($errors->all() as $msg)
                            <li>{{ $msg }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="">
                <div class=" mb-4">
                    <label for="title" class="">Title</label>
                    <input type="text" name="title" class="block w-full rounded-lg p-3 mt-2.5 @if($errors->has('title')) border-red-700 @else border-gray-400 @endif" id="title" />
                </div>
                <div class="mb-4 grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div>
                        <label for="frontPoster" class="">Media</label>
                        <input type="file" name="file" class="block w-full rounded-lg p-2.5 mt-2.5  @if($errors->has('file')) border-red-700 @else border-gray-400 @endif" id="frontPoster" />
                    </div>
                    <div>
                        <label for="specialty" class="">Specialty</label>
                        <select  name="specialty_id" class="block w-full rounded-lg mt-2.5  @if($errors->has('specialty')) border-red-700 @else border-gray-400 @endif" id="specialty">
                            <option value="">Choose a specialty</option>
                            @foreach ($specialties as $specialty)
                                <option value="{{ $specialty->id }}"> {{ $specialty->name }} </option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="mb-4">
                    <label for="content" class="">Blog Content:</label>
                    <textarea class="advanced mt-2.5" id="content" name="body"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="create_btn">Create</button>
                </div>
            </form>
        </div>
    </div>
    <div class="p-8">
    </div>

    <x-slot name="footer">
        <script src="https://cdn.tiny.cloud/1/zsas5lu2daasop6m83zrnsy0jfirw1qnzwage39n2nz1bd42/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: "textarea.advanced",
                plugins:
                    "casechange advcode advlist lists formatpainter autoresize visualblocks tinydrive autolink charmap codesample emoticons link searchreplace table wordcount checklist mediaembed export pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable tinycomments tableofcontents footnotes mergetags autocorrect image",
                min_height: 380,
                // menubar: false,
                tinycomments_mode: 'embedded',
                toolbar: [
                    "bold italic underline | forecolor | formatselect | alignleft aligncenter alignright | bullist numlist",
                    "cut copy paste formatpainter removeformat | casechange visualblocks | spellchecker  | code | link image media table mergetags"
                ]
            });
            // tinymce.init({
            //     selector: 'textarea',
            //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            //     tinycomments_mode: 'embedded',
            //     tinycomments_author: 'Author name',
            //     mergetags_list: [
            //         { value: 'First.Name', title: 'First Name' },
            //         { value: 'Email', title: 'Email' },
            //     ]
            // });
                // Dropzone.autoDiscover = false;
                // var myDropzone = new Dropzone(".dropzone", { 
                // autoProcessQueue: false,
                // parallelUploads: 10 // Number of files process at a time (default 2)
                // });

                // $('#uploadfiles').click(function(){
                //     myDropzone.processQueue();
                // });
            </script>
            @if (session()->has('success'))
                <script>
                    Swal.fire(
                        'Success',
                            @json(session('success')),
                        'success'
                    )
                </script>
            @endif
    </x-slot>
</x-layout-component>