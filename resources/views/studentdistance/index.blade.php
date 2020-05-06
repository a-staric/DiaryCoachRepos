@extends('layouts.app')

@section('content')
        <div class="col-md-12">
       
        @if(session('success'))
              
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session()->get('success') }}
                            <strong>
                            <a href="{{route('student.show', session()->get('id'))}}" class="alert-link">
                            {{ session()->get('l_name') }} {{ session()->get('f_name') }}
                            </a>
                            </strong>
                        </div>
                  
         @endif
            <div class="card">

                <md-toolbar class="md-primary" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Достижения</h3>
                    </div>
                </md-toolbar>

                @foreach ($items as $item )

                        <progress-student :progress_info='@json($item)'></progress-student>

                @endforeach
            </div>
            {{-- {{ $items->links() }} --}}
        </div>
@endsection
