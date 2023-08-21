<x-layout>

<x-slot name='title' >Generi</x-slot>



<h1> GENERE : {{ $genere }} - TROVATI : {{count($filmsCat)}} </h1>



<section class="container mt-5" >
<div class="row" >
@foreach($filmsCat as $film)
<div class="col-12 col-md-3 my-3">
    
<x-card

filmTitolo="{{$film['titolo']}}"
filmTrama="{{$film['trama']}}"
filmFoto="{{$film['foto']}}"
filmId="{{$film['id']}}"
filmAnno="{{$film['anno']}}"
filmCategoria="{{$film['categoria']}}"
provenienza="generi"

></x-card>
</div>
@endforeach
</div>
</section>








</x-layout>