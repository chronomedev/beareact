@extends('layouts.app-admin',[

'pageTitle' => 'User',

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
                <div class="card card-frame">
                    <div class="card-body">
                        <a href="{{ route('user.add') }}" class="btn btn-outline-primary btn-sm">
                            <span><i class="far fa-plus-square"></i></span>
                            <span class="btn-inner--text">Add</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="scroll-x">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">User</h3>
                        </div>
                        <div class="card card-frame">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                    <div class="table-responsive">
                                    <table class="table table-bordered dt" width="100%">
                                        <thead>
                                            <tr style="position: sticky; top: 0; background:#eee;">
                                                <th style="font-weight: bold;">No.</th>
                                                <th style="font-weight: bold;">Name</th>
                                                <th style="font-weight: bold;">Username</th>
                                                <th style="font-weight: bold;">Email</th>
                                                <th style="font-weight: bold;">Role</th>
                                                <th style="font-weight: bold;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->username }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>
                                                    <div class="badge badge-warning">
                                                        {{ $row->role }}
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div style="display:inline-block;">
                                                        <a href="{{ route('user.show', $row->id) }}"
                                                            class="btn btn-sm btn-primary d-inline" data-toggle="tooltip" data-placement="top" title="Show">
                                                            <i class="fas fa-eye fa-sm text-white-100"></i>
                                                        </a>
                                                    </div>
                                                    <div style="display:inline-block;">
                                                        <a href="{{ route('user.edit', $row->id) }}"
                                                            class="btn btn-sm btn-success d-inline" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-edit fa-sm text-white-100"></i>
                                                        </a>
                                                    </div>
                                                    <div style="display:inline-block;">
                                                        <form action="{{ route('user.delete', $row->id) }}"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')"
                                                            class="d-inline" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger d-inline">
                                                                <i class="fas fa-times fa-sm text-white-100"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
