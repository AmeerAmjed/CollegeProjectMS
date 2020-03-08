@extends('layouts.app')

@section('title', 'Projects - college '.$college->name)

@section('content')
    <!-- header start-->
    <div class="header text-center">
        <h2 style='text-transform: capitalize;'>
            {{ $college->name }}
        </h2>
    </div>

    <div class="search2">
        <center>
            <div class="container">
                <div class=" col-lg-8  col-sm-12 ">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_project" placeholder="search">
                        </div>
                        <div class="bottom">
                            <button class="search-icons" type="submit">
                                <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
        </center>
    </div>
    </div>
    <!-- end search form-->

    <div class="card_project">
        <div class="container">
            <div class="row">
                @foreach ($college->projects as $project)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <img src="/storage/images/projects/{{ $project->image }}" class="card-img-top" alt="">
                            <div class="card-body " >
                                {{-- <img src="/storage/images/users/{{ $project->users[0]->avatar }}"> --}}
                                <p class="card-text w-100" style='float: unset;'>
                                    {{ $project->description }}<br>
                                    <a href="{{ $project->link }}" class="code"> <i class="fa fa-github"></i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
