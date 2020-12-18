<x-app-layout>
    <style>

        #drop-area {
            border: 2px dashed #ccc;
            border-radius: 20px;
            width: 480px;
            font-family: sans-serif;
            margin: 100px auto;
            padding: 20px;
        }
        #drop-area.highlight {
            border-color: purple;
        }
        p {
            margin-top: 0;
        }
        .my-form {
            margin-bottom: 10px;
        }
        #gallery {
            margin-top: 10px;
        }
        #gallery img {
            width: 150px;
            margin-bottom: 10px;
            margin-right: 10px;
            vertical-align: middle;
        }

        #fileElem {
            display: none;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 text-gray-100" style="display: flex; justify-content: center;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-600">
            <form class="my-form" id="form" enctype="multipart/form-data">
                <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
            </form>
            <label for="fileElem">
                <div id="drop-area">
                    <p>{{ __('messages.uploadinstruction') }}</p>
                </div>
            </label>
            <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500 hidden" id="error" style="transition: linear 1s">
                <span class="text-xl inline-block mr-5 align-middle">
                    <i class="fas fa-bell"></i>
                </span>
                    <span class="inline-block align-middle mr-8">
                    <b class="">{{ __('messages.failed') }}</b>  {{ __('messages.failedreasons') }}
                </span>
            </div>
        </div>


    </div>

    <script>
        let dropArea = document.getElementById("drop-area")
        let actualDropArea = document.getElementById('drop')

        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            actualDropArea.addEventListener(eventName, preventDefaults, false)
            document.body.addEventListener(eventName, preventDefaults, false)
        })

        ;['dragenter', 'dragover'].forEach(eventName => {
            actualDropArea.addEventListener(eventName, highlight, false)
        })

        ;['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false)
        })

        // Handle dropped files
        actualDropArea.addEventListener('drop', handleDrop, false)

        function preventDefaults (e) {
            e.preventDefault()
            e.stopPropagation()
        }

        function highlight(e) {
            dropArea.classList.add('highlight')
        }

        function unhighlight(e) {
            dropArea.classList.remove('active')
        }

        function handleDrop(e) {
            var dt = e.dataTransfer
            var files = dt.files

            handleFiles(files)
        }

        function handleFiles(files) {
            files = [...files]
            uploadFile(files)
        }

        uploadStarted = false
        function uploadFile(file, i) {
            if (uploadStarted) { return false }
            uploadStarted = true
            dropArea.classList.add('opacity-30')
            var url = '{{ route("file.upload.post") }}'
            var xhr = new XMLHttpRequest()
            var formData = new FormData()
            xhr.open('POST', url, true)
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')


            xhr.addEventListener('readystatechange', function(e) {
                if (xhr.readyState === xhr.DONE) {
                    if (xhr.status === 200) {
                        document.location.href = xhr.responseText
                    } else {
                        $("#error").removeClass('hidden')
                        setTimeout(
                            function () {
                                dropArea.classList.remove('opacity-30')
                                uploadStarted = false
                            },
                            1000, 1
                        )
                    }
                }
            })
            // var ins = document.getElementById('fileToUpload').files.length;
            for (var x = 0; x < file.length; x++) {
                formData.append("image[]", file[x], "filetoupload." + file[x].name.split('.').pop());
            }
            // formData.append('image', file)
            formData.append('_token', "{{ csrf_token() }}")
            xhr.send(formData)
        }

        document.onpaste = (evt) => {
            const dT = evt.clipboardData || window.clipboardData;
            const file = dT.files;
            uploadFile(file)
        };
    </script>
</x-app-layout>
