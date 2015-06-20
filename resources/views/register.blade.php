@extends('app')

@section('content')


<div class="container" style="margin-bottom:100px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">


		<!-- step 1 -->
		<div id="step-1">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Event Registration</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="14"
				  aria-valuemin="0" aria-valuemax="100" style="width:14%">
				    <span class="sr-only">14% Complete</span>
				  </div>
				</div>
				
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['route' => 'register.store']) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">			

						<div class="form-group">
							<div class="col-md-6">
							{!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'First Name']) !!} 
							</div>

							<div class="col-md-6">
							{!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Last Name']) !!} 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
							{!! Form::text('address_line_1', null, ['class'=>'form-control', 'placeholder'=>'Address Line 1']) !!} 
							</div>
						
							<div class="col-md-6">
							{!! Form::text('address_line_2', null, ['class'=>'form-control', 'placeholder'=>'Address Line 2']) !!} 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<select class="form-control" id="state" name="state" placeholder="State">
									<option value="AK">Alaska</option>
									<option value="AL">Alabama</option>
									<option value="AR">Arkansas</option>
									<option value="AZ">Arizona</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DC">District of Columbia</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="IA">Iowa</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="MA">Massachusetts</option>
									<option value="MD">Maryland</option>
									<option value="ME">Maine</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MO">Missouri</option>
									<option value="MS">Mississippi</option>
									<option value="MT">Montana</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="NE">Nebraska</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NV">Nevada</option>
									<option value="NY">New York</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="PR">Puerto Rico</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VA">Virginia</option>
									<option value="VT">Vermont</option>
									<option value="WA">Washington</option>
									<option value="WI">Wisconsin</option>
									<option value="WV">West Virginia</option>
									<option value="WY">Wyoming</option>
								</select>
							</div>

							<div class="col-md-6">
							{!! Form::text('zip_code', null, ['class'=>'form-control', 'placeholder'=>'Zip Code']) !!} 
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6">
								{!! Form::email('email', null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'Email']) !!}
							</div>

							<div class="col-md-6">
								<a class="btn btn-danger btn-block" href="{{ url('/') }}" style="margin: 8px 0px;">HELP I DONT HAVE AN EMAIL</a>
							</div>
						</div>

						<div class="form-group" style="padding:12px 0px; padding-bottom:0px; margin-bottom:4px;">
							<div class="col-md-3">
							  <label> {!! Form::radio('gender', 'male', ['class'=>'form-control']) !!} 
							  Male
							  </label>
							</div>

							<div class="col-md-3">
							  <label> {!! Form::radio('gender', 'female', ['class'=>'form-control']) !!} 
							  Female
							  </label>
							</div>
							
							<div class="col-md-6">
								 {!! Form::text('age', null, ['class'=>'form-control', 'placeholder'=>'Enter your age']) !!} 
							</div>
						</div>

						<div class="form-group" style="position:relative; bottom:12px;">
							<div class="col-md-6">
								<div class="checkbox" style="padding:8px;">
									<label> {!! Form::checkbox('handicap', null, ['class'=>'form-control']) !!} 
									Check box if you are disabled or require assistance.</label>
								</div>
								 {!! Form::text('name', null, ['id'=>'handicap-txt-input', 'class'=>'form-control', 'placeholder'=>'Enter your name here', 'style'=>'display:none']) !!} 

							</div>
							<div class="col-md-6" style="position:relative; top:30px;">
								<label>Tell us how you heard about the event</label>
								<select class="form-control" id="state" name="state" placeholder="State">
									<option value="newspaper">Newspaper</option>
									<option value="billboard">Billboard</option>
									<option value="printed_invite">Printed Invite</option>
									<option value="radio">Radio</option>
									<option value="social_media">Social Media</option>
								</select>
							</div>
						</div>

						<br>

				</div> <!-- end panel body -->

				<div class="panel-footer">
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
						{!! Form::submit('Forward', array('class'=>'btn btn-primary', 'id'=>'step-1-to-2', 'disabled')) !!}
						{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>  <!-- end step 1 -->

		<!--  step 2  -->
		<div id="step-2" style="display:none;">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Are you a veteran, support personnel, or current member of the U.S. Armed Forces?</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="28"
				  aria-valuemin="0" aria-valuemax="100" style="width:28%">
				    <span class="sr-only">28% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="col-md-8 col-md-offset-2">
						<div class="form-group">
							<div class="radio">
							  <label><input type="radio" name="mili_or_not" value="military">Yes</label>
							</div>
							
								<br>

							<div class="radio">
							  <label><input type="radio" name="mili_or_not" value="non_military">No</label>
							</div>
						</div>					
					</div>	
				</div> <!-- end panel body -->

				<div class="panel-footer">
						<a id="step-2-to-1" class="btn btn-primary">
							Back
						</a>
						<div class="fwd-A">	
							<span>	
								<a id="step-2-to-3" class="btn btn-primary">
									Forward
								</a>
							</span>
						</div>
						<div class="fwd-B">	
							<span>
								<a id="step-2-to-4b" class="btn btn-primary">
									Forward
								</a>
							</span>
						</div>
					</span>
				</div>

			</div>
		</div> <!-- end step 2 -->

		<!--  step 3  -->
		<div id="step-3" style="display:none;">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Military Information</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="42"
				  aria-valuemin="0" aria-valuemax="100" style="width:42%">
				    <span class="sr-only">42% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Which Military Branch are you affiliated with?</label>
							</div>
							<div class="col-md-3">

								<div class="radio">
								  <label><input type="radio" name="branch" value="army"><img src="{{ asset('images/ARMY.png') }}" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="branch" value="navy"><img src="{{ asset('images/NAVY.png') }}" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="branch" value="airforce"><img src="{{ asset('images/USAF.png') }}" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="branch" value="coastguard"><img src="{{ asset('images/USCG.png') }}" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="branch" value="marine"><img src="{{ asset('images/USMC.png') }}" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-9">
								<div class="radio">
								  <label><input type="radio" name="branch" /><input class="form-control" type="text" name="military" placeholder="Other" /></label>
								</div>
							</div>	
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstName" placeholder="Your military rank" />
							</div>
							<div class="col-md-3">
								<div class="radio">
							  		<label><input type="radio" name="status" value="active">Active</label>
							  	</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
							  		<label><input type="radio" name="status" value="veteran">Veteran</label>
							  	</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<input type="text" class="form-control" name="firstName" placeholder="Number of Years Served" />
							</div>
							<div class="col-md-8"></div>
						</div>
					</div>

				</div> <!-- end panel body -->

				<div class="panel-footer">
					<span>
						<a id="step-3-to-2" class="btn btn-primary">
							Back
						</a>
						<a id="step-3-to-4a" class="btn btn-primary">
							Forward
						</a>
					</span>
				</div>
			
			</div>
		</div> <!-- end step 3 -->

<!--  step 4  -->
		<div id="step-4a" style="display:none;">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 1</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="56"
				  aria-valuemin="0" aria-valuemax="100" style="width:56%">
				    <span class="sr-only">56% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="form-group">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_B">Answer B</label>
									</div>

									<br>

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_B">Answer B</label>
									</div>

							</div>
						</div>

					</div>

				</div> <!-- end panel body -->

				<div class="panel-footer">
					<span>
						<a id="step-4a-to-3" class="btn btn-primary">
							Back
						</a>
						<a id="step-4a-to-5a" class="btn btn-primary">
							Forward
						</a>
					</span>
				</div>
			
			</div>
		</div> <!-- end step 4 -->

	<!--  step 5  -->

		<div id="step-5a" style="display:none;">	
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 2</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="70"
				  aria-valuemin="0" aria-valuemax="100" style="width:70%">
				    <span class="sr-only">70% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="form-group">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_B">Answer B</label>
									</div>

									<br>
									
								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_B">Answer B</label>
									</div>

							</div>
						</div>
					</div>	
				</div>

				<div class="panel-footer">
					<span>
						<a id="step-5a-to-4a" class="btn btn-primary">
							Back
						</a>
						<a id="step-5a-to-6a" class="btn btn-primary">
							Forward
						</a>
					</span>
				</div>

			</div>
		</div><!-- End step 5 -->


	<!--  step 6  -->

		<div id="step-6a" style="display:none;">	
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 3</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="84"
				  aria-valuemin="0" aria-valuemax="100" style="width:84%">
				    <span class="sr-only">84% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>We are collecting stories from Military personnel to include in this event. Use the text box below to share a story or memory of your Military service.</label>
									<textarea type="" class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>	
				</div>

				<div class="panel-footer">
					<span>
						<a id="step-6a-to-5a" class="btn btn-primary">
							Back
						</a>
						<a id="step-6a-to-7" class="btn btn-primary">
							Complete Your Registration
						</a>
					</span>
				</div>

			</div>
		</div><!-- End step 6 -->


<!-- B -->

<!--  step 4  -->
		<div id="step-4b" style="display:none;">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 1</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="56"
				  aria-valuemin="0" aria-valuemax="100" style="width:56%">
				    <span class="sr-only">56% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="form-group">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_B">Answer B</label>
									</div>

									<br>

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_B">Answer B</label>
									</div>

							</div>
						</div>

					</div>

				</div> <!-- end panel body -->

				<div class="panel-footer">
					<span>
						<a id="step-4b-to-2" class="btn btn-primary">
							Back
						</a>
						<a id="step-4b-to-5b" class="btn btn-primary">
							Forward
						</a>
					</span>
				</div>
			
			</div>
		</div> <!-- end step 4 -->

	<!--  step 5  -->

		<div id="step-5b" style="display:none;">	
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 2</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="70"
				  aria-valuemin="0" aria-valuemax="100" style="width:70%">
				    <span class="sr-only">70% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="form-group">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_1" value="n1_answer_B">Answer B</label>
									</div>

									<br>
									
								<h4>Here is a nostalgia question text area</h4>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_A">Answer A</label>
									</div>
										<br>
									<div class="radio">
									  <label><input type="radio" name="nostalgia_2" value="n2_answer_B">Answer B</label>
									</div>

							</div>
						</div>
					</div>	
				</div>

				<div class="panel-footer">
					<span>
						<a id="step-5b-to-4b" class="btn btn-primary">
							Back
						</a>
						<a id="step-5b-to-6b" class="btn btn-primary">
							Forward
						</a>
					</span>
				</div>

			</div>
		</div><!-- End step 5 -->


	<!--  step 6  -->

		<div id="step-6b" style="display:none;">	
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Nostalgia Question 3</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="84"
				  aria-valuemin="0" aria-valuemax="100" style="width:84%">
				    <span class="sr-only">84% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Below is a nostalgia question text area.</label>
									<textarea type="" class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>	
				</div>

				<div class="panel-footer">
					<span>
						<a id="step-6b-to-5b" class="btn btn-primary">
							Back
						</a>
						<a id="step-6b-to-7" class="btn btn-primary">
							Complete Your Registration
						</a>
					</span>
				</div>

			</div>
		</div><!-- End step 6B -->


		<!--  step 7  -->

		<div id="step-7" style="display:none;">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Registration Complete</h1>
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="100"
				  aria-valuemin="0" aria-valuemax="100" style="width:100%">
				    <span class="sr-only">100% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<h1>Thank you!</h1>
								<p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="panel-footer">
					<span>
						<a href="/" class="btn btn-primary">
							Return to Home
						</a>
					</span>
				</div>

			</div>
		</div> <!-- End step 7 -->

		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				<p class="text-muted"><i>Completion of this Event Registration Form does not guarantee admittance as tickets are distributed in the order the requests are received.</i></p>
		</div>
	</div>
</div> <!-- end container -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
	$( document ).ready(function() {
		$('input:radio[name="mili_or_not"]').filter('[value="military"]').attr('checked', true);
		$(".fwd-B").hide();

		$('input:checkbox[name="handicap"]').attr('checked', false);
	});

	$('input[type="radio"]').click(function(){
        if($(this).attr("value")=="military"){
            $(".fwd-B").hide();
            $(".fwd-A").show();
        }
        if($(this).attr("value")=="non_military"){
            $(".fwd-A").hide();
            $(".fwd-B").show();
        }
      });

	$('input:checkbox[name="handicap"]').click(function () {
		$('#handicap-txt-input').toggle();
	});

</script>

<script>

// FORWARD STEP

$('#step-1-to-2').click(function () {
  $("#step-1, #step-2").toggle();
});

$('#step-2-to-3').click(function () {
  $("#step-2, #step-3").toggle();
});

	//NON MILI

	$('#step-2-to-4b').click(function () {
		$("#step-2, #step-4b").toggle();
	});

	// FORWARD	
		
	// A track

	$('#step-3-to-4a').click(function () {
	  $("#step-3, #step-4a").toggle();
	});

	$('#step-4a-to-5a').click(function () {
	  $("#step-4a, #step-5a").toggle();
	});

	$('#step-5a-to-6a').click(function () {
	  $("#step-5a, #step-6a").toggle();
	});

	$('#step-6a-to-7').click(function () {
	  $("#step-6a, #step-7").toggle();
	});	
		
	// B track

	$('#step-3-to-4b').click(function () {
	  $("#step-3, #step-4b").toggle();
	});

	$('#step-4b-to-5b').click(function () {
	  $("#step-4b, #step-5b").toggle();
	});

	$('#step-5b-to-6b').click(function () {
	  $("#step-5b, #step-6b").toggle();
	});

	$('#step-6b-to-7').click(function () {
	  $("#step-6b, #step-7").toggle();
	});	


// BACKWARDS

//  A track

	$('#step-6a-to-5a').click(function () {
	  $("#step-6a, #step-5a").toggle();
	});

	$('#step-5a-to-4a').click(function () {
	  $("#step-5a, #step-4a").toggle();
	});

	$('#step-4a-to-3').click(function () {
	  $("#step-4a, #step-3").toggle();
	});

//B track

	$('#step-6b-to-5b').click(function () {
	  $("#step-6b, #step-5b").toggle();
	});

	$('#step-5b-to-4b').click(function () {
	  $("#step-5b, #step-4b").toggle();
	});

	$('#step-4b-to-2').click(function () {
	  $("#step-4b, #step-2").toggle();
	});


	// 1

	$('#step-3-to-2').click(function () {
	  $("#step-3, #step-2").toggle();
	});

  $('#step-2-to-1').click(function () {
	  $("#step-2, #step-1").toggle();
	});

</script>

@endsection
