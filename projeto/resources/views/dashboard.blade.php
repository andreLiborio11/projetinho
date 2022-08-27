@extends ('layout.main')

@section('title','Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas criacoes</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count(events)>0)
    @else
    <p>voce nao criou nada , <a href="/events/create">Criar aqui!!!</a></p>
    @endif
</div>




@endsection