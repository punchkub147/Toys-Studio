<?php 
	if(!isset($_GET["filter"])){
		$filter = "";
	}else{
		$filter = $_GET["filter"];
	}

	require "Connect_DB.php"; 

					$sql = "SELECT Item_Image, Item_Series, Item_Name, Item_ID 
							FROM Item_Info
							WHERE Item_Series LIKE '%".$filter."%'
							";

					$result = $conn->query($sql);

					$Item_ID = array();
					$Item_Image = array();
					$Item_Name = array();
					$i=0;
					$max = 0;
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							if($i < 30){
								$Item_ID[$i] = $row["Item_ID"];
								$Item_Image[$i] = $row["Item_Image"];
								$Item_Name[$i] = $row["Item_Name"];
							}
							$i++;
							$max= $i;
						}
					}else{
						echo "ไม่มีข้อมูลที่ค้นหา";
					}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - ToysStudio</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include 'header.php'; ?>

	
	<div class="container bg2 cb">
		<div class="wrapper">

			<div class="con-card pt-20">
				<div class="con-head">
					<h1 class="fl"><?php echo $filter ?></h1>
				</div>

				
				<?php 
					for($i=0;$i<$max;$i++){
						?>
						<a href="item.php?Item_ID=<?php echo $Item_ID[$i]; ?>">
							<div class="card220">
								<div class="card-img">
									<img src="img/item/<?php echo $Item_Image[$i]; ?>.png" alt="">
								</div>
								<div class="card-con"><?php echo $Item_Name[$i]; ?></div>
							</div>
						</a>
						<?php
					}
				 ?>




				<div class="cb"></div>
			</div><!-- con card -->
		</div><!-- wrapper -->
	</div><!-- container -->
	

	<?php include 'footer.php'; ?>
</body>
</html>

<?php 
	$conn->close(); 
?>