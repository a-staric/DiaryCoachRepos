<div class="form-row flex-column align-items-center">
    <div class="form-group col-md-6">
        <label for="name">Название дистанции</label>
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
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>

