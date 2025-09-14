@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Show Post</h2>
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>{{ $post->title }}</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>{{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection