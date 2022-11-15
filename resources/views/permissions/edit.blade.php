@extends('layouts.admin.app')

@section('content')
<div class="row"><h2>Edit Permission</h2></div>   

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

{!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id]]) !!}
<div class="row">
<table class="table ">
    <tr>
        <td>Name:</td>
        <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
    </tr>
   </table>
<div class="col-md-4">
<a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
    <button type="submit" class="btn btn-primary">Save Permission</button>
</div>


</div>
{!! Form::close() !!}

@endsection
