@extends('layouts.admin.app')


@section('content')
<div class="row"><h2> Show User</h2></div>

<div class="row">
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Roles</td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <td><label class="badge badge-success">{{ $v }}</label></td>
                @endforeach
            @endif
        </tr>
    </table>
    <div class="col-md-4"><a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a></div>
</div>
@endsection
