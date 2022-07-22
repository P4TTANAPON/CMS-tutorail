@extends('layouts.app');
@section('content')
    <div class="card card-default">
        <div class="card-header">
            Create Post
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="4" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="" cols="8" rows="8" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create Post" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection


