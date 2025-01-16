<!DOCTYPE html>
<head>
<title>Booking Date & Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('include/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('INPUT'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body>
	<section id="container">
	<?php
			include('include/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-3.php" method="post">
	<fieldset class="boxBody">
	 <label>Specify Date and time to book</label>
	 <label>From:</label>
	<input type="text" name="from"value="02/11/2014 11:05AM">
	<label>To:</label>
	<input type="text" name="to" value="02/11/2014 12:05AM">
	 
	</fieldset>
	<footer style="text-align: center; margin-top: 20px;">
    <a href="payment.php" class="btnMakePayment" style="
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        background-color: #4CAF50;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    ">
        Make Payment
    </a>
</footer>

</form>	
	
	</section>
	</section>
	
</body>
</html>