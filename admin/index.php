<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Admin - WEBPC</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../admin/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="../admin/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/public/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/public/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/vendors/styles/style.css">

</head>

<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    } 
?>

<body>
	
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="../admin/public/images/logo.png" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

	<div class="main-container">
        <div class="pd-ltr-20">
            <?php 
                include("config/config.php");
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");
            ?>
        </div>
    </div>
	
	

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script>
		CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>
    <script type="text/javascript">
   	$(document).ready(function(){
   		thongke();
	    var char = new Morris.Area({
		
		  element: 'chart',
		
		  xkey: 'date',
		 
		  ykeys: ['date','order','sales','quantity'],
		
		  labels: ['Đơn hàng','Doanh thu','Số lượng bán ra','Số lượng']
		});

		$('.select-date').change(function(){
            var thoigian = $(this).val();
            if(thoigian=='7ngay'){
                var text = '7 ngày qua';
            }else if(thoigian=='28ngay'){
                var text = '28 ngày qua';
            }else if(thoigian=='90ngay'){
                var text = '90 ngày qua';
            }else{
                var text = '365 ngày qua';
            }

             $.ajax({
                    url:"modules/thongke.php",
                    method:"POST",
                    dataType:"JSON",
                    data:{thoigian:thoigian},
                    success:function(data)
                    {
                        char.setData(data);
                        $('#text-date').text(text);
                    }   
                });
        })
		 function thongke(){
                var text = '365 ngày qua';
                $('#text-date').text(text);
                $.ajax({
                    url:"modules/thongke.php",
                    method:"POST",
                    dataType:"JSON",
                    success:function(data)
                    {
                        char.setData(data);
                        $('#text-date').text(text);
                    }   
                });
            }
	});
    </script>

    <!-- js -->
    <script src="../admin/vendors/scripts/core.js"></script>
    <script src="../admin/vendors/scripts/script.min.js"></script>
    <script src="../admin/vendors/scripts/process.js"></script>
    <script src="../admin/vendors/scripts/layout-settings.js"></script>
    <!-- <script src="../admin/public/plugins/apexcharts/apexcharts.min.js"></script> -->
    <script src="../admin/public/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../admin/public/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../admin/public/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../admin/public/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="../admin/vendors/scripts/dashboard.js"></script>

</body>
</html>