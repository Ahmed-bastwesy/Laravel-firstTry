@extends('layouts.header')

@section('title') Create Posts  @endsection
@section('postData')
<form >
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  >
  </div>
  <div class="form-group">
    <label for="Description">Description</label>
    <textarea class="form-control"> </textarea>
  </div>
  <div class="form-group">
    <label for="postCreator">Post Creator</label>
    <select class="form-control" id='postCreator' >
        <option value="1"> Ahmed</option>
        <option value="2"> Mohamed</option>
        <option value="3"> Ali</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>

@endsection
