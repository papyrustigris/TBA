@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="{{ asset('../images/video_poster_1.jpg') }}" width="100%" height="100%">

			<div class="well" style="margin-top:10px; color:#26335e;">
				<h2 style="font-family:Gobold-Bold; ">ANNOUNCEMENT AREA</h2>
				<p>
					Special performances and guests include:<br>
					General INSERT NAME HERE <br>
					Rockford Symphony Orchestra <br>
					Mendelssohn Chorale 
				</p>				

				<i>June 6th 2015</i>
				</p>
			</div>

		</div>

		<div class="col-md-6">

			<div class="">
				<img src="{{ asset('/images/stars.png') }}" class="img-responsive stars-banner">
				<h2 style="font-family:Gobold-Bold; color:#26335e;">ABOUT</h2>
				<p style="margin:20px 40px; color:#26335e; font-size:18px;">
					From the Great War to today, the men and women of Rockford have stood together and joined the ranks of many before them in service to this great country. Their unwavering commitment and sacrifice does not go unnoticed. It’s our turn to salute. 
					<br><br>Bergstrom Inc. and the Salvation Army of Winnebago County have planned an evening of thanks and appreciation for Rockford-area veterans. There is no ticket price associated with this event. Although tickets will be required for entry into the arena, this is a free community event. 
				</p>
				<a href="{{ url('/register')}}" class="btn btn-danger pull-right" style="padding:10px 40px; font-size:21px;">Register</a>
				<br>
			</div>

			<div class="" style="margin-top:80px; margin-bottom:150px; color:#26335e;">
				<h2 style="font-family:Gobold-Bold;">SOCIAL MEDIA HEADLINE</h2>
				<h1 style="margin-left: 40px;">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-google"></i>
				<i class="fa fa-twitter"></i>
				</h1>
			</div>
		</div>

	</div>
</div>
@endsection