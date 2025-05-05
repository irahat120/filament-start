<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Card;

class ShowBlog extends Component
{
    public function render()
    {

        $cat = Article::select('categories_id')->where('status',1)->get();
        $cat_count = Article::selectRaw('categories_id,count(*) as total')->groupBy('categories_id')->get();

        



        $categorics = Categories::select('name','id')->whereIn('id',$cat)->get();


        // $categoryIds = Article::where('status', 1)->pluck('categories_id');
        // $categorics = Categories::whereIn('id', $categoryIds)->pluck('name');
        $blog = Article::where('status',true)->get();
        return view('livewire.show-blog',[

            'blogs' =>$blog,

            'categories'=>$categorics,
            'counts' =>$cat_count,
        ]);
    }

    
}
