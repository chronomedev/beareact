@extends('layouts.app-admin',[

'pageTitle' => 'Show Blog',

])

@section('title', 'Blog')

@section('content')

    <!-- Header -->
    <div class="header bg-dark pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
                    </div>
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
                                <h3 class="mb-0">Show News</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('blog-page.index') }}"
                                    class="btn btn-dark btn-sm float-right">
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
                                        <th style="font-weight: bold;">Slug</th>
                                        <td>{{ $news->slug }}</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: bold;">Title</th>
                                        <td>{{ $news->title }}</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: bold;">Sub Title</th>
                                        <td>{{ $news->sub_title }}</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: bold;">Description</th>
                                        <td>{!! $news->description !!}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th style="font-weight: bold;">Image</th>
                                        <td><img class="img-fluid" width="250px" height="250px"  src="{{ asset('uploaded-file/news/' . $news->image_path) }}"></td>
                                    </tr>
                                    
                                    <tr>
                                        <th style="font-weight: bold;">Link</th>
                                        <td><a href={{ url("/news/{$news->slug}") }} target="_blank">See Here</a></td>
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
