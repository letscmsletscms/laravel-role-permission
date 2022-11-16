@extends('layouts.admin.app')

@section('content')

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
                <h2 class="box-title">Edit Permission</h2>
            </div>
{!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id]]) !!}

<table class="table table-striped table-bordered display ">
    <tr>
        <td>Name:</td>
        <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
    </tr>
   </table>
<div class="col-md-4">
  <a class="btn btn-primary" href="{{ route('permissions.index') }}"><i class="ti-angle-double-left"></i> Back</a>
    <button type="submit" class="btn btn-primary"><i class="ti-save-alt"></i> Save Permission</button>
</div>


</div>
{!! Form::close() !!}

@endsection
