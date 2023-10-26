<div>
  @if (session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
  @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
             <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->titolo}}</td>
            <td>{{$article->sottotitolo}}</td>
            <td>{{$article->descrizione}}</td>
            <td>{{$article->prezzo}} €</td>
            <td><a class="btn btn-primary"  href="{{route('article.edit', compact('article'))}}">Modifica</a></td>
            <td><a wire:click='delete({{$article}})' class="btn btn-danger">Elimina</a></td>
          </tr>   
            @endforeach
          
        </tbody>
      </table>
</div>
