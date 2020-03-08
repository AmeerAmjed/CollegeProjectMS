@extends('layouts.admin')

@section('title', 'Admin- Users')
@section('Jtitle', 'User')

@section('content')
    <div class="container" style="margin-bottom: 10%">
        <div id='dashboard' class="card" >
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12">
                        @component('components.search')
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    @foreach ($users as $user)
                        <div class="col-4">
                            <div class="d-flex flex-row border rounded">
                                    <div class="p-0 " style="width: 40%;">
                                        <img  id='{{ $user->id }}-avatar' src="/storage/images/users/{{ $user->avatar }}" class="img-thumbnail border-0 " />
                                    </div>
                                    <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
                                        <h4 class="text-dark"> <a href="/profile/{{$user->id}}"></a> {{ $user->fullname }}</h4>
                                        <h5 class="text-dark" style="text-transform: capitalize">
                                            {{ $user->college ? $user->college->name  : 'None' }}
                                            |
                                            {{ $user->stage ? $user->stage->stage : 'None' }}
                                        </h5>
                                        <ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
                                            <li>
                                                <a target="_blank" href="https://github.com/{{ $user->github }}" class="text-dark">
                                                    <i class="fa fa-github fa-2x"></i>
                                                    {{-- Github --}}
                                                </a>
                                                {{-- <a href="#!">
                                                    {{ $user->role->name }}
                                                </a> --}}
                                            </li>
                                        </ul>
                                        <p id='{{ $user->id }}' class="text-right m-0" >
                                            <a href="#!" class="btn btn-primary setting" disabled>
                                                <i class="fa fa-cog "></i>
                                            </a>
                                            {{-- <a href="#!"  class="btn-active btn @if($user->active) btn-success @else btn-danger @endif ">
                                                @if($user->active)
                                                    <i class="fa fa-toggle-on"></i>
                                                @else
                                                    <i class="fa fa-toggle-off"></i>
                                                @endif
                                            </a> --}}
                                        </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        {{ $users }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="p-0 m-auto" style="width: 30%;">
                        <img  id='0-avatar' src="/storage/images/users/471a1ad342659289433e05a611d206f8.png" class="img-thumbnail border-0 " />
                        <h4 id='userName' class="text-center mt-2"> User Name </h4>
                        <hr>
                    </div>
                    <div>
                        <div class="form-group text-center">
                            <a id='userActive' href="#!"  class="btn-active btn btn-success">
                                {{-- btn-success @else btn-danger --}}
                                <i class="fa fa-toggle-on text-white" ></i>
                            </a>
                        </div>
                        <div class="form-group m-auto" style="width: 50%">
                            <select class="form-control" id="userRole">
                                @foreach ($roles as $role)
                                    <option value='{{ $role->id }}'> {{ $role->name }} </option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id='saveChanges' type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')
  <script src="{{ asset('js/users.js') }}"></script>
@endsection
