@extends('app')


@section('content')

<style>
	
	h1 {
			color: #26335e;
			font-size: 36px;
	}

</style>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="{{ asset('/images/stars.png') }}" class="img-responsive stars-banner">
			<h1>Local Resources</h1>
			<img src="{{ asset('/images/local_banner.png') }}" class="img-responsive">
		</div>
	</div>
			
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ul class="list-group" style="font-family:Arial-Rounded-Bold; font-size:17px; padding-top: 25px;">
				<li>Proin laoreet orci et pharetra eleifend.</li>
				<li>Nulla tristique libero in luctus viverra.</li>
				<li>Duis commodo sapien vel est elementum congue.</li>
				<li>Maecenas lobortis arcu vitae justo finibus, viverra semper risus vehicula.</li>
				<li>Fusce condimentum nisi at augue sodales, in viverra nisi iaculis.</li>
				<li>Proin laoreet orci et pharetra eleifend.</li>
				<li>Nulla tristique libero in luctus viverra.</li>
				<li>Duis commodo sapien vel est elementum congue.</li>
				<li>Maecenas lobortis arcu vitae justo finibus, viverra semper risus vehicula.</li>
				<li>Fusce condimentum nisi at augue sodales, in viverra nisi iaculis.</li>
			</ul>

		</div>
	</div>
</div>
@endsection