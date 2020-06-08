<div class="form-row flex-column align-items-center">

    <div class="form-group col-md-6">
        <label for="title">Заголовок</label>
        <input type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title" placeholder="Название новости"
            name="title"
            value="@if($news->exists){{$news->title}}@else{{old('title')}}@endif"
        >
        {{-- Сообщение об ошибке --}}
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group col-md-6">
                        <label for="description">Краткое описание</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description"
                            cols="30" rows="10"
                        >@if($news->exists){{$news->description}}@else{{old('description')}}@endif</textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    </div>

        <div class="form-group col-md-6">
            <label for="news_date">Дата новости</label>
            <input type="date"
                class="form-control @error('news_date') is-invalid @enderror"
                id="news_date"
                name="news_date"
                value="@if($news->exists){{$news->news_date}}@else{{old('news_date')}}@endif"
            >
            {{-- Сообщение об ошибке --}}
            @error('news_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">@if($news->exists) Изменить @else Добавить @endif</button>
    </div>
</div>
