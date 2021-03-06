@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				@if (!Auth::guest())
                <div class="panel-heading">Dashboard</div>
				@endif
				
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					@if (!Auth::guest())
                    You are logged in!
					@else
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
