<!-- phân trang -->
<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*9)-9;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,9";
	$query_pro = mysqli_query($mysqli,$sql_pro);	
?>

<h3 style="text-align: center;">Sản phẩm mới nhất</h3>

<div class="row">
        <?php
            while($row = mysqli_fetch_array($query_pro)){ 
        ?>
    <div class="col-md-4 mt-2">

        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="card-img img-fluid" width="96" height="350"
                            alt="">
                    </div>
                </div>

                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2">
                            <a href="#" class="text-default mb-2" data-abc="true"><?php echo $row['tensanpham'] ?></a>
                        </h6>

                        <a href="#" class="text-muted" data-abc="true"><?php echo $row['tendanhmuc'] ?></a>
                    </div>

                    <h3 class="mb-0 font-weight-semibold"><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></h3>

                    <p class="btn bg-cart"><i class="fas fa-info-circle"></i> Chi tiết sản phẩm</p>
                </div>
            </div>
        </a>
    </div>
        <?php
		} ?>




</div>


<style type="text/css">
ul.list_trang {
    padding: 0;
    margin: 0;
    list-style: none;
}

ul.list_trang li {
    float: left;
    padding: 5px 13px;
    margin: 5px;
    background: burlywood;
    display: block;
}

ul.list_trang li a {
    color: #000;
    text-align: center;
    text-decoration: none;

}
</style>

<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/9);
				?>
<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>

<ul class="list_trang">

    <?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
    <li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
    </li>
    <?php
					} 
					?>

</ul>