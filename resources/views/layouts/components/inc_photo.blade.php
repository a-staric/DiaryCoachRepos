<div class="form-row flex-column align-items-center">

    <div class="form-group row col-md-6" id="parent">

        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile1"  name="path[]" onchange="changeFileName('customFile1','customLabel1')" accept=".jpg, .jpeg, .png">
                <label class="custom-file-label text-nowrap overflow-hidden" for="customFile" id="customLabel1">Выбрать фото...</label>
            </div>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary p-0" type="button" onclick="createPhotoInput()"><md-icon>add</md-icon></button>
            </div>
        </div>


          {{-- Добавление новых file-input --}}

    </div>

    <div class="form-group col-md-6">
        <label for="album_id">Альбом</label>
        <select type="text"
            class="form-control @error('album_id') is-invalid @enderror"
            id="album_id"
            name="album_id"
        >
                    @foreach ($albums as $album)
                        @if(session()->get('album_id') == $album->id )
                        <option selected value="{{$album->id}}">
                            {{$album->name}}
                            </option>
                         @else
                        <option value="{{$album->id}}">
                            {{$album->name}}
                            </option>
                        @endif
                    @endforeach
        </select>
        {{-- Сообщение об ошибке --}}
        @error('album_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="{{route('home')}}" class="float-right">Назад</a>

    </div>

    <div class="form-group col-md-6">

        <div class="panel-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
            <strong>{{$message}}</strong>
            </div>

            @foreach(session('images') as $image)
            <img class="img-thumbnail"
                 src="{{asset('images/'.$image)}}"
                 style="object-fit: contain; height:350px; width: 100%"
            >
            @endforeach
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Ууупс!</strong> Возникли некоторые проблемы.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    </div>

</div>


