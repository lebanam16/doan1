<?php include("header.php"); ?>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/user/home.css") ?>">
	<script src="<?php echo base_url("public/js/user/home.js") ?>"></script>
</head>	


<div class="home">
	<div class="form_login">
		<form class="login" url-login="http://localhost/doan1/index.php/user/Home/login" method="POST">
			<button class="close">x</button>
			<input type="hidden" name="form" value="1">
			<h1>Đăng nhập</h1>
			<p class="warning"></p>
			<div class="username">
				<input class="username" name="username" type="text" placeholder="Username" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-email.svg">
			</div>
			<div class="password">
				<input class="password" name="password" type="password" placeholder="Password" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-lock.svg">
				<img class="peek-password" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-eye.svg">
			</div>
			<div class="checkbox">
				<input type="checkbox"> Ghi nhớ<br>
			</div>
			<input type="submit" id="login" value="Đăng nhập"><br>
			<button class="signupbutton">Đăng kí</button><br>
			<div class="forget">
				<a href="confirmmail.php">Quên mật khẩu</a>
			</div>
		</form>
	</div>
	<div class="form_signup">
		<form class="signup" url-signup="http://localhost/doan1/index.php/user/Home/signup" method="POST">
			<button class="close">x</button>
			<input type="hidden" name="form" value="0">
			<h1>Đăng kí</h1>
			<p class="warning"></p>
			<div class="fullname">
				<input class="fullname" name="fullname" type="text" placeholder="Fullname" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-email.svg">
			</div>
			<div class="username">
				<input class="username" name="username" type="text" placeholder="Username" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-email.svg">
			</div>
			<div class="email">
				<input id="email" name="email" type="text" placeholder="Email" required=""><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-email.svg">
			</div>
			<div class="password">
				<input class="password" name="password" type="password" placeholder="Password" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-lock.svg">
				<img class="peek-password" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-eye.svg">
			</div>
			<div class="passwordconfirm">
				<input class="password" name="passwordconfirm" type="password" placeholder="Password confirm" required><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-lock.svg">
				<img class="peek-password" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-eye.svg">
			</div>
			<div class="checkbox">
				<input type="checkbox"> Ghi nhớ<br>
			</div>
			<input type="submit" id="signup" value="Đăng kí"><br>
			<button class="loginbutton">Đăng nhập</button><br>
			<div class="forget">
				<a href="confirmmail.php">Quên mật khẩu</a>
			</div>
		</form>
	</div>
	<div class="intro">
		<div class="container">
			<div class="title">
				<h1 >Du lịch Việt Nam</h1>
			    <p >Website cung cấp các tour du lịch giúp bạn khám phá khắp mọi miền đất nước</p>
			    <button>Khám phá ngay</button>
			</div>
		</div>
	</div>
	<div class="tour mountain">
		<div class="container">
			<h3 class="qwe">Special package</h3>
			<hr>
			<p class="qwe">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
			<div class="row">
	    		<?php 
	    		    for($i=0;$i<4;$i++){
	    		 ?>
				<div class="col-md-3 ">
					<div class="component">
						<div class="hover"></div>
						<img class="img-responsive" src="<?php echo base_url("public/img/biennhatrang.jpg"); ?>" alt="">
						<h4 class="content">AUSTRALIA</h4>
						<p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
						</p>
					</div>
				</div>
				<?php 
			    }
				?>
			</div>
	    </div>	
	</div>
	<div class="tour sea">
		<div class="container">
			<h3 class="qwe">Special package</h3>
			<hr>
			<p class="qwe">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
			<div class="row">
				<?php 
				    for($i=0;$i<4;$i++){
				 ?>
				<div class="col-md-3 ">
					<div class="component">
						<div class="hover"></div>
						<img class="img-responsive" src="<?php echo base_url("public/img/biennhatrang.jpg"); ?>" alt="">
						<h4 class="content">AUSTRALIA</h4>
						<p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
						</p>
					</div>
				</div>
				<?php 
			    } 
			    ?>
			</div>
	    </div>
	</div>
	<?php include("footer.php"); ?>
</div>
