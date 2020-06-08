<div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="last_name">Фамилия</label>
                        <input type="text" 
                            class="form-control @error('last_name') is-invalid @enderror" 
                            id="last_name" placeholder="Фамилия"
                            name="last_name" 
                            value="@if($item->exists){{$item->last_name}}@else{{old('last_name')}}@endif"
                        >
                        {{-- Сообщение об ошибке --}}
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="first_name">Имя</label>
                        <input type="text"
                            class="form-control @error('first_name') is-invalid @enderror"
                            id="first_name" placeholder="Имя"
                            name="first_name"
                            value="@if($item->exists){{$item->first_name}}@else{{old('first_name')}}@endif"
                        >
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dob">Дата рождения</label>
                        <input type="date"
                            class="form-control @error('dob') is-invalid @enderror"
                            id="dob" placeholder="Дата рождения"
                            name="dob" 
                            value="@if($item->exists){{$item->dob}}@else{{old('dob')}}@endif"
                        >
                        @error('dob')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="height">Рост(см)</label>
                        <input type="number"
                            class="form-control @error('height') is-invalid @enderror"
                            id="height" placeholder="Рост"
                            name="height"
                            value="@if($item->exists){{$item->height}}@else{{old('height')}}@endif"
                        >
                        @error('height')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="weight">Вес(кг)</label>
                        <input type="number"
                            class="form-control @error('weight') is-invalid @enderror"
                            id="weight" placeholder="Вес"
                            name="weight" 
                            value="@if($item->exists){{$item->weight}}@else{{old('weight')}}@endif"
                        >
                        @error('weight')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Краткое описание</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description"
                            cols="30" rows="10"
                        >@if($item->exists){{$item->description}}@else{{old('description')}}@endif</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
</div>
                     <button type="submit" class="btn btn-primary">@if($item->exists) Изменить @else Добавить @endif</button>
                     <a href="@if($item->exists) {{route('student.show', $item->id)}} @else {{route('student.index')}} @endif" class="float-right">Назад</a>
