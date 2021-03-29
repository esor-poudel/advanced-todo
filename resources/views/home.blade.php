@extends('layouts.app')

@section('content')
<div class="col-lg-3">
<div class="panel panel-info">
<div class="panel-heading text-center">
<h1>posts</h1>
</div>
<div class="panel-body text-center">
<h1>{{$posts_count}}</h1>
</div>
</div>
</div>
<br><br>

<div class="col-lg-3">
<div class="panel panel-info">
<div class="panel-heading text-center">
<h1>trashed</h1>
</div>
<div class="panel-body text-center">
<h1>{{$trashed_count}}</h1>
</div>
</div>
</div>
<br><br>

<div class="col-lg-3">
<div class="panel panel-info">
<div class="panel-heading text-center">
<h1>USER</h1>
</div>
<div class="panel-body text-center">
<h1>{{$users_count}}</h1>
</div>
</div>
</div>

<br><br>

<div class="col-lg-3">
<div class="panel panel-info">
<div class="panel-heading text-center">
<h1>CATEGORIES</h1>
</div>
<div class="panel-body text-center">
<h1>{{$categories_count}}</h1>
</div>
</div>
</div>
@endsection

