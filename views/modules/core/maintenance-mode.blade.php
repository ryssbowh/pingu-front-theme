@extends('layouts.base')

@section('body')
<body>
    <div id="app">
        <div class="container">
        	<main class="py-4">
	            <div class="card">
	                <div class="card-header"><h1>{{ config('app.name') }} is in maintenance</h1></div>

	                <div class="card-body">
	                    <p>{{ $message }}</p>
	                    <p>Expected to be back up the {{ $willBeAvailableAt }}</p>
	                </div>
	            </div>
	        </main>
        </div>
    </div>
</body>
@endsection