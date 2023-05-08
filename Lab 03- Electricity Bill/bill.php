<!DOCTYPE html>
<html>
<head>
	<title>Lab 06: Electricity bill calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background: rgb(11, 19, 77);
        }
        .container{
            display: flex;
            justify-content: space-between;
            color: white;
            margin-top: 145px;
            padding: 10px 45px 10px 65px;
        }
    </style>
</head>
<body>
    
    <?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount for ' . $units . ' units -</strong> Rs. ' . $kwh_usage;
		}
	}
	/**
	 * To calculate electricity bill as per unit cost
	 */
	function calculate_electricity_bill($units) {
		$first_unit_cost = 8;
		$second_unit_cost = 12;
		$third_unit_cost = 16;
		$fourth_unit_cost = 20;

		if($units <= 50) {
            $total_bill = $units * 3.50;
        } 
        
        elseif($units <= 150) {
            $total_bill = 50 * 3.50 + ($units - 50) * 4.00;
        } 
        
        elseif($units <= 250) {
            $total_bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
        } 
        
        else {
            $total_bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
        }
		return number_format((float)$total_bill, 2, '.', '');
	}
	?>
    
    
    <div class="container">
		<div style="font-size: 30px"><b>Calculate your electricity bill here</b></h1>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_7ShNC4.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        </div>
		
        <div class="form-group">
            <form action="" method="post">
            <div class="form-group">
                <span style="font-size: 30px;">Enter the number of units consumed: <br><br>
                <input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" /><br>
            </div>
            
            <div class="form-group">	
                <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="margin-left: 209px;" /><br><br><br>
                <div style="font-size: 30px; font-weight: 100;">
                <?php echo '<br />' . $amount; ?>
                </div>
            </div>	
            </form>
        </div>
	</div>    
</body>
</html>