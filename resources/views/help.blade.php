@extends('app')

@section('content')

<style>
	
	h1 {
			color: #26335e;
			font-size: 36px;
	}

	p {
		padding-top: 25px;
	}

</style>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="{{ asset('/images/stars.png') }}" class="img-responsive stars-banner">
			<h1>Need Help?</h1>
			<img src="{{ asset('/images/help_banner.png') }}" class="img-responsive">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p style="font-size:17px">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue risus quam, a consectetur sapien rutrum ac. Nullam facilisis mattis venenatis. Nullam consequat vehicula suscipit. In sed mauris nec nisi rutrum convallis ut quis lacus. Sed tempus pellentesque consectetur. Etiam diam tortor, cursus vitae diam at, pharetra blandit leo. Maecenas sodales at sem a vestibulum.
			</p>
		</div>
	</div>
</div>
@endsection