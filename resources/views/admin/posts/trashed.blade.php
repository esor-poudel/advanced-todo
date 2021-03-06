@extends('layouts.app')


@section('content')
<div class="panel panel-default">
<div class="panel-body">
<table class="table table-hover">

            <thead>

            <th>

            image
            </th>
            <th>
            title
            </th>
            <th>
            Restore

            </th>

            <th>
            Delete
            </th>
            </thead>
            <tbody>
           @if($posts->count()>0)

           @foreach($posts as $post)
            <tr>
            <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
            <td>{{$post->title}}</td>
            <td><a href="{{route('posts.restore',['id'=>$post->id])}}" class="btn btn-xs btn-success">Restore</a></td>
            <td><a href="{{route('posts.kill',['id'=>$post->id])}}" class="btn btn-danger">delete</a></td>
           
            
            </tr>
           

           @endforeach
           @else
                <tr>
                <th colspan="5" class="text-center">No Trashed Data</th>
                </tr>
           @endif
            </tbody>

            </table>
</div>

</div>


@stop