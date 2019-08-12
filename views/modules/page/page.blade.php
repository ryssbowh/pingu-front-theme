@extends($page->layout)

@section('content')
<body>
	<div id="app">
		<div class="container">
			<div class="page">
			@foreach($regions as $region)
				<div class="region {{ kebab_case($region->name) }} p-2" style="width:{{ $region->width }}%">
					@foreach($region->blocks as $block)
						@include('page::block', ['block' => $block->instance()])
					@endforeach
				</div>
			@endforeach
			</div>
		</div>
	</div>
</body>
@endsection 