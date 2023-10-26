<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{
    public $articleId;

    public $titolo;
    public $sottotitolo;
    public $descrizione;
    public $prezzo;

    public function mount(){
        $article= Article::find($this->articleId);
        $this->titolo=$article->titolo;
        $this->sottotitolo=$article->sottotitolo;
        $this->descrizione=$article->descrizione;
        $this->prezzo=$article->prezzo;
    }

    public function edit(){

        $article = Article::find($this->articleId);
            
        $article->update([
            'titolo' => $this->titolo,
            'sottotitolo' => $this->sottotitolo,
            'descrizione' => $this->descrizione,
            'prezzo' => $this->prezzo,
        ]);
        
        return redirect(route('homePage'));
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
