<?php 
	$Series1 = "Batman";
	$Series2 = "Avengers";
	$Series3 = "Civil War";

// -----
	require "Connect_DB.php"; 

					$sql = "SELECT Item_Image, Item_Series, Item_Name, Item_ID 
							FROM Item_Info
							WHERE Item_Series = '".$Series1."';
							";
					$result = $conn->query($sql);

					$Series1_ID = array();
					$Series1_Image = array();
					$Series1_Name = array();
					$i=0;
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							if($i < 5){
								$Series1_ID[$i] = $row["Item_ID"];
								$Series1_Image[$i] = $row["Item_Image"];
								$Series1_Name[$i] = $row["Item_Name"];
							}
							$i++;
						}
					}else{
						echo "ไม่มีข้อมูลที่ค้นหา";
					}


					$sql = "SELECT Item_Image, Item_Series, Item_Name, Item_ID 
							FROM Item_Info
							WHERE Item_Series = '".$Series2."';
							";
					$result = $conn->query($sql);

					$Series2_ID = array();
					$Series2_Image = array();
					$Series2_Name = array();
					$i=0;
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							if($i < 5){
								$Series2_ID[$i] = $row["Item_ID"];
								$Series2_Image[$i] = $row["Item_Image"];
								$Series2_Name[$i] = $row["Item_Name"];
							}
							$i++;
						}
					}else{
						echo "ไม่มีข้อมูลที่ค้นหา";
					}

					$sql = "SELECT Item_Image, Item_Series, Item_Name, Item_ID 
							FROM Item_Info
							WHERE Item_Series = '".$Series3."';
							";
					$result = $conn->query($sql);

					$Series3_ID = array();
					$Series3_Image = array();
					$Series3_Name = array();
					$i=0;
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							if($i < 5){
								$Series3_ID[$i] = $row["Item_ID"];
								$Series3_Image[$i] = $row["Item_Image"];
								$Series3_Name[$i] = $row["Item_Name"];
							}
							$i++;
						}
					}else{
						echo "ไม่มีข้อมูลที่ค้นหา";
					}
// ---------------------------------------------
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
			<div class="con-card" style="margin-top: 0;">

				<div class="banner">
					<img src="img/banner.png" alt="">
				</div>


				<?php 
					for($i=0;$i<5;$i++){
						?>
						<a href="item.php?Item_ID=<?php echo $Series1_ID[$i]; ?>">
							<div class="card220">
								<div class="card-img">
									<img src="img/item/<?php echo $Series1_Image[$i]; ?>.png" alt="">
								</div>
								<div class="card-con"><?php echo $Series1_Name[$i]; ?></div>
							</div>
						</a>
						<?php
					}
				 ?>

				
				<div class="cb"></div>
			</div><!-- con card -->
			
			<div class="con-card con-card-1">
				<div class="con-head">
					<h1 class="fl"><?php echo $Series2; ?></h1>
					<a href="shop.php?filter=<?php echo $Series2; ?>" class="fr">View More ></a>
				</div>


				<?php 
					for($i=0;$i<5;$i++){
						?>
						<a href="item.php?Item_ID=<?php echo $Series2_ID[$i]; ?>">
							<div class="card220">
								<div class="card-img">
									<img src="img/item/<?php echo $Series2_Image[$i]; ?>.png" alt="">
								</div>
								<div class="card-con"><?php echo $Series2_Name[$i]; ?></div>
							</div>
						</a>
						<?php
					}
				 ?>


				<div class="cb"></div>
			</div><!-- con card -->

			<div class="con-card con-card-1">
				<div class="con-head">
					<h1 class="fl"><?php echo $Series3; ?></h1>
					<a href="shop.php?filter=<?php echo $Series3; ?>" class="fr">View More ></a>
				</div>



				<?php 
					for($i=0;$i<5;$i++){
						?>
						<a href="item.php?Item_ID=<?php echo $Series3_ID[$i]; ?>">
							<div class="card220">
								<div class="card-img">
									<img src="img/item/<?php echo $Series3_Image[$i]; ?>.png" alt="">
								</div>
								<div class="card-con"><?php echo $Series3_Name[$i]; ?></div>
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