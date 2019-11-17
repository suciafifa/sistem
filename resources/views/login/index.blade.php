<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<h2 class="text-center mb-30">Login</h2>
			<form method="POST" action="{{ route('user.store')}}">
				{{csrf_field() }}
				<label>Username</label>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" name="username" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<label>E-mail</label>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" name="e-mail"placeholder="E-mail">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<label>Password</label>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="password" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<button class="btn btn-outline-primary btn-lg btn-block">Login</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>