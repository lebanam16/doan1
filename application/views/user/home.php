<?php include("header.php"); ?>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/user/home.css") ?>">
	<script src="<?php echo base_url("public/js/user/home.js") ?>"></script>
</head>	


<div class="main">
	<div class="form_login">
		<form class="login" action="" method="POST">
			<input type="hidden" name="form" value="1">
			<h1>Đăng nhập</h1>
			<p id="warning"></p>
			<div class="username">
				<input id="usernamelogin" type="text" placeholder="Username"><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-email.svg">
			</div>
			<div class="password">
				<input id="passwordlogin" type="password" placeholder="Password"><br>
				<img class="icon-input" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-lock.svg">
				<img class="peek-password" src="http://demo.cloudclass.edu.vn/assets/images/site/icon-eye.svg">
			</div>
			<div class="checkbox">
				<input type="checkbox"> Ghi nhớ<br>
			</div>
			<input type="submit" id="login" value="Đăng nhập"><br>
			<button id="signupbutton">Đăng kí bằng Gmail</button><br>
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
	    		    for($i=0;$i<3;$i++){
	    		 ?>
				<div class="col-md-4 ">
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
				    for($i=0;$i<3;$i++){
				 ?>
				<div class="col-md-4 ">
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
</div>