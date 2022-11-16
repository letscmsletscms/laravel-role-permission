@extends('layouts.admin.app')


@section('content')
<div class="row"><h2></h2></div>

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
                <h2 class="box-title">Create New User</h2>
            </div>
            <!-- /.box-header -->
            <form class="form"  method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">User Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-user"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-email"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-lock"></i></span>
                            <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-user"></i></span>
                            <select class="form-control" name="roles[]" multiple>
                            <?php foreach($roles as $key =>$value) { ?>    
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-warning me-1">
                        <i class="ti-trash"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti-save-alt"></i> Save
                    </button>
                </div>  
            </form>
            </div>
            <!-- /.box -->			
		</div>

<!-- {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!} -->
<!-- <div class="row">
<table class="table ">
    <tr>
        <th>Name:</th>
        <td> {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</td>
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
        <td>{!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}</td>
    </tr>
</table>
<div class="col-md-4">
<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div> -->
<!-- {!! Form::close() !!} -->

@endsection