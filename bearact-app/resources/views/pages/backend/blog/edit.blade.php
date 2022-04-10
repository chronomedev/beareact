@extends('layouts.app-admin',[

'pageTitle' => 'Edit Blog',

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
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Edit</a>
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
                                <h3 class="mb-0">Edit Blog</h3>
                            </div>
                            <div class="col">
                                <a href="{{ route('blog-page.index') }}" class="btn btn-dark btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <form action="{{ route('blog-page.update', $blog->blog_id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" id="blog_id" name="blog_id" value="{{ $blog->blog_id }}" > --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" id="title" value="{{ $blog->title }}" autofocus>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sub_title">Sub Title</label>
                                        <input class="form-control @error('sub_title') is-invalid @enderror" name="sub_title"
                                            type="text" id="sub_title" value="{{ $blog->sub_title }}" >
                                        @error('sub_title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" cols="30" rows="20" class="form-control @error('description') is-invalid @enderror" name="description" id="description">
                                            {{ $blog->description }}
                                        </textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image_path">Select Image</label>
                                        <input class="form-control" name="image_path" type="file" id="image_path">
                                        @error('image_path')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img class="img-fluid" width="250px" height="250px" src="{{ asset('uploaded-file/blog/' . $blog->image_path) }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meta_tag">Meta Tag</label>
                                        <input value="{{ $blog->meta_tag }}" class="form-control "name="meta_tag" id="meta_tag" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea id="meta_description" cols="5" rows="5" class="form-control" name="meta_description" id="meta_description">
                                            {{ $blog->meta_description }}
                                        </textarea> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script> -->

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        
        CKEDITOR.replace('description', options); 



    </script>


@endsection
