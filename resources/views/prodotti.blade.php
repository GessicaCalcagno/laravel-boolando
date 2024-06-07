@extends('layouts.app')

@section('content')
<section class="prodotti">
    <h1>Pagina prodotti</h1>
    <div class="cotainer">
        <div class="row">
            @foreach ($prodotti as $prodotto)
            <div class="col col-4">
                <div class="card">
                    <img class="imgfront" src={{ Vite::asset("resources/img/".$prodotto["frontImage"]) }} alt="Img front">
        {{-- <img class="imghover" src={{ Vite::asset("resources/img/".$prodotto["backImage"]) }} alt="Img hover"> --}}
                    </div>
                </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
@endsection