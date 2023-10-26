<div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center display-3 my-5">Modifica Articolo</h2>
                </div>
                <div class="col-12 col-md-12">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    @if ($errors ->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form wire:submit.prevent='edit'>
                        <div class="mb-3">
                          <label for="titolo" class="form-label">Titolo Articolo</label>
                          <input wire:model.live='titolo' type="text" class="form-control" id="titolo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="sottotitolo" class="form-label">Sottotitolo Articolo</label>
                            <input wire:model.live='sottotitolo' type="text" class="form-control" id="sottotitolo" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3 form-floating">
                            <textarea wire:model.live='descrizione' class="form-control" placeholder="Inserisci descrizione" id="descrizione" style="height: 100px"></textarea>
                            <label for="descrizione">Descrizione</label>
                          </div>
                          <div class="mb-3">
                              <label  for="prezzo" class="form-label">Prezzo</label>
                              <input wire:model.live='prezzo' type="number" class="form-control" id="prezzo" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    </div>
