<?php

namespace App\Livewire;

use App\Models\team;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    {

        $teams = team::where('status','1')->get();
        return view('livewire.show-team',[
            'teams' =>$teams,
        ]);
    }
}
