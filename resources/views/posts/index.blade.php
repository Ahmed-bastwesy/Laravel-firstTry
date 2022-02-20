
@extends('layouts.header')

@section('title') index  @endsection

@section('postData')
        <div class="text-center m-2" ><a href="/posts/create" class="btn btn-success"> Create Post</a></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted_by</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['posted_by']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td><a href="/posts/{{$post['id']}}" class="btn btn-info"> View</a></td>
                    <td><a href="/posts/edit/{{$post['id']}}" class="btn btn-primary"> Edit</a></td>
                    <td><a href="#" class="btn btn-danger"> Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection


