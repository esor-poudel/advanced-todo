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
            Editing

            </th>

            <th>
            Trash
            </th>
            </thead>
            <tbody>
           @if($posts->count()>0)

           @foreach($posts as $post)
            <tr>
            <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
            <td>{{$post->title}}</td>
            <td><a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-success">edit</a></td>
            <td><a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">Trash</a></td>
           
            
            </tr>
           

           @endforeach
           @else
           <tr>
                <th colspan="5" class="text-center">No Post Till Now </th>
                </tr>

           @endif
            </tbody>

            </table>
</div>

</div>


@stop