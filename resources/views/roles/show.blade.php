@extends('layouts.admin.app')


@section('content')
<div class="row"> <h2> Show Role</h2></div>

<div class="row">
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>{{ $role->name }}</td>
        </tr>
        <tr>
            <td>Permissions:</td>
            <td>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
            </td> 
        </tr>
    </table>
    <div class="col-md-4"><a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a></div>
    
</div>
@endsection