<x-layout>

<x-slot name='title' >Generi</x-slot>

<section class="container-fluid mt-5">
    <div class="row">
<x-schedaFilm filmTitolo="{{$film['titolo']}}"
filmTrama="{{$film['trama']}}"
filmFoto="{{$film['foto']}}"
filmId="{{$film['id']}}"
filmAnno="{{$film['anno']}}"
filmCategoria="{{$film['categoria']}}"
filmRegista="{{$film['regista']}}"
>
</x-schedaFilm>
</div>
</section>









</x-layout>