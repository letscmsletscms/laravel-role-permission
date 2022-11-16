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

<div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Edit Role</h2>
            </div>

            <form class="form"  method="post" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PATCH')
                <div class="box-body">
                <table class="table table-striped table-bordered display">
                <tr>
                    <th>Name:</th>
                    <td><input type="text" name="name" value="{{$role->name}}" class="form-control" placeholder="Role Name"></td>
                </tr>
                <tr>
                    <th>Permission:</th>
                    <td>
                        <?php $i=1; ?>
                        @foreach($permission as $value)
                        <input id="checkbox{{$i}}" type="checkbox" name="permission[]" value="{{$value->id}}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }} ><label for="checkbox{{$i}}"> {{$value->name}} </label></br>
                        <?php $i++; ?>
                        @endforeach
                    </td>
                </tr>
                </table>
                </div>
                <div class="box-footer">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="ti-angle-double-left"></i>  Back</a>

                    <button type="submit" class="btn btn-primary"><i class="ti-save-alt"></i> Save
                    </button>
                </div> 
            </form>

<!-- {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!} -->

    <!-- <table class="table table-striped table-bordered display">
        <tr>
            <th>Name:</th>
            <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
        </tr>
        <tr>
            <th>Permission:</th>
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
    
</div>-->
<!-- {!! Form::close() !!} -->
        </div>
</div>

@endsection
