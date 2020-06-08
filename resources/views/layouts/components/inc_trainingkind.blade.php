<div class="form-row flex-column align-items-center">
    <div class="form-group col-md-6">
        <label for="name">Название</label>
        <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" placeholder="Название дистанции"
            name="name"
            value="@if($item->exists){{$item->name}}@else{{old('name')}}@endif"
        >
        {{-- Сообщение об ошибке --}}
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="description">Краткое описание</label>
        <textarea class="form-control @error('description') is-invalid @enderror"
            id="description" name="description"
            cols="30" rows="10"
        >@if($item->exists){{$item->description}}@else{{old('description')}}@endif</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">@if($item->exists) Изменить @else Добавить @endif</button>
        <a href="{{route('trainingkind.index')}}" class="float-right">Назад</a>
    </div>
</div>

