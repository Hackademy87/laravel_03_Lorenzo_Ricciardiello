




<div class="card" style="width: 18rem; background-color:rgb(212, 210, 210)">
<img class="px-2 py-2" style="height: 400px;" src="{{ $filmFoto}}" alt="foto">
<div class="card-body">
<h5 class="card-title">{{ $filmTitolo}}</h5>
<p class="card-text text-truncate">{{ $filmTrama}}</p>
<a href="{{route('scheda',['id'=>$filmId])}}" class="btn btn-primary">SCHEDA FILM</a>




</div>
<div class="card-footer">
<div class="d-flex justify-content-between ">

<span>Anno: {{$filmAnno}} </span>
@if($provenienza == 'welcome')
<span>Genere: <a href="{{route('generi',['categoria'=>$filmCategoria])}}">{{$filmCategoria}}</a></span>
@else
<span>
{{$filmCategoria}}
</span>
@endif

</div>

</div>
</div>



