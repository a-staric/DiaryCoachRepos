<div>
    <input class="form-control" wire:model="search" type="text" placeholder="Введите имя или фамилию спортсмена"/>
    <br>
    <ul class="list-group list-group-flush">
        @if($search == '')
        @elseif(count($students) == 0)
            <li class="list-group-item">По вашему запросу "{{$search}}" ничего не найдено. Извините!</li>
            <a href="{{route('student.create')}}" class="list-group-item list-group-item-action">Создать</a>
        @else
            @foreach($students as $student)
                <a href="{{route('student.show', $student->id)}}" class="list-group-item list-group-item-action">
                    {{ $student->last_name }} {{$student->first_name}}
                    </a>
            @endforeach
        @endif
    </ul>
</div>
