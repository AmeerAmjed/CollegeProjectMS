@extends('layouts.app')

@section('title', 'Best Projects')

@section('content')
    


        <!--start card project-->
        <div class="card_project">
            <div class="container">
                <div class="row">
                    @foreach ($colleges as $college)

                        <!--start card-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="/image/computer.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="header"> 
                                        <a href="/projects/{{$college->id}}">{{$college->name}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    
@endsection
