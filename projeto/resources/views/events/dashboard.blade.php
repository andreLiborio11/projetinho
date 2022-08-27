@extends ('layout.main')

@section('title','Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas criacoes</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count(events)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">nome</th>
                <th scope="col">nota</th>
                <th scope="col">acoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                    <tr>
                        <td scope="row">{{ $loop->index + 1}}</td>
                        <td><a href="/events/{{$events->id}}"> {{$event->title}}</a></td>
                        <td>0</td>
                        <td>
                            
                            <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn">editar</a>
                        <form action="/events/{{$event->id}}" method="POST">
                            @csf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Deleta</button>
                        </form>
                    </td>
                    </tr>

            @endforeach
        </tbody>
    </table>
    @else
    <p>voce nao criou nada , <a href="/events/create">Criar aqui!!!</a></p>
    @endif
</div>




@endsection