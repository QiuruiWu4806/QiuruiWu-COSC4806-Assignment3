<?php require_once 'app/views/templates/headerPublic.php'?>

<head>
	<title>QiuruiWu</title>
	<style>
		.page-header {
				background-color: #007bff;
				color: #fff;
				padding: 20px 0;
				text-align: center;
		}

		.form-group {
				margin-bottom: 15px;
		}

		button.btn:hover {
				background-color: #0056b3;
				border-color: #004085;
		}

	</style>
</head>

<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Login Here</h1>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
            <br>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
	</div>
</div>

	<div class="page-header" id="banner">
			<div class="row">
					<div class="col-lg-12">
							<h1>Create a Account Here</h1>
					</div>
			</div>
	</div>

	<div class="row">
			<div class="col-sm-auto">
			<form action="/login/create_account" method="post" >
			<fieldset>
				<div class="form-group">
					<label for="username">Username</label>
					<input required type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input required type="password" class="form-control" name="password">
				</div>
							<br>
					<button type="submit" class="btn btn-primary">Create Account</button>
			</fieldset>
			</form> 
		</div>
	</div>
	
    <?php require_once 'app/views/templates/footer.php' ?>
