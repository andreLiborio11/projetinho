@extends ('layout.main')

@section('title','editar' .'$event->title')

@section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event-> title}}</h1>
    <form action="/events/update/{{ $event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-grup">
        <label for="image">Imagem </label>
        <input type="type" class="form-control-file" id="image" name="image">
        <img src="/img/events{{ $event->image}}" alt="">

       </div>
       <div class="form-grup">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titulo ..." value="{{ $event->title}}">

       </div>
       <div class="form-grup">
        <label for="title">Nota</label>
        <input type="text" class="form-control" id="nota" name="nota" placeholder="Nota ...">
        
       </div>
       <div class="form-grup">
        <label for="title">Descriçao</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao ...">
        
       </div>
       <input class="btn btn-primary" type="submit" value="Editar Conteudo">

    </form>

 </div>
 @endsection