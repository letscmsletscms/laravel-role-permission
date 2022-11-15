
@extends('layouts.admin.app')


@section('content')
<div class="row"><h2>Edit User</h2></div>

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


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
<table class="table ">
    <tr>
        <td>Name:</td>
        <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <td>Password:</td>
        <td>{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <td>Confirm Password:</td>
        <td>{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}</td>
    </tr>
    <tr>
        <td>Role:</td>
        <td>{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}</td>
    </tr>
</table>
<div class="col-md-4">
<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div> -->
</div>
{!! Form::close() !!}

@endsection