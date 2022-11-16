@extends('layouts.admin.app')


@section('content')
<div class="row"><h2></h2></div>
<div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Show User</h2>
            </div>

    <table class="table table-striped table-bordered display">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Roles</th>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <td><label class="badge badge-success">{{ $v }}</label></td>
                @endforeach
            @endif
        </tr>
    </table>
    <div class="col-md-4"> <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="ti-angle-double-left"></i>  Back</a></div>

</div>
@endsection
