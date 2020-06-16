<?php

namespace App\Http\Livewire;

use App\Student;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $search = '%' . $this->search . '%';
        $students = Student::where('last_name', 'like' , $search)
            ->orWhere('first_name', 'like', $search)
            ->get();

        return view('livewire.search', compact('students'));
    }

}
