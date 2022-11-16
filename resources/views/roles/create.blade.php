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
                <h2 class="box-title">Create New Role</h2>
            </div>
            <!-- /.box-header -->
            <form class="form"  method="post" action="{{ route('roles.store') }}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="ti-user"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Role Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Permissions</label>
                        <div class="checkbox checkbox-success">
                            <?php
                            $i=1;
                            foreach($permission as $key =>$value) { 
                                ?> 
                                <input id="checkbox{{$i}}" type="checkbox" name="permission[]" value="{{$value->id}}"><label for="checkbox{{$i}}"> {{$value->name}} </label></br>
                            <?php $i++; } ?>
                            
                        </div>
                    </div>
                </div>
                    
                    
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-warning me-1"><i class="ti-trash"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="ti-save-alt"></i> Save
                    </button>
                </div>  
            </form>
        </div>
            <!-- /.box -->			
</div>
@endsection