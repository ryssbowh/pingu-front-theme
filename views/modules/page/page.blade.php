@extends($page->layout)

@section('content')
	<div class="container">
		<div class="{{ $classes }}">
			@foreach($blocks as $block)
				{!! $block->render() !!}
			@endforeach
		</div>
	</div>
@endsection 