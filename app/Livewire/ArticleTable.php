<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{
    public function delete(Article $article){
        
        $article->delete();

        session()->flash('message', 'Articolo Eliminato Correttamente!');
    }

    public function render()
    {
        $articles= Article::all();

        return view('livewire.article-table', compact('articles'));
    }
}
