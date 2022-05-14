<!-- connect to database  -->
<?php
@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta name ="viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<style>

* {
	text-align: center;
}
.box-container{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
	gap: 2rem;
}

.box-container .image .box{
	height: 25rem;
	overflow: hidden;
}
.box-container .image .box img{
	height: 100%;
	width: 100%;
	object-fit: cover;
	transition: .2s linear;
}
.box-container .image .box .content{
	padding: 2rem;
	text-align: center;
}
 .btn{
	background:#483C32 ;
    color: #fff;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}
 .btn:hover{
	background: #C4A484;
    color:#fff;
 }
.box{
	padding:20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
    background: #fff;
}
.header{
	width: 600px;
	margin: auto;
}

</style>
</head>
<body>
<?php include "./navBar.php" ?>
</br>
<div class="header">
	<h3>HAIR STYLISTS & SALONS</h3>
	<p>We want you feeling the  absolute best about your hair and foster an environment where you can feel comfortable to access knowledge and document your hair care journey. Hair care is very important and we believe that your beautiful hair deserves maximum attention! </p>
	<p>Here are a number of Afro Hair Stylists and Salons accross Ireland</p>
    <p>We also provided you with their Instagram handles to find out more about them!</p>
    <p>(You may need to log into Instagram to access their pages)</p>
</div>
</br>
<div class="box-container">	
	<div class="box">
		<div class="image">
			<img src="ea.png">
		</div>
		<div class="content">
			<h3> EA BEAUTY FACTORY</h3>
			<p>A freelance hair stylists based in Dublin 1, she specialises in wigs construction and wig styling. She is quite popular and well-known for her detailed designs. She can style your hair any type of way and mould it to your desire.</p>
			<a href="https://www.instagram.com/eabeautyfactory/?hl=en" class="btn">INSTAGRAM</a>
		</div>
	</div>
	<div class="box">
		 <div class="image">
			<img src="dd.png">
		</div>
		<div class="content">
			<h3> DATDOLLHOUSE </h3>
			<p>A duo of sisters who specialise in wig construction, wig styling and wig dye. They are based in Tallaght, Dublin and are known for their lovely customer service.</p>
			<a href="https://www.instagram.com/datdollhouse/" class="btn">INSTAGRAM</a>
		</div>
	</div>
	<div class="box">
		<div class="image">
			<img src="soso.png">
		</div>	
		<div class="content">
			<h3>SOSOLUXE</h3>
			<p>A popular salon branch based in Blanchardstown, Dublin. This branch is also known in Canada and are quite pricy because of their brand name. They do all types of hair styles and are quite popular because of their detailed designs.</p>
			<a href="https://www.instagram.com/sosoluxehair/?hl=en" class="btn">INSTAGRAM</a>
		</div>
	</div>
	<div class="box">
		<div class="image">
			<img src="cc.png">
		</div>	
		<div class="content">
			<h3> THE CULTURE COLLECTIVE  </h3>
			<p>A newly opened salon based in Dublin 1 who do all types of hair styles – including braiding! This salon has a number of known hair stylists a working there and are quite popular because of their chic aesthically pleasing salon!</p>
			<a href="https://www.instagram.com/theculturecollectivesalon/S" class="btn">INSTAGRAM</a>
		</div> 
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>