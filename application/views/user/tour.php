<div class="tour mountain">
    <div class="container">
        <h3 class="qwe"><?php echo $tieu_de; ?></h3>
        <hr>
        <p class="qwe"><?php echo $mo_ta; ?></p>
        <div class="row">
            <?php
            foreach ($tour as $value) {
                ?>
                <div class="col-md-3 ">
                    <div class="component" url-order="http://localhost/doan1/index.php/user/order?id=<?php echo $value['id'];?>">
                        <div class="hover"></div>
                        <img class="img-responsive" src="<?php echo base_url($value['anh']); ?>" alt="">
                        <h4 class="content"><?php echo $value['tieu_de']; ?></h4>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>