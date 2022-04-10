@extends('layouts.app-admin',[

'pageTitle' => 'Admin Dashboard',

])

@section('title', 'Dashboard')

@section('content')
    {{-- <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard {{ $user->name }}
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p><strong>Selamat datang {{ $user->name }}!</strong> Anda telah melakukan login sebagai
                            {{ $user->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <style>
        .scroll-x {
            overflow-y: auto;
        }

        .table {
            word-wrap: none;
            white-space: nowrap;
        }

    </style>

    <!-- Header -->
    <div class="header bg-dark pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card card-frame">
                    <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <p class="mb-0"><strong>Selamat datang {{ $user->name }}!</strong> Anda telah melakukan login sebagai
                                <strong>{{ $user->role }}</strong></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                <div class="scroll-x">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="card card-frame">
                            <div class="card-body">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

@endsection
