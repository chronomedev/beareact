@extends('layouts.app-admin',[

'pageTitle' => 'Blog',

])

@section('title', 'Blog')

@section('content')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
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
                        <a href="{{ route('blog-page.add') }}" class="btn btn-outline-primary btn-sm">
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
                            <h3 class="mb-0">Blog</h3>
                        </div>
                        <div class="card card-frame">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="position: sticky; top: 0; background:#eee;">
                                            <th style="font-weight: bold">No.</th>
                                            <th style="font-weight: bold">Date Post</th>
                                            <th style="font-weight: bold">Slug</th>
                                            <th style="font-weight: bold">Title</th>
                                            <th style="font-weight: bold">Sub Title</th>
                                            <!--<th style="font-weight: bold">Description</th>-->
                                            <th style="font-weight: bold">Image Header</th>
                                            <th style="font-weight: bold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($blog->count() == 0)
                                            <tr class="text-center">
                                                <td colspan="7">No blog to display.</td>
                                            </tr>
                                        @endif
                                        @foreach ($blog as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->created_at }}</td>
                                                <td>{{ $row->slug }}</td>
                                                <td>{{ $row->title }}</td>
                                                <td>{{ $row->sub_title }}</td>
                                                <!--<td>{!! $row->description !!}</td>-->
                                                <td>
                                                    <img class="img-fluid" width="250px" height="250px"  src="{{ asset('uploaded-file/blog/' . $row->image_path) }}">
                                                </td>
                                                <td class="text-center">
                                                    <div style="display:inline-block;">
                                                        <a href="{{ route('blog-page.show', $row->slug) }}"
                                                            class="btn btn-sm btn-primary d-inline">
                                                            <i class="fas fa-eye fa-sm text-white-100"></i>
                                                        </a>
                                                    </div>
                                                    <div style="display:inline-block;">
                                                        <a href="{{ route('blog-page.edit', $row->blog_id) }}"
                                                            class="btn btn-sm btn-success d-inline">
                                                            <i class="fas fa-edit fa-sm text-white-100"></i>
                                                        </a>
                                                    </div>
                                                    <div style="display:inline-block;">
                                                        <form action="{{ route('blog-page.delete', $row->blog_id) }}"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')"
                                                            class="d-inline">
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
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div>
                                            Showing
                                            {{ $blog->firstItem() }}
                                            to
                                            {{ $blog->lastItem() }}
                                            of
                                            {{ $blog->total() }}
                                            entries
                                        </div>
            
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <div class="float-right">
                                            {{ $blog->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
