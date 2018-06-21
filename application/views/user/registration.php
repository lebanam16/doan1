<?php include("header.php"); ?>

<div class="registration">
	<div class="container">
		<h1>Đăng kí thông tin</h1>

		<form class="" action="ordertour.php" method="post">
		<div class="row">


		  <div class="col-md-6">
		    <div class="form-group">
		      <label for="ho_ten">  Họ tên  </label>
		  <input type="text" class="form-control"  name="ho_ten" id="ho_ten" >
		  </div>
		  <div class="form-group">
		    <label for="email">  Email  </label>
		<input type="text" class="form-control"  name="email" id="email" >
		</div>
		<div class="form-group">
		  <label for="sdt">  Số Điện thoại </label>
		<input type="text" class="form-control"  name="sdt" id="sdt" >
		</div>
		<div class="form-group">
		<label for="dia_chi">  Địa chỉ  </label>
		<input type="text" class="form-control"  name="dia_chi" id="dia_chi" >
		</div>
		  </div>


		  <div class="col-md-6">
		    <div class="form-group">
		      <label for="so_luong">  Số lượng  </label>
		    <input type="text" class="form-control"  name="so_luong" id="so_luong">
		    </div>
		  <div class="form-group">
		    <label for="nguoi_lon">  Người lớn  </label>
		<input type="text" class="form-control"  name="nguoi_lon" id="nguoi_lon" >
		</div>
		<div class="form-group">
		  <label for="tre_em"> Trẻ em  </label>
		<input type="text" class="form-control"  name="tre_em" id="tre_em" >
		</div>
		  </div>
		</div>
		<button type="submit" class="form-control btn btn-info" style="width:180px;"> Gửi</button>
		</form>
	</div>
</div>

<?php include("footer.php"); ?>