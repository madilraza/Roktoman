@extends('frontView.master')

@section('title_area')
	register
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	<div class="menu_link mb-2">
		<a href="/login" class="link">log in <i class="fas fa-portrait"></i></a>
	</div>
@endsection

@section('home_body')
<section class="register_area container">
			<div class="register row">
				<div class="col-lg-6 col-md-6 register_left">
					<img src="assets/img/inspire.jpg" alt="inspire pic" />
				</div>
				<div class="col-lg-6 col-md-6 register_right">
					<div class="heading">
						<h2>Create an account</h2>
						<h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
					</div>
					<form action="/newregistration" method="post">
						<!-- {{ csrf_token() }} -->
						@csrf
						<div class="form-group">
							<input type="text" name="firstname" placeholder="first name" required>
							<input type="text" name="surname" placeholder="surname" required>
							<input type="email" name="email" placeholder="email address" required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							<input type="tel" name="phone" placeholder="phone number" required>
							<input type="password" name="password" placeholder="new password" required>
							<small id="passwordHelpBlock" class="form-text text-muted">
							Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
							</small>
							<input type="password" name="confirmpassword" placeholder="confirm password" required>
							<div class="division">
								<label for="sel1">division:</label>
								<select class="" id="" name="division" required>
									<option value="Barisal">Barisal </option>
									<option value="Chittagong">Chittagong </option>
									<option value="Dhaka">Dhaka </option>
									<option value="Khulna">Khulna </option>
									<option value="Mymensingh">Mymensingh </option>
									<option value="Rajshahi">Rajshahi </option>
									<option value="Sylhet">Sylhet </option>
								</select>
							</div>
							<label for="birth_date">birthday</label></br>
								<input type="date" class="" id="birthdate" name="DOB" required>
							<input type="int" name="weight" placeholder="weight" required>
							<div class="blood_group">
								<label for="bloodGroup">blood group:</label>
								<select class="" id="" name="bloodgroup" required>
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="O+">O+</option>
									<option value="AB+">AB+</option>
									<option value="A">A-</option>
									<option value="B-">B-</option>
									<option value="O-">O-</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
							<div class="radio_input_status">
								<label for="currentStatus">Have you ever donated blood ?</label>
								<input id="status_yes" type="radio" name="current_status" value="yes" required><span>yes</span>
								<input id="status_no" type="radio" name="current_status" value="no" required><span>no</span>
							</div>
							<div class="donate_last_date">
								<label class="lastTimeDonate">donate last time :</label>
								<input type="date" class="" id="last_donate" name="lastdonate">
							</div>
							<div class="radio_input_gender">
								<input type="radio" name="gender" value="male" required><span>male</span>
								<input type="radio" name="gender" value="female" required><span>female</span>
								<input type="radio" name="gender" value="other" required><span>other</span>
							</div>
							<p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
							<input type="submit" class="btn btn-danger" value="sign up">
						</div>
						</div>
					</form>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $("#status_yes").click(function(){
				$(".donate_last_date").slideDown("slow");
			  });
			});
			$(document).ready(function(){
			  $("#status_no").click(function(){
				$(".donate_last_date").slideUp("slow");
			  });
			});
		</script>
@endsection