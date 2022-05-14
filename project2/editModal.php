<!-- connection to database  -->
<?php include "./config.php" ?>

<!-- editing database  -->
<?php   
if(isset($_POST["hidden"])){
    $type=$_POST["edittype"];
    $title=$_POST["edittitle"];
    $date=$_POST["editdate"];
    $description=$_POST["editdescription"];
    $id=$_POST["hidden"];
    $sql="UPDATE notes_form SET notes_id='$id',title='$title',type='$type',description='$description' WHERE notes_id='$id'";
    $res=mysqli_query($conn, $sql);
}

echo'<!-- Button trigger modal -->  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post">
        <input type="hidden" name="hidden" id="hidden">
      <div class="mb-3">
          <label for="title" class="form-label">Title:</label>
          <input type="text" class="form-control" id="edittitle" placeholder="Enter Title of Reminder / Note" name="edittitle">
      </div>
      <div class="mb-3">
          <label for="date" class="form-label">Date:</label>
          <input type="text" class="form-control" id="editdate" placeholder="Enter the Date" name="editdate">
      </div>
      <label for="type" class="form-label">Type:</label>
      <select class="form-select" id="edittype" aria-label="Default select example" name="edittype">
      <option value="reminder">Reminder</option>
      <option value="hair-note">Hair Note</option>
      </select>      
      <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea class="form-control" id="editdescription" rows="3" placeholder="Enter Description" name="editdescription"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Edit Note</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
?>