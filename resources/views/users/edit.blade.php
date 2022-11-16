
@extends('layouts.admin.app')


@section('content')
<div class="row"><h2></h2></div>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Edit User</h2>
            </div>
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<table class="table table-striped table-bordered display">
    <tr>
        <th>Name:</th>
        <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <th>Password:</th>
        <td>{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <th>Confirm Password:</th>
        <td>{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <th>Role:</th>
        <td>{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}</td>
    </tr>
</table>
<div class="col-md-4">
<a class="btn btn-primary" href="{{ route('users.index') }}"><i class="ti-angle-double-left"></i>  Back</a>
<!-- <button type="button" class="btn btn-warning me-1"><i class="ti-trash"></i> Cancel</button> -->
<button type="submit" class="btn btn-primary"><i class="ti-save-alt"></i> Save</button>
</div>

</div>
{!! Form::close() !!}

@endsection