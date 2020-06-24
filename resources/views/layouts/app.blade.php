<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/vue-material.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/theme/default.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">





    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @livewireStyles

    <div id="app">

        @include('layouts.components.navbar-top')

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
            </div>
        </main>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}


    <script type="text/javascript">
    // $('.carousel').carousel({
    // interval: 2000
    // })

    // $(".alert").alert('')

    function changeFileName(input,label){

        var fileName =  document.querySelector("#"+input).value.split("\\").pop();
        document.querySelector("#"+label).innerHTML = fileName;
    }

     function createPhotoInput(){
        let id = document.getElementById('parent').children.length + 1;
        let parent = document.getElementById('parent');

        let divInputGroup = document.createElement('div');
        divInputGroup.setAttribute('class','input-group');

        let divCustomFile = document.createElement('div');
        divCustomFile.setAttribute('class','custom-file');
        divInputGroup.appendChild(divCustomFile);
        let input = document.createElement('input');
        input.setAttribute('type','file');
        input.setAttribute('name','path[]');
        input.setAttribute('accept', '.jpg, .jpeg, .png');
        input.setAttribute('class','custom-file-input');
        input.setAttribute('id','customFile'+id);
        input.setAttribute('onchange','changeFileName(customFile'+id+',customLabel'+id+')');
        input.onchange = function() {changeFileName('customFile'+id,'customLabel'+id);};
        divCustomFile.appendChild(input);
        let label = document.createElement('label');
        label.setAttribute('class','custom-file-label text-nowrap overflow-hidden');
        label.setAttribute('id','customLabel'+id);
        label.innerHTML = "Выбрать фото..."
        divCustomFile.appendChild(label);


        let divInputGroupAppend = document.createElement('div');
        divInputGroupAppend.setAttribute('class','input-group-append');
        divInputGroup.appendChild(divInputGroupAppend);

        let buttonCreatePhoto = document.createElement('button');
        buttonCreatePhoto.setAttribute('class','btn btn-outline-secondary p-0')
        buttonCreatePhoto.setAttribute('type', 'button');
        buttonCreatePhoto.setAttribute('onclick', 'createPhotoInput()');
        buttonCreatePhoto.onclick = function() {createPhotoInput();};
        let mdIconAdd = document.createElement('i');
        mdIconAdd.setAttribute('class','md-icon md-icon-font md-theme-default')
        mdIconAdd.innerHTML = "add";
        buttonCreatePhoto.appendChild(mdIconAdd);
        divInputGroupAppend.appendChild(buttonCreatePhoto);

        parent.appendChild(divInputGroup);


    };
    function handleFileSelect() {
        var evt = document.getElementById('image_path');
        var file = evt.files; // FileList object
        var f = file[0];


        // Only process image files.
        if (!f.type.match('image.*')) {
            alert("Image only please....");
        }
        var reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function(theFile) {
            return function(e) {
                // Render thumbnail.
                var img = document.getElementById('avatar_img');
                img.src = e.target.result;
            };
        })(f);
        reader.readAsDataURL(f);
    }
    console.log('get start');
    </script>
        @livewireScripts

</body>
</html>
