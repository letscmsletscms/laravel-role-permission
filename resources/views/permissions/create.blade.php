@extends('layouts.admin.app')

@section('content')
<div class="row"><h2>Create New Permission</h2></div>

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
{!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
<div class="row">
    <table class="table ">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="name" value="" placeholder="Name" required></td>
        </tr>
    </table>

<div class="col-md-4">
<a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
<button type="submit" class="btn btn-primary">Save Permission</button>
</div>
</div>
{!! Form::close() !!}

@endsection