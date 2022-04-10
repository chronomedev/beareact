@extends('layouts.app-admin',[

'pageTitle' => 'Add User',

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
            <div class="col-md-8">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-0">Add User</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                                            type="text" id="name" placeholder="Ex: John" autofocus>
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
                                        <input class="form-control @error('username') is-invalid @enderror" name="username"
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
                                        <input class="form-control @error('email') is-invalid @enderror" name="email"
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
                                        <label for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                                            type="password" class="form-control" id="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role" class="form-control" id="role">
                                            <option selected disabled>- Choose Role -</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
