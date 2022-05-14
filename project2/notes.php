<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta name ="viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.form{
    border: 2px solid #ced4da;
    padding: 1rem;
    border-radius: 8px;
}

.card-type{
    text-transform:uppercase;
    color: #ff0000;
}

.btn {
    color:#eee;
    background: #483C32;
    
}
.text{
    text-align: center;
    width: 550px;
    margin: auto;
}
</style>

</head>
<body>
<?php include "./navBar.php" ?>
<?php include "./config.php" ?>
<?php include "./editModal.php" ?>

<?php
if(isset($_POST["submit"])){
    
    if(!isset($_POST["hidden"])){
        $title1=$_POST["title"];
        $date1=$_POST["date"];
        $type1=$_POST["type"];
        $description1=$_POST["description"];
   
    $insert =" INSERT INTO notes_form (title, date, type, description) VALUES('$title1','$date1','$type1','$description1')";
            mysqli_query($conn, $insert);
    }
}
?>  </br>
    <div class="text">
        <h3>NOTES & REMINDERS </h3>
        <p>We want you feeling the  absolute best about your hair and foster an environment where you can feel comfortable to access knowledge and document your hair care journey. Hair care is very important and we believe that your beautiful hair deserves maximum attention!</p>
        <p>Here you can document your hair care journey and also schedule reminders !</p>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
            <form class="form" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title of Reminder / Note" name="title">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter the Date" name="date">
                </div>
                <label for="type" class="form-label">Type:</label>
                <select class="form-select" aria-label="Default select example" name="type">
                <option value="reminder">Reminder</option>
                <option value="hair-note">Hair Note</option>
                </select>      
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" id="desc" rows="3" placeholder="Enter Description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" >Add Note</button>
                </form>
            </div>
        </div>
    </div>
    </br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                 <h1>NOTES & REMINDERS</h1>
                 <?php
                    $sql="SELECT * FROM notes_form ";
                    $res=mysqli_query($conn,$sql);
                    $noNotes=true;
                    while($fetch=mysqli_fetch_assoc($res)){
                        $noNotes=false;
                        echo '<div class="card my-3">
                        <div class="card-body">
                        <h4 class="card-type">'.$fetch["type"].'</h4>
                        <h6 class="card-title">'.$fetch["title"].'</h6>
                        <p class="card-text">'.$fetch["date"].'</p>
                        <p class="card-text">'.$fetch["description"].'</p>
                        <button type="button" class="btn btn-primary edit" 
                        data-bs-toggle="modal" data-bs-target="#exampleModal"id="'.$fetch["notes_id"].'">Edit </button>
                        <a href="./delete.php?id='.$fetch["notes_id"].'" class="btn btn-danger">Delete</a>
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
        </div>       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const edit=document.querySelectorAll(".edit");
        const editTitle=document.getElementById("edittitle");
        const editDate=document.getElementById("editdate");
        const editType=document.getElementById("edittype");
        const editDescription=document.getElementById("editdescription");
        const hiddenInput=document.getElementById("hidden");
            edit.forEach(element =>{
                element.addEventListener("click",()=>{                           
                const typeText=element.parentElement.children[0].innerText;
                const titleText=element.parentElement.children[1].innerText;
                const dateText=element.parentElement.children[2].innerText;
                const descriptionText=element.parentElement.children[3].innerText;
                editType.value=typeText;
                editTitle.value=titleText;
                editDate.value=dateText;
                editDescription.value=descriptionText;  
                hiddenInput.value=element.id;
                console.log(hiddenInput);          
            });
        });
        
    </script>
</body>
</html>