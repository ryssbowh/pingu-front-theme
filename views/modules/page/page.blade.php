@extends($page->layout)

@section('content')
	<div class="container">
		<div class="page">
			@foreach($blocks as $block)
				@include('page::block', ['block' => $block->instance()])
			@endforeach
		</div>
	</div>
@endsection 