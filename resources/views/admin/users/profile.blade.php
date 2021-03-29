@extends('layouts.app')



@section('content')
@include('admin.includes.errors')

<div class="panel panel-default">
<div class="panel-heading">
Edit your Profile
</div>
<div class="panel-body">
<form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<div class="form-group">

<label for="title">Username</label>

<input type="text" name="name" value="{{$user->name}}" class="form-control">
</div>

<div class="form-group">

<label for="title">Email</label>

<input type="email" name="email"  value="{{$user->email}}"class="form-control">
</div>

<div class="form-group">

<label for="title"> New password</label>

<input type="password" name="password" class="form-control">
</div>

<div class="form-group">

<label for="title"> upload new avatar</label>

<input type="file" name="avatar" class="form-control">
</div>

<div class="form-group">

<label for="title"> Facebook profile</label>

<input type="text" name="facebook" value="{{$user->profile->facebook}}"class="form-control">
</div>

<div class="form-group">

<label for="title"> youtube profile</label>

<input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control">
</div>

<div class="form-group">
<label for="about">About You</label>
<textarea name="about" id="about" cols="100" rows="6">{{$user->profile->about}}</textarea>
</div>

<div class="form-group">
<div class="text-center">
<button class="btn btn-success" type="submit">Update Profile</button>
</div>
</div>


</form>
</div>
</div>

@stop