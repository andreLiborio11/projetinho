@extends ('layout.main')

@section('title', 'Projeto')

@section('contant')

<div id="search-container" class="col-md-12">
    <h1>Busque um Conteudo</h1>
    <form action="/" method="GET">
        <input type="text" class="form-control" name="search" id="search">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Conteudos</h2>
    <p class="subtitle">veja os conteudos</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)

        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image}}" alt="{{ $event ->title}}">
            <div class="card-body">
                <p class="card-date"></p>
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-notas">X notas</p>
                <a href="/events/{{ $event->id }}" class="bnt bnt-primary"> Detalhe</a>
            </div>
        </div>


        @endforeach
        @if (count ($events) ==0)
         <p>Nada ainda criado</p>
         @endif
    </div>
</div>


@endsection