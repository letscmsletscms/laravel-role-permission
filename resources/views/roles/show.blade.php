@extends('layouts.admin.app')


@section('content')
<div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Show Role</h2>
            </div>

    <table class="table table-striped table-bordered display">
        <tr>
            <th>Name</th>
            <td>{{ $role->name }}</td>
        </tr>
        <tr>
            <th>Permissions:</th>
            <td>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
            </td> 
        </tr>
    </table>
    <div class="col-md-4"><a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="ti-angle-double-left"></i> Back</a></div>
    
</div>
@endsection