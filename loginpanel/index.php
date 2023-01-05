<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login panel</title>
	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="#">

	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<style type="text/css">
		:root{
		--darkbg: #009894;
		--lightbg: #02a5a5;
		--fontcolor: #01564d;
	}

		#login_form{
			position: absolute;
			left: 0px;
			right: 0px;
			top: 0px;
			bottom: 0px;
			margin: auto;
			background: var(--darkbg);
			width: 40%;
			height: 40vh;
			border-radius: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		#login_inputs{
			display: flex;
			flex-direction: column;
			align-items: center;
			line-height: 30px;
		}
		.inputs{
			margin-bottom: 15px;
			border: 0px;
			border-radius: 0px 5px 5px 0px;
		}
		#img{
			width: 100%;
			height: 100vh;
			object-fit: fill;
		}
		.headings{
			padding-bottom: 15px;
		}
		.btn{
			letter-spacing: 3px;
			background: var(--bg);
			border-color: #f0f6ff;
		}
		.btn:hover{
			background: #028f81 !important;
			border-color: #f0f6ff !important;
		}
		.input-icon{
			background: #ffffff;
			width: 30px;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 32px;
			border-radius: 5px 0px 0px 5px;
		}
		.input-main-div{
			display: flex;
		}
		@media screen and (max-width: 700px) {
			#login_form{
				width: 80%;
				height: 50vh;
			}
		}
	</style>
</head>
<body>
	<img src="./assets/images/loginpage-bg.jpg" id="img" alt="wrong">
	<main>
		<section>
			<div class="container">
				<div id="login_form" class="container">
					<div id="login_inputs">
						<div>
							<h2 class="headings">LOGIN PAGE</h2>
						</div>
                       <form action="login.php" method="POST">
                       	     <div class="input-main-div">
							<div class="input-icon">
								<i class="fa-solid fa-user"></i>
							</div>
							<div>
								<input type="text" name="username" id="username" placeholder="Enter Username" class="inputs">
							</div>				
						</div>
						
						<div class="input-main-div">
							<div class="input-icon">
								<i class="fa-solid fa-lock"></i>
							</div>
							<div>
								<input type="password" name="passwd" id="usernamxe" placeholder="Enter passsword" class="inputs">
							</div>						
						</div>

						<div>
							<button type="submit" class="btn btn-primary" id="login-btn" name="submit">Login</button>
						</div>
                       </form>
				
					</div>
				</div>
			</div>
		</section>
	</main>

</body>
</html>