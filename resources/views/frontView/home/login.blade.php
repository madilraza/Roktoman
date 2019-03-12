@extends('frontView.master')

@section('title_area')
	log in
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('home_body')
		<section class="register_area container-fluid">
			<div class="register row">
				<div class="col-lg-5 login_left">
					<img src="assets/img/inspire.jpg" alt="inspire pic" />
				</div>
				<div class="col-lg-7 login_right">
					<div class="heading">
						<h2>log in</h2>
					</div>
					<form action="#">
						<div class="form-group">
							<input type="email" name="email" placeholder="email address" required>
							<input type="password" name="password" placeholder="new password" required>
							<input class="btn btn-danger" type="submit" value="sign up">
							<a href="#">forget password ?</a>
						</div>
					</form>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/one-page-nav.js"></script>
		<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
@endsection