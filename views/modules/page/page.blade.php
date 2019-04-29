@extends('layouts.base')

@section('body')
<body>
	<div id="app">
		@foreach($regions as $region)
			<div class="region {{ kebab_case($region->name) }}" style="width:{{ $region->width }}%">
				
			</div>
		@endforeach
	</div>
</body>
@endsection