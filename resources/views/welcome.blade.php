
<x-layout>
<x-slot name="title">Welcome</x-slot>
<section class="container mt-5" >
<div class="row" >
@foreach($mostraFilm as $film)
<div class="col-12 col-md-3 my-3">
    
<x-card

filmTitolo="{{$film['titolo']}}"
filmTrama="{{$film['trama']}}"
filmFoto="{{$film['foto']}}"
filmId="{{$film['id']}}"
filmAnno="{{$film['anno']}}"
filmCategoria="{{$film['categoria']}}"
provenienza="welcome"


></x-card>
</div>
@endforeach
</div>
</section>








</x-layout>
    

<x-slot name="title">Welcome</x-slot>







