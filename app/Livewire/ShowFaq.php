<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class ShowFaq extends Component
{

    
    public function render()
    {

        $faqs = Faq::where('status',true)->get();

        return view('livewire.show-faq',[

            'faqs' => $faqs,
        ]);
    }
}
