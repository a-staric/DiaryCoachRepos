<div class="form-row flex-column align-items-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group col-md-6">
        <label for="name">Название соревнования</label>
        <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" placeholder="Название соревнования"
            name="name"
            value="@if($comp->exists){{$comp->name}}@else{{old('name')}}@endif"
        >
        {{-- Сообщение об ошибке --}}
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="place">Место проведения</label>
        <input type="text"
            class="form-control @error('place') is-invalid @enderror"
            id="place" placeholder="Место проведения"
            name="place"
            value="@if($comp->exists){{$comp->place}}@else{{old('place')}}@endif"
        >
        {{-- Сообщение об ошибке --}}
        @error('place')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
                        <label for="description">Краткое описание</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description"
                            cols="30" rows="10"
                        >@if($comp->exists){{$comp->description}}@else{{old('description')}}@endif</textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    </div>

     <div class="form-group col-md-6">
        <label for="event_link">Ссылка на источник</label>
        <input type="text"
            class="form-control @error('event_link') is-invalid @enderror"
            id="event_link" placeholder="Ссылка на источник"
            name="event_link"
            value="@if($comp->exists){{$comp->event_link}}@else{{old('event_link')}}@endif"
            >
            {{-- Сообщение об ошибке --}}
            @error('event_link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="event_date">Дата соревнования</label>
            <input type="date"
                class="form-control @error('event_date') is-invalid @enderror"
                id="event_date"
                name="event_date"
                value="@if($comp->exists){{$comp->event_date}}@else{{old('event_date')}}@endif"
            >
            {{-- Сообщение об ошибке --}}
            @error('event_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>
