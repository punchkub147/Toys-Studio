<?php 
	if(!isset($_GET["Item_ID"])){
		header('Location: item.php?Item_ID=toy0000001');
	}else{
		$Item_ID = $_GET["Item_ID"];
	}

	require "Connect_DB.php"; 
	$sql = "SELECT * 
			FROM Item_Info
			WHERE Item_ID = '".$Item_ID."';
			";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$Item_Name = $row["Item_Name"];
			$Item_Price = $row["Item_Price"];
			$Item_Manufacturer = $row["Item_Manufacturer"];
			$Item_Type = $row["Item_Type"];
			$Item_License = $row["Item_License"];
			$Item_Series = $row["Item_Series"];
			$Item_Image = $row["Item_Image"];
		}
	}else{
		echo "ไม่มีข้อมูลที่ค้นหา";
	}
// ---------------------------------------------

	$sql = "SELECT Item_Image, Item_Series, Item_Name, Item_ID 
			FROM Item_Info
			WHERE Item_Series = '".$Item_Series."';
			";
	$result = $conn->query($sql);

	$i=0;
	$Series_Item_Name = array();
	$Series_Item_Image = array();
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc() && $i<=4) {
			$Series_Item_Name[$i] = $row["Item_Name"];
			$Series_Item_Image[$i] = $row["Item_Image"];
			$i++;
		}
	}else{
		echo "ไม่มีข้อมูลที่ค้นหา";
	}
// ---------------------------------------------


	$conn->close();
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - ToysStudio</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/item.css">
	<style src="js/jquery-3.1.1.min.js"></style>
	<link rel="stylesheet" type="text/css" href="css/review.css">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css">
</head>
<body>
	<?php include 'header.php'; ?>
	


	<div class="container bg2 cb">
		<div class="wrapper">

			<div class="item">
				<div class="item-img col-3"><img src="img/item/<?php echo $Item_Image; ?>.png" alt=""></div>

				<div class="con-card item-content col-12">
					<div class="col-4 fl p-10">
						<div class="item-content-name-1"><?php echo $Item_Name; ?></div>
						<div class="item-content-name-2"><?php echo $Item_Type." by ".$Item_Manufacturer; ?></div>
						<div class="item-content-name-3"><?php echo $Item_Series; ?> Series</div>
						<br><br>

						<div class="item-content-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>

						</div>
						<br>
						<div class="item-content-name-3">Price</div>
						<div class="item-content-price"><?php echo $Item_Price; ?>.-</div>
						<button class="item-content-buy fw">Add to Cart</button>
					</div>

					<div class="col-8 fr p-10">

						<h1 class="fl">ABOUT THIS SIXTH SCALE FIGURE</h1>
							<br>
						
						<br><br>
						“You just started a war!” 
						<br><br>
						Fans around the world will witness the fracture of the Marvel Cinematic Universe in Marvel’s latest blockbuster Captain America: Civil War. As the Avengers continue to protect the world, their team becomes divided into two opposing factions, one led by Captain America and another led by Iron Man, after extensive collateral damage prompts the government to oversee the Avengers and hold them accountable for their actions! 
						<br>
						<br>
						License Marvel <br>
						Type Sixth Scale Figure <br>
						Manufacturer Hot Toys <br>
						Artists <br>
						<br>
						Da-hye, Kim (Head Sculpt) <br>
						JC. Hong (Head Paint) <br>
						E-Lee (Head Paint) <br>
						Kojun (Head Art Direction) <br>
						Lok Ho (Armor Paint) <br>
					</div>


				</div><!-- item-content -->
				<div class="cb"></div>
			</div><!-- item -->
			
			<div class="con-card cb col-12 fr">
				<div class="con-head">
						<h1 class="fl">รุ่นอื่นๆ</h1>
						<a href="" class="fr">View More ></a>
					</div>
					<?php echo $Series_Item_Image[0]; ?>

					<a href="item.php?Item_ID=toy0000013">
						<div class="card220">
							<div class="card-img">
								<img src="img/item/902174-product-silo.png" alt="">
							</div>
							<div class="card-con">Loki</div>
						</div>
					</a>
					<a href="item.php?Item_ID=toy0000012">
						<div class="card220">
							<div class="card-img">
								<img src="img/item/902348-product-silo.png" alt="">
							</div>
							<div class="card-con">The Hulk</div>
						</div>
					</a>
					<a href="item.php?Item_ID=toy0000001">
						<div class="card220">
							<div class="card-img">
								<img src="img/item/captain-america-civil-war-iron-man-xlvi-sixth-scale-marvel-silo-902708.png" alt="">
							</div>
							<div class="card-con">IronMan</div>
						</div>
					</a>
					<a href="item.php?Item_ID=toy0000007">
						<div class="card220">
							<div class="card-img">
								<img src="img/item/902417-product-silo.png" alt="">
							</div>
							<div class="card-con">Vision</div>
						</div>
					</a>

				<div class="cb"></div>
			</div>





			<div class="con-card cb col-12 fr">
				<div class="con-head">
						<h1 class="fl">แนะนำสำหรับคุณ</h1>
						<a href="" class="fr">View More ></a>
					</div>


				<a href="item.php?Item_ID=toy0000009">
					<div class="card220">
						<div class="card-img">
							<img src="img/item/captain-america-civil-war-black-widow-sixth-scale-marvel-silo-902706.png" alt="">
						</div>
						<div class="card-con">Black Widow</div>
					</div>
				</a>
				<a href="item.php?Item_ID=toy0000006">
					<div class="card220">
						<div class="card-img">
							<img src="img/item/captain-america-the-winter-soldier-nick-fury-hot-toys-silo-902541.png" alt="">
						</div>
						<div class="card-con">Nick Fury</div>
					</div>
				</a>
				<a href="item.php?Item_ID=toy0000005">
					<div class="card220">
						<div class="card-img">
							<img src="img/item/marvel-captain-america-civil-war-hawkeye-sixth-scale-hot-toys-silo-902684.png" alt="">
						</div>
						<div class="card-con">Hwak Eye</div>
					</div>
				</a>
				<a href="item.php?Item_ID=toy0000008">
						<div class="card220">
							<div class="card-img">
								<img src="img/item/marvel-captain-america-civil-war-captain-america-sixth-scale-hot-toys-silo-902657.png" alt="">
							</div>
							<div class="card-con">Captain America</div>
						</div>
					</a>

				<div class="cb"></div>
			</div>



				<div class="con-card cb col-12 fr">

					<div class="con-head">
						<h1 class="fl">Review</h1>
						<a href="" class="fr">View More ></a>
					</div>

					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>
					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i></div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>
					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i></div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>
					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i></div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>
					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i></div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>
					<div class="review-card fl">
						<div class="review-card-img col-2"><img src="img/ems.jpg" alt=""></div>
						<div class="fl">
							<div class="review-card-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i></div>
							<div class="review-card-content">ดีมากๆเบยซื้อๆๆๆๆๆๆๆ</div>
							<div class="review-card-name">Review by : User Name</div>
						</div>
							<div class="review-card-date">20/02/1996</div>
						<div class="cb"></div>
					</div>





					<div class="cb"></div>
				</div>

			</div>





			<div class="cb"></div>
		</div><!-- wrapper -->
	</div><!-- container -->
	
	
	<?php include 'footer.php'; ?>
</body>
</html>