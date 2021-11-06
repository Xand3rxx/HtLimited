<link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@extends('layouts.admin')
@section('title', 'Editing '.$post['title'])
@section('content')

<!-- BEGIN .app-main -->
<div class="app-main">
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-equalizer2"></i>
                    </div>
                    <div class="page-title">
                        <h5>Edit Blog Post</h5>
                        <h6 class="sub-heading">This page allows you to edit and update a blog post.</h6>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END: .main-heading -->

    <div class="main-content">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    @include('admin.posts._errors')
                    <form action="{{route('admin.posts.update', $post['uuid'])}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                            <div class="card-header">Edit Blog Post</div>
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-8 col-md-8">
                                        <label for="title" class="col-form-label"><span class="text-danger">*</span>Post Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') ?? $post['title'] }}" required>
                                        @error('title')
                                            <x-alert :message="$message" />
                                        @enderror
                                    </div>

                                    <div class="was-validated col-4 col-md-4">
                                        <label for="image" class="col-form-label"><span class="text-danger">*</span>Cover Image</label>

                                        <br>
                                        <label class="form-control custom-file">
                                            <input type="file" id="cover_image" accept="image/*" class="custom-file-input" @error('cover_image') is-invalid @enderror name="cover_image" id="cover_image">
                                            <span class="custom-file-control"></span>
                                        </label>
                                        <br>
                                        <small class="text-muted">Current Image: {{ $post['cover_image']  }}</small>
                                        @error('cover_image')
                                            <x-alert :message="$message" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        <fieldset class="uk-margin">
                            <div class="laraberg-sidebar">
                                <textarea  class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" placeholder="Write a brief description of the post" rows="10" required>{{ old('excerpt') ?? $post['excerpt'] }}</textarea>
                            </div>

                            <div class="laraberg-sidebar">
                                <label for="category_id" class="col-form-label">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option selected disabled value="">Select...</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}" {{ ($category['id'] == $post['category_id']) ? 'selected' : ''}}>{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <x-alert :message="$message" />
                                @enderror
                            </div>

                            <div class="laraberg-sidebar">
                                <label for="status" class="col-form-label"><span class="text-danger">*</span>Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" required>
                                    <option @if($post['status'] == 'active') selected @endif value="active">Publish</option>
                                    <option @if($post['status'] == 'inactive') selected @endif value="inactive">Draft</option>
                                </select>
                                @error('status')
                                    <x-alert :message="$message" />
                                @enderror
                            </div>


                            <div class="laraberg-sidebar">
                                <span placeholder="Tags">Tags</span>
                                @foreach($post['tags'] as $item)@endforeach

                                @foreach($tags as $tag)
                                    <label for="{{ $tag['name'] }}">{{ $tag['name'] ?? 'Unavailable'}}</label>
                                    <input id="{{ $tag['name'] }}" {{ ($tag['id'] == $item['id']) ? 'checked' : '' }} value="{{ old('tag') ?? $tag['id'] }}" name="tag[]" type="checkbox">
                                @endforeach
                            </div>


                            <div class="uk-margin">
                                <textarea name="content" id="content" hidden>{{ old('content') ?? $post->lb_raw_content }} </textarea>
                            </div>
                        </fieldset>

                        <div class="row gutters ml-2 mt-4">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{ URL::previous() }}" class="btn btn-danger" type="submit">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('vendor/laraberg/js/react.production.min.js') }}"></script>
    <script src="{{ asset('vendor/laraberg/js/react-dom.production.min.js') }}"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script>
        let customSearch = (search, perPage, type) => {
            return [
                {
                title: 'HT Limited',
                url: 'www.ht-limitedng.net'
                }
            ]
        }

        window.addEventListener('DOMContentLoaded', () => {
            Laraberg.init('content', {
                height: '600px',
                laravelFilemanager: true,
                sidebar: true,
                searchCb: customSearch
            })
        })
    </script>
@endpush
@endsection



