<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Categories;
use Livewire\Component;

class BlogDetils extends Component
{
    public $blogID;
    public $categori;
    public $images;

    public function mount($id) {
        $this->blogID = Article::findOrFail($id);
        $categoriesID = $this->blogID->categories_id;

        $this->categori = Categories::findOrFail($categoriesID);
    } 

    public function render()
    {

        return view('livewire.blog-detils',[
            'articles' => $this->blogID,
            'categori'=> $this->categori,
        ]);
        
    }
}
