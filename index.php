<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="admin/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="admin/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/vendors/images/favicon-16x16.png">

    <title>WEBPC</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="./Asset/css/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="./Asset/css/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="./Asset/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./Asset/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./Asset/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./Asset/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./Asset/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./Asset/css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php
			session_start();
			include("admin/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/sidebar/sidebar.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#tabs-nav li').click(function() {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="
	sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="https://www.paypal.com/sdk/js?client-id=AWlDvrjaQSHlDA_ta9P3sva_XFlyFWkX6v3DYNWQTWhHgEtvbXEbqGBl4XxW8kaaReOWsJgVagq_HeaI&currency=USD">
</script>
<script>
paypal.Buttons({

    style: {
        layout: 'vertical',
        color: 'blue',
        shape: 'rect',
        label: 'paypal'
    },
    // Sets up the transaction when a payment button is clicked
    createOrder: function(data, actions) {
        var tongtien = document.getElementById('tongtien').value;
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: tongtien // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                }
            }]
        });
    },

    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {

        return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            var transaction = orderData.purchase_units[0].payments.captures[0];
            alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
            window.location.replace('http://localhost/web_mysqli/index.php?quanly=camon&thanhtoan=paypal');
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
        });
    },
    onCancle: function(data) {
        window.location.replace('http://localhost/web_mysqli/index.php?quanly=thongtinthanhtoan');
    }
}).render('#paypal-button');
</script>


<!-- Js Plugins -->
<script src="./Asset/js/jquery-3.3.1.min.js"></script>
<script src="./Asset/js/bootstrap.min.js"></script>
<script src="./Asset/js/jquery.nice-select.min.js"></script>
<script src="./Asset/js/jquery-ui.min.js"></script>
<script src="./Asset/js/jquery.slicknav.js"></script>
<script src="./Asset/js/mixitup.min.js"></script>
<script src="./Asset/js/owl.carousel.min.js"></script>
<script src="./Asset/js/main.js"></script>

</html>