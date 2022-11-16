@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
				<div class="box box-inverse box-success">
				  <div class="box-header">
					<h4 class="box-title"><strong>Success</strong></h4>
					<div class="box-tools pull-right">					
						<ul class="box-controls">
						  <li><a class="box-btn-close" href="#"></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
				  </div>
				</div>
			  </div>
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
