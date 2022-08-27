@extends ('layout.main')

@section('title',$event->title)

@section('content')


<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="col-md-6" id="image-container">
           <img class="img-fluid" src="/img/events/{{ $event->image }}" alt="{{ $event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
             <h1>{{ $event->title}}</h1>
             <p class="event-nota">{{$event->nota}}</p>
        </div>
        <div class="col-md-12" id="descripition-container">
              <h3>Sobre </h3>
              <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
</div>




@endsection





