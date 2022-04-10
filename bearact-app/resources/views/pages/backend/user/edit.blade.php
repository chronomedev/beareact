@extends('layouts.app-admin',[

'pageTitle' => 'Edit User',

])

@section('title', 'User')

@section('content')

    <!-- Header -->
    <div class="header bg-dark pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">User</h6>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Add</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-0">Edit User</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('user.index') }}" class="btn btn-dark btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $users->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $users->id }}" type="" id="id" name="id"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input value="{{ $users->name }}"
                                            class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                            id="name" placeholder="Ex: John" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input value="{{ $users->username }}"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            type="text" class="form-control" id="username" placeholder="Ex: johndoe27">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Email">Email Address</label>
                                        <input value="{{ $users->email }}"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            type="email" class="form-control" id="Email"
                                            placeholder="Ex: johndoe27@example.com">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role" class="form-control" id="role" value>
                                            <option value="{{ $users->role }}" selected>{{ $users->role }}</option>
                                            <option disabled>- Choose Role -</option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-0">Edit Password</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('user.index') }}" class="btn btn-dark btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <form action="{{ route('user.change-password', $users->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ $users->id }}" type="" id="id" name="id"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <button class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
