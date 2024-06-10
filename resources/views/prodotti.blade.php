@extends('layouts.app')

@section('content')
    <section class="prodotti">
        <h1>Pagina prodotti</h1>
        <div class="cotainer">
            <div class="row row-cols-3">
                @foreach ($prodotti as $prodotto)
                    <div class="col">
                        <div class="card m-3">
                            <img class="imgfront" src={{ Vite::asset("resources/img/".$prodotto["frontImage"]) }} alt="Img front">
                            <div class="card-body">
                                {{-- <img class="imghover" src={{ Vite::asset("resources/img/".$prodotto["backImage"]) }} alt="Img hover"> --}}

                                <h4>{{ $prodotto['name'] }}</h4>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection
