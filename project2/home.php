<!-- connection to database  -->
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

.card-type{
	text-transform:uppercase;
	background: #ff0000;
}

</style>
</head>
<body>
<?php include "./navBar.php" ?>
</br>
<div class="header">
	<h3>WELCOME TO AFROTUNE!</h3>
	<h4>YOUR VERY OWN HAIR MANAGEMENT APPLICATION</h4>
	<p>We want you feeling the  absolute best about your hair and foster an environment where you can feel comfortable to access knowledge and document your hair care journey. Hair care is very important and we believe that your beautiful hair deserves maximum attention! </p>
	<p>Please pick one of our features below to get started.</p>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  NOTES & REMINDERS
</button> <a href="logout.html" class="btn"> LOGOUT </a>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NOTES & REMINDERS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <!-- displaying note that are in database using pop up  -->
	  <div class="modal-body">
      <?php
                    $sql="SELECT * FROM notes_form ";
                    $res=mysqli_query($conn,$sql);
                    $noNotes=true;
                    while($fetch=mysqli_fetch_assoc($res)){
                        $noNotes=false;
                        echo '<div class="card my-3">
                        <div class="card-body">
                        <h4 class="card-type">'.$fetch["type"].'</h4>
                        <h5 class="card-title">'.$fetch["title"].'</h5>
                        <p class="card-text">'.$fetch["date"].'</p>
                        <p class="card-text">'.$fetch["description"].'</p>
                    </div>
                 </div>';  
                }  
                if($noNotes){
                    echo '<div class="card my-3">
                    <div class="card-body">
                    <h5 class="card-type">ADD A NOTE OR REMINDER TO GET STARTED</h5>
                    <p class="card-text">No notes or reminders are available for reading.</p>
    
                </div>
             </div>';
                }  
                ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</br>
<div class="box-container">	
	<div class="box">
		<div class="image">
			<img src="hcare.png">
		</div>
		<div class="content">
			<h3> Hair Care Recommender</h3>
			<p>Are you struggling to know the right & best products to care for your hair? Simply take our questionnaire and find out what best suits your needs with our hair care recommender! </p>
			<a href="hcare_recomm.php" class="btn">GO</a>
		</div>
	</div>
	<div class="box">
		 <div class="image">
			<img src="hstyle.png">
		</div>
		<div class="content">
			<h3> Hair Style Recommender</h3>
			<p>Not only do we love you taking care of your hair with products and wash day routines, we love seeing you embrace your individuality with different hair styles! This feature recommends hair styles, we think may suit you based on your head shape.</p>
			<a href="hstyle_recomm.php" class="btn"> GO</a>
		</div>
	</div>
	<div class="box">
		<div class="image">
			<img src="note2.png">
		</div>	
		<div class="content">
			<h3> Notes Calander</h3>
			<p>Jot down notes about your hair care journey or schedule reminders with our Note Calendar! </p>
			<a href="notes.php" class="btn"> GO</a>
		</div>
	</div>
	<div class="box">
		<div class="image">
			<img src="hstylists.png">
		</div>	
		<div class="content">
			<h3> Hair Stylists </h3>
			<p>Struggling to find hair stylists or salons that cater to your specific hair type? Don’t worry we’ve got your back. Visit this page to see hair stylists based in Dublin!</p>
			<a href="hair_stylists.php" class="btn"> GO</a>
		</div> 
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>