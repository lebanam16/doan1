<?php 
include("header.php");
?>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/user/order.css") ?>">
	<script src="<?php echo base_url("public/js/user/order.js") ?>"></script>
</head>
<div class="order">
	<div class="container">
		<div class="block row">
			<div class="col-md-9 detail">
				<div class="title-block">
					<a href=""> <?php echo $tour['ten'];?> </a><i class="material-icons">keyboard_arrow_right</i><a href=""> <?php echo $tour['tieu_de'];?></a>
				</div>
				<div class="content">
					<div class="tour-img">
						<i class="material-icons left">keyboard_arrow_left</i>
						<i class="material-icons right">keyboard_arrow_right</i>
						<div class="mySlide effect active">
							<img src="<?php echo base_url("public/img/anh2.jpg"); ?>" alt="">
						</div>
						<div class="mySlide effect">
							<img src="<?php echo base_url("public/img/anh3.jpg"); ?>" alt="">
						</div>
						<div class="mySlide effect">
							<img src="<?php echo base_url("public/img/anh5.jpg"); ?>" alt="">
						</div>
						<div class="mySlide effect">
							<img src="<?php echo base_url("public/img/anh1.jpeg"); ?>" alt="">
						</div>
					</div>
					<div class="cost">
						<span class="title"><?php echo $tour['tieu_de'];?></span>
						<span class="info">Ngày khởi hành: <?php echo $tour['ngay_khoi_hanh'];?></span>
						<span class="info">Nơi khởi hành : <?php echo $tour['diem_khoi_hanh'];?></span>
						<span class="info">Giá : <?php echo $tour['gia_nguoi_lon'];?> đ</span>
						<div>
							<a href="http://localhost/doan1/index.php/user/regis?id=<?php echo $_GET['id'];?>"><span class="button">Đặt</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 weather" id="scroll">
				<div>
					<iframe src="http://api.openweathermap.org/data/2.5/weather?q=rome&APPID=ea739b43a19929d927107e92e71b52c7&mode=html" frameborder="0"></iframe>
				</div>
				<div>
					<iframe src="http://api.openweathermap.org/data/2.5/weather?q=rome&APPID=ea739b43a19929d927107e92e71b52c7&mode=html" frameborder="0"></iframe>
				</div>
				<div>
					<iframe src="http://api.openweathermap.org/data/2.5/weather?q=rome&APPID=ea739b43a19929d927107e92e71b52c7&mode=html" frameborder="0"></iframe>
				</div>
				<div>
					<iframe src="http://api.openweathermap.org/data/2.5/weather?q=rome&APPID=ea739b43a19929d927107e92e71b52c7&mode=html" frameborder="0"></iframe>
				</div>
			</div>
		</div>
		<div class="intro">
			<div class="menu">
				<span class="index active" id="tongquan">TỔNG QUAN</span>
				<span class="index" id="lichtrinh">LỊCH TRÌNH</span>
				<span class="index" id="ghichu">GHI CHÚ</span>
				<span class="index" id="khoihanh">KHỞI HÀNH</span>
			</div>
			<div class="row">
				<div class="col-md-9">
				    <div class="contain">
					<div class="slide active" id="tongquan">
						<span>
							Du Lịch hè Phú Quốc du khách sẽ được chiêm ngưỡng vẻ đẹp hoang sơ đầy quyến rũ của hòn đảo lớn nhất Việt Nam. Đến đây, quý khách sẽ hiểu tại sao Phú Quốc luôn được gắn với cụm từ “thiên đường đảo ngọc”. Với 3 ngày 2 đêm, khách vừa đắm chìm trong làn nước trong xanh khám phá nét hoang sơ của đảo ngọc, trải nghiệm những cung bậc cảm xúc tuyệt vời với những trò chơi đẳng cấp của khu Vinpearland Phú Quốc, hay khám phá vẻ đẹp hoang dã của khu vinpear safari,…
						</span>
						<img src="<?php echo base_url("public/img/anh2.jpg"); ?>" alt="">
						<img src="<?php echo base_url("public/img/anh3.jpg"); ?>" alt="">
						<img src="<?php echo base_url("public/img/anh5.jpg"); ?>" alt="">
						<img src="<?php echo base_url("public/img/anh1.jpeg"); ?>" alt="">
					</div>
					<div class="slide" id="lichtrinh">
						
					</div>
					<div class="slide" id="ghichu">
						<ul>
							<h3>Giá vé dành cho trẻ em:</h3>
							<li>Trẻ em dưới 02 tuổi: miễn phí giá tour, giá vé máy bay theo quy định của hãng hàng không.
							     Cha, Mẹ hoặc người thân đi kèm tự lo các chi phí ăn, ngủ, tham quan (nếu có) cho bé.</li>
							<li>Trẻ em từ 02 – dưới 05 tuổi: 100% giá vé máy bay; miễn giá tour. Cha, Mẹ hoặc người thân đi kèm tự lo các chi phí ăn, ngủ, tham quan (nếu có) cho bé.
							     Hai người lớn chỉ kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 trở lên phải mua ½ vé tour.</li>
							<li>Trẻ em từ 05 – dưới 11 tuổi: 100% giá vé máy bay; 50% giá tour. Bao gồm các dịch vụ ăn uống, ghế ngồi trên xe và ngủ chung với gia đình.
							Hai người lớn chỉ được kèm 1 trẻ em từ 5 đến dưới 11 tuổi, trẻ em thứ 2 trở lên Cha Mẹ mua thêm 1 suất giường đơn</li>
							<li>Từ 11 tuổi trở lên: 100% giá tour và tiêu chuẩn như người lớn.</li>
							</ul>
							 <h3>Điều kiện khi đăng ký và hủy vé tour:</h3>
							<li>Sau khi xác nhận và thanh toán (ít nhất 50% tiền cọc giữ chỗ và thanh toán đủ 100% tổng giá trị tiền tour trước 10 ngày khởi hành).</li>
							<li> Khi đến ngày thanh toán đủ 100% tổng giá trị tiền tour, nếu Quý khách không thanh toán đúng hạn và
							    đúng số tiền được xem như Quý khách tự ý huỷ tour và mất hết số tiền đã đặt cọc giữ chỗ.</li>
							<li>Vé Máy Bay / vé xe lửa / vé tàu cao tốc được xuất ngay sau khi quý khách đóng tiền và có xác nhận sự chính xác về họ, tên (đúng từng ký tự ghi trong hộ chiếu hoặc CMND), ngày-tháng-năm sinh … của hành khách theo yêu cầu của hãng vận chuyển. Mọi sự thay đổi liên quan đến vé đã xuất:
							ngày giờ đi, tên hành khách, hủy vé, quý khách vui lòng chịu chi phí theo qui định sau:</li>
							<li>Ngay sau khi đặt cọc hoặc thanh toán hoặc trước 15 ngày: phí hủy 10% tiền tour+ 100% Vé máy bay.</li>
							<li>Hủy 10 ngày trước ngày khởi hành: phí hủy 50% tiền tour + 100% vé máy bay.</li>
					</div>
					<div class="slide" id="khoihanh">
						
					</div>
				    </div>
				</div>
				<div class="col-md-3">
					<div class="pertain">
                        <?php
                        foreach ($relate as $value){
                        ?>
                            <a href="">
                                <div class="component">
                                    <div class="hover"></div>
                                    <img class="img-responsive" src="<?php echo base_url("public/img/biennhatrang.jpg"); ?>" alt="">
                                    <a href=""><h4 class="content"><?php echo $value['tieu_de'] ;?></h4></a>
                                    <p class="content"></p>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
					</div>
				</div>
		    </div>
		</div>
	</div>
</div>

<?php include("footer.php") ?>