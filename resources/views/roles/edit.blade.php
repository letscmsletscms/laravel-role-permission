@extends('layouts.admin.app')


@section('content')
<div class="row"><h2>Edit Role</h2></div>

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


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <table class="table">
        <tr>
            <td>Name:</td>
            <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
        </tr>
        <tr>
            <td>Permission:</td>
            <td>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
            </td>
        </tr>
    </table>
<div class="col-md-4">
    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div> -->
</div>
{!! Form::close() !!}


@endsection
