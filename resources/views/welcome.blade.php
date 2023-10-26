<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:counter></livewire:counter>
            </div>
            <div class="col-12">
                    <a class="btn text-white btn-info" href="{{route('article.create')}}">Aggiungi articolo</a>                              
            </div>
            <div class="col-12 my-5">
                <livewire:article-table></livewire:article-table>
            </div>
        </div>
    </div>
</x-layout>