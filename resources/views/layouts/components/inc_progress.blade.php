<div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="student_id">student_id</label>
                        <input type="text" 
                            class="form-control @error('student_id') is-invalid @enderror" 
                            id="student_id" placeholder="ID"
                            name="student_id" 
                            value="{{$student_id}}"
                        >
                        {{-- Сообщение об ошибке --}}
                        @error('student_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="distance_id">Дистанция</label>
                        <select type="text" 
                            class="form-control @error('distance_id') is-invalid @enderror" 
                            id="distance_id"
                            name="distance_id" 
                        >
                                    @foreach ($distances as $distance)
                                        <option value="{{$distance->id}}">
                                            {{$distance->name}}
                                            </option>
                                    @endforeach
                        </select>
                        {{-- Сообщение об ошибке --}}
                        @error('distance_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="result_time">Время</label>
                        <input type="text"
                            class="form-control @error('result_time') is-invalid @enderror"
                            id="result_time" placeholder="Имя"
                            name="result_time"
                            value="{{old('result_time')}}"
                        >
                        @error('result_time')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="result_date">Дата</label>
                        <input type="date"
                            class="form-control @error('result_date') is-invalid @enderror"
                            id="result_date" placeholder="Дата рождения"
                            name="result_date" 
                            value="{{old('result_date')}}"
                        >
                        @error('result_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    
                    
</div>
                     <button type="submit" class="btn btn-primary">Добавить</button>
