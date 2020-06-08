<div class="form-row flex-column align-items-center">
    <div class="col-md-6">
        @include('layouts.components.session.default_success')
    </div>
    <div class="form-group col-md-6">
        @error('student_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if($students)
        <label for="student_id">Воспитанник</label>
        <select type="text"
            class="form-control"
            id="student_id"
            name="student_id"
        >
                    @foreach ($students as $student)
                    @if($student->id == $plan->student_id)
                        <option selected value="{{$student->id}}">
                            {{$student->last_name}} {{$student->first_name}}
                        </option>
                        @else
                        <option value="{{$student->id}}">
                            {{$student->last_name}} {{$student->first_name}}
                        </option>
                        @endif
                    @endforeach
        </select>
        @else
        <a href="{{route('student.create')}}" class="float-left">Нет воспитанников! Добавим?</a>
        @endif
        
    </div>
    <div class="form-group col-md-6">
        @error('training_kind_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if($trainingkinds)
        <label for="training_kind_id">Задание</label>
        <select type="text"
            class="form-control"
            id="training_kind_id"
            name="training_kind_id"
        >
                    @foreach ($trainingkinds as $trainingkind)
                        @if($trainingkind->id == $plan->training_kind_id)
                        <option selected value="{{$trainingkind->id}}">
                            {{$trainingkind->name}}
                            </option>
                        @else
                        <option value="{{$trainingkind->id}}">
                            {{$trainingkind->name}}
                            </option>
                        @endif 
                    @endforeach
        </select>
        @else
        <a href="{{route('trainingkind.create')}}" class="float-left">Нет заданий! Добавим?</a>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label for="plan_date">Дата</label>
        <input type="date"
            class="form-control @error('plan_date') is-invalid @enderror"
            id="plan_date" placeholder="Дата рождения"
            name="plan_date" 
            value="@if($plan->exists){{$plan->plan_date}}@else{{old('plan_date')}}@endif"
        >
        @error('plan_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">@if($plan->exists) Изменить @else Добавить @endif</button>
        <a href="{{route('plan.index')}}" class="float-right">Назад</a>
    </div>
</div>

