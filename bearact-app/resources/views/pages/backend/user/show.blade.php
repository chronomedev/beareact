@extends('layouts.app-admin',[

'pageTitle' => 'Show User',

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
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-0">Show User</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                        <div class="card card-frame">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $users->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ $users->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $users->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            <td>
                                                <div class="badge badge-warning">
                                                    {{ $users->role }}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
