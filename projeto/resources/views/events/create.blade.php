@extends ('layout.main')

@section('title','Criar')

@section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-grup">
        <label for="image">Imagem </label>
        <input type="type" class="form-control-file" id="image" name="image">

       </div>
       <div class="form-grup">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titulo ...">

       </div>
       <div class="form-grup">
        <label for="title">Nota</label>
        <input type="text" class="form-control" id="nota" name="nota" placeholder="Nota ...">
        
       </div>
       <div class="form-grup">
        <label for="title">Descriçao</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao ...">
        
       </div>
       <input class="btn btn-primary" type="submit" value="Criar Conteudo">

    </form>

 </div>
 @endsection