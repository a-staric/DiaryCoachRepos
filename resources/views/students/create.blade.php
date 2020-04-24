@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <form action="{{route('student.store')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="last_name">Фамилия</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Фамилия" name="last_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="first_name">Имя</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Имя" name="first_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dob">Дата рождения</label>
                        <input type="date" class="form-control" id="dob" placeholder="Дата рождения" name="dob">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="height">Рост(см)</label>
                        <input type="number" class="form-control" id="height" placeholder="Рост" name="height">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="weight">Вес(кг)</label>
                        <input type="number" class="form-control" id="weight" placeholder="Вес" name="weight">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Краткое описание</label>
                        <textarea class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
@endsection
