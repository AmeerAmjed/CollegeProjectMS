@extends('layouts.app')

@section('title', 'MS '.Auth::user()->fullname)

@section('content')


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 visible-sm"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

        <!-- Demo content -->
            <!--end header-->
            <div class="row">
                @foreach (Auth::user()->projects as $project)
                    <div class="card tranining">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-4">
                                <p class="text">
                                    {{ $project->name }} 
                                    <small style="color:#999595"> 
                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                        {{ date('Y-m-d', strtotime($project->created_at)) }} 
                                    </small>
                                </p>
                                {{-- <label class="check-box">
                                    <input type="checkbox" />
                                    <span  style="font-size: 1.1rem;color:#e6d12b;"> 
                                        <i class="fa fa-star-o" aria-hidden="true"></i> 
                                    </span>
                                </label> --}}
                            </div>
                            <article>
                                Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod
                                tempor incididunalquis nostrud exercitation... 
                                <a href="{{ $project->link }}">github</a>
                            </article>
    
                            <div class="card-footer"></div>
                        </div>
                        <div class="card-text card-show pt-4 ">
                            @foreach($project->users as $user)
                                <a href="/user/{{ $user->id }}">{{'@'.$user->fullname}}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
            </div>

        </div>
    </div>

@endsection
