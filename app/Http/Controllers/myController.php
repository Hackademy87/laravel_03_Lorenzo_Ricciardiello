<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
  public $films = [
    [
        "id" => 1,
        "titolo" => "Il Cavaliere Oscuro",
        "anno" => "2008",
        "trama" => "trama",
        "regista" => "Christopher Nolan",
        "foto"=> "/img/Batman.jpg",
        "categoria" => 'hero',
    ],

    [
        "id" => 2,
        "titolo" => "The Flash",
        "anno" => "2023",
        "trama" => "trama",
        "regista" => "Andy Muschietti",
        "foto"=> "/img/theflash.webp",
        "categoria" => 'hero',
    ],

    [   "id"=>3,
        "titolo" => "Shutter Island",
        "anno" => "2010",
        "trama" => "trama",
        "regista" => "Martin Scorsese",
        "foto"=> "/img/Shutter Island.jpg",
        "categoria" => 'thriller',
    ],

    [
        "id" => 4,
        "titolo" => "Inception",
        "anno" => "2010",
        "trama" => "trama",
        "regista" => "Christopher Nolan",
        "foto"=> "/img/WOW.webp",
        "categoria" => 'thriller',
    ],
    
    ];


    public $categorie = [
        'thriller',
        'commedia',
        'horror',
        'hero',
        'romantico'
   ];















    function welcome(){
        return view('welcome',['mostraFilm'=>$this->films,
    
    
    ]);
    }







    public function categoriePerNomi($nomeCate){

        $filmsCategoria = [];

        foreach($this->films as $film){
            if($nomeCate == $film['categoria']){
                
            array_push($filmsCategoria, $film);
            }
        }
        if (empty($filmsCategoria)) {
            return view('noresult');
        }
        return view('generi', ['filmsCat' => $filmsCategoria,
    'genere'=>$nomeCate
    ]);
    }




    public function schedaFilm($id){

        foreach($this->films as $film){
    
            if($film['id'] == $id){
    
                return view('scheda',['film'=> $film,]);
            }
        }
    
    }
}





















 