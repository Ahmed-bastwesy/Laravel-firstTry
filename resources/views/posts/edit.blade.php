@extends('layouts.header')

@section('title') update Post @endsection
@section('postData')


<form >
@foreach ($posts as $post)
    @if($post['id'] == $postId)
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" value="{{$post['title']}}" >
  </div>
  <div class="form-group">
    <label for="Description">Description</label>
    <textarea class="form-control"> {{$post['Description']}}</textarea>
  </div>
  <div class="form-group">
    <label for="postCreator">Post Creator</label>
    <input type="text" class="form-control" id="postCreator" value="{{$post['posted_by']}}"  >
  </div>
  <button type="submit" class="btn btn-success">Update</button>
  @endif
 @endforeach
</form>

@endsection
