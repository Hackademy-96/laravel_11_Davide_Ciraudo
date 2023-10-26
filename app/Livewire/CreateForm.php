<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    public $titolo;
    public $sottotitolo;
    public $descrizione;
    public $prezzo;

    protected $rules=[
        'titolo' =>'required|min:5',
        'sottotitolo' =>'required|min:5',
        'descrizione' =>'required|min:5',
        'prezzo' =>'required',
    ];

    protected $messages=[
        'titolo.required'=>'il titolo è obbligatorio',
        'titolo.min'=>'il titolo deve essere di almeno 5 caratteri',

        'sottotitolo.required'=>'il sottotitolo è obbligatorio',
        'sottotitolo.min'=>'il sottotitolo deve essere di almeno 5 caratteri',

        'descrizione.required'=>'la descrizione è obbligatoria',
        'descrizione.min'=>'la descrizione deve essere di almeno 5 caratteri',

        'prezzo.required'=>'il prezzo è obbligatorio',        
    ];

    public function updated($property){
        $this->validateOnly($property);
    }

    public function store(){
    
        $this->validate();

        $article= Article::create([
            'titolo' => $this->titolo,
            'sottotitolo' => $this->sottotitolo,
            'descrizione' => $this->descrizione,
            'prezzo' => $this->prezzo,
        ]);
        
        $this->reset();
        session()->flash('message', 'Articolo caricato correttamente');

    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
