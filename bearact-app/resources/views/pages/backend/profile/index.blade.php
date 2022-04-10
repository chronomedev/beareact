@extends('layouts.app-admin',[

'title' => 'Profile',
'pageTitle' => 'Profile',

])

@section('title', 'Profile')

@section('content')

    <div class="container-fluid mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <b>User Information</b>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('profile.update', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('argon-template') }}/img/theme/team-4.jpg"
                                        alt="logo-synergy-group-asia" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">User</label>
                                        <input required="" value="{{ Auth::user()->username }}" class="form-control"
                                            type="text" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input required="" value="{{ Auth::user()->name }}" class="form-control"
                                            type="text" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input required="" value="{{ Auth::user()->email }}" class="form-control"
                                            type="email" id="email" name="email" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input required="" value="{{ Auth::user()->password }}" class="form-control"
                                            type="hidden" id="old_password" name="old_password">
                                        <input type="password" id="password" name="password" class="form-control">
                                        <p class="card-text">
                                            <small class="text-danger">kosongkan kolom password jika tidak ingin mengubah
                                                password</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>

                        <hr>

                        <p class="card-text text-right">
                            <small
                                class="text-primary">{{ 'updated at ' . \Carbon\Carbon::parse(Auth::user()->updated_at)->diffForHumans() }}</small>
                        </p>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <b>Edit Password</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
