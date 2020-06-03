<div class="form-row flex-column align-items-center">
    <div class="form-group col-md-6">
        <label for="student_id">Воспитанник</label>
        <select type="text"
            class="form-control"
            id="student_id"
            name="student_id"
        >
                    @foreach ($students as $student)
                        <option value="{{$student->id}}">
                            {{$student->last_name}} {{$student->first_name}}
                            </option>
                    @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="distance_id">Дистанция</label>
        <select type="text"
            class="form-control"
            id="distance_id"
            name="distance_id"
        >
                    @foreach ($distances as $distance)
                        <option value="{{$distance->id}}">
                            {{$distance->name}}
                            </option>
                    @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="competition_id">Соревнование</label>
        <select type="text"
            class="form-control"
            id="competition_id"
            name="competition_id"
        >
                    @foreach ($competitions as $competition)
                        @if(request()->get('comp_id') == $competition->id)
                            <option  selected value="{{$competition->id}}">
                            {{$competition->name}}
                            </option>
                        @else
                            <option  value="{{$competition->id}}">
                            {{$competition->name}}
                            </option>
                        @endif
                    @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="result_time">Время</label>
        <input type="time"
         class="form-control @error('result_time') is-invalid @enderror"
         step="1"
         id="result_time"
         name="result_time">

         {{-- Сообщение об ошибке --}}
        @error('result_time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</div>

