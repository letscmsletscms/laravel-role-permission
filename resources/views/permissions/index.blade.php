@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h2>Permissions</h2>
    </div>
    <!-- <div class="col-md-4">
    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
    </div> -->
</div>
   
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-hover">
  <thead class=bg-dark>
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Guard</th>
   <th width="280px">Action</th>
 </tr>
  </thead>
  <tbody>
 @foreach ($permissions as $permission)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $permission->name }}</td>
    <td>{{ $permission->guard_name }}</td>
    
    <td>

       <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
  </tbody>
 @endforeach
</table>

@endsection