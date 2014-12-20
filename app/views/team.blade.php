@extends('layout')

@section('content')

    <div class="container marketing">

        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif

        </div>




    </div>

    <div class="container marketing">

         <div class="row rowteam">
           <div class="col-lg-4">
             <img class="img-circle" src="{{ asset('img/renee.png') }}" style="width: 240px;">
             <h2>Renée Veldman-Tentori</h2>
             <p>Renee is a Dutch Australian who spent the last decade living between the two countries, but has now settled here long term.  She is a social media trainer and consultant through her business Zestee and loves the history and culture in The Netherlands, which she writes about on her blog Culture and Kids.</p>
           </div><!-- /.col-lg-4 -->
           <div class="col-lg-4">

             <img class="img-circle" src="{{ asset('img/michiel.png') }}" style="width: 240px;">
             <h2>Michiel Kraaijeveld</h2>
             <p>Michiel is the owner of Rots-Vast Groep Delft and for many years has been renting properties to expats in Delft.  It was his desire to help tenants with their many questions about finding their way in a new city which inspired him to develop the concept of Living In Delft.  He is also the chairman of MKB Delft (Small and medium size business association) and a member of the expat team at Gemeente Delft.</p>
           </div><!-- /.col-lg-4 -->
           <div class="col-lg-4">
             <img class="img-circle" src="{{ asset('img/evelien.png') }}" style="width: 240px;">
             <h2>Evelien van der Kruit</h2>
             <p>Evelien is the director of Delft Marketing and is passionate about sharing the culture and history of Delft.</p>
           </div><!-- /.col-lg-4 -->
           </div>


@stop