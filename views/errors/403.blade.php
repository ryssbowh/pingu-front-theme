@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>403</h1>
            <h2>{{ $exception->getMessage() }}</h2>
        </div>
    </div>
</div>
@endsection