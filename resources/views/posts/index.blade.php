@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h2>Posts Management</h2>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Action</th>
   
 </tr>    
 @foreach ($posts as $key => $post)
  <tr>
    <td>{{ ++$i }}</td>
    <!-- <td>{{ $post->id }}</td> -->
    <td>{{ $post->title }}</td>
    <td>
       <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
    </tr>
 @endforeach
</table>

{!! $posts->render() !!}
@endsection
