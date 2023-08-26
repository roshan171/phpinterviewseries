<?php

require_once "config.php";


// if(isset($_POST["Import"])){      
//     $filename=$_FILES["file"]["tmp_name"];    
//     if($_FILES["file"]["size"] > 0)
//     {
//     $file = fopen($filename, "r");
//     //fgetcsv($file);
//     //print_r($con); exit;
//     if(!$conn){ echo "no connection";}
//     //$con = mysqli_connect("localhost","root","","ecomretails_order");
//       while (($getData = fgetcsv($file, 100000, ",")) !== FALSE)
//        {
//          $sql = mysqli_query($conn,"INSERT INTO newcrud (`name`,`email`,`mobile`,`gender`,`status`)
//                VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')"); 
//          mysqli_error($conn);
//          $result = mysqli_query($conn,$sql);
    
//          if(!isset($result))
//          {
//           echo "<script type=\"text/javascript\">
//           alert(\"Invalid File:Please Upload CSV File.\");
//           window.location = \"index.php\"
//           </script>";    
//          }
//          else 
//          {
//           echo "<script type=\"text/javascript\">
//           alert(\"CSV File has been successfully Imported.\");
//           window.location = \"index.php\"
//           </script>";
//          }
//         }
//        fclose($file);  
//     }
//     }
    
    
//     if(isset($_POST["Export"])){
//       header('Content-Type: text/csv; charset=utf-8');  
//       header('Content-Disposition: attachment; filename=data.csv');  
//       $output = fopen("php://output", "w");  
    
//       fputcsv($output, array('id','name','email','mobile','gender' ,'status'));  
//       $query = "SELECT * from newcrud ORDER BY id DESC";  
//       $result = mysqli_query($conn, $query);  
//       while($row = mysqli_fetch_assoc($result))  
//       {
//         fputcsv($output,$row);  
//       }
//       fclose($output);
//       exit();
//       } 





//insert query

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $status=$_POST['status'];

    $sql= "INSERT INTO `newcrud`( `name`, `email`, `mobile`, `gender`, `status`) VALUES ('$name','$email','$mobile','$gender','$status')";

    if($conn->query($sql)){
			
        echo "<script type=\"text/javascript\">
              alert(\"Data Inserted Successfully\");
              window.location = \"index.php\"
              </script>"; 
    }
    else{
        echo "Data not Inserted".mysqli_error($conn);
    }

    // header("location:index.php");
    // exit;

}


//update query

if (isset($_POST['updatedata'])) {

    $user_id = $_POST['id'];

    $name = $_POST['name'];

    $email = $_POST['email'];

    $mobile = $_POST['mobile'];

    $gender = $_POST['gender'];

    $status = $_POST['status']; 

    $sql = "UPDATE `newcrud` SET `name`='$name',`email`='$email',`mobile`='$mobile',`gender`='$gender',`status`='$status' WHERE `id`='$user_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script type=\"text/javascript\">
              alert(\"Data Updated Successfully\");
              window.location = \"index.php\"
              </script>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 


//Delete Query

if(isset($_GET['id'])){
	$id=$_GET['id'];

	$sql = "DELETE FROM modalcrud WHERE id='$id'";
	$result=$conn->query($sql);
	  if ($result) {
    echo "<script type=\"text/javascript\">
              alert(\"Data deleted Successfully\");
              window.location = \"index.php\"
              </script>"; 
 
  }
  else{
    die(mysqli_error($conn));
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		
</head>
<body>


<div class="mt-3">
	<h1 class="text-center">Crud Using Modal</h1>
	<button type="submit" class=" btn btn-primary m-3" data-toggle="modal" data-target="#addModal">Add Form</button>
</div>







<!-- Modal Add form -->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputrefeid4">Name:</label>
      <input type="text" class="form-control" id="inputrefeid" name="name" placeholder="Enter Name" required>
    </div>
     <div class="form-group col-md-6">
      <label for="inputorderid4">Email:</label>
      <input type="text" class="form-control" id="inputorderid" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputfname4">Mobile:</label>
      <input type="text" class="form-control" id="inputfname" name="mobile" placeholder="Enter Mobile" required>
    </div>
     <div class="form-group col-md-6">
     Gender:<br>

<input type="radio" name="gender" value="Male">Male 
 
<input type="radio" name="gender" value="Female">Female

<br><br>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleFormStore">Status</label>
    <select class="form-control" id="exampleFormStatus" name="status">
      <option></option>
      <option value="1">Done</option>
      <option value="2">Pending</option>
    </select>
  </div>
  </div>
   <div class="modal-footer">
        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" name="submit">Save Data</button>
      </div>
    </div>
    </form>
    </div>
  </div>
</div>

     <!-- end -->

     
<!--Edit Modal-->

<div id="editModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Here</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edit_crm">
                     <form action="" method="POST">
                      <input type="hidden" id="id" name="id" class="form-control" value="" required>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name:</label>
      <input type="text" class="form-control" id="name2" name="name2" placeholder="Name" value="">
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Email:</label>
      <input type="text" class="form-control" id="email2" name="email2" 
      value="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile:</label>
      <input type="text" class="form-control" id="mobile2" name="mobile2" 
      value=""  placeholder="">
    </div>
    <div class="form-group col-md-6">
     Gender:<br>

<input type="radio" name="gender2" id="gender2" value="Male" >Male 
 
<input type="radio" name="gender2" id="gender2" value="Female" >Female

<br><br>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="status">status</label>
    <select class="form-control"  name="status2" id="status2" value="" >
      <option>Done </option>
      <option>Pending</option>
     
    </select>
  </div>
  </div>
<div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info"  name="updatedata" value="Update">
                </div>
                </form>
    </div>
  </div>      
  </div>
</div>


<!--End-->




     
<!--Fetch The data In Table-->


<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php

require "config.php";

$sql= "select * from newcrud";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td style="width:15%;"><?php if($row['status'] == 2){
  echo "<button type='button' class='btn text-white btn-sm btn-warning font-weight-bold' data-toggle='modal' data-target='#' title='Pending'>Pending</button>";
}
else{
    echo "<button type='button' class='btn text-white btn-sm btn-success font-weight-bold' data-toggle='modal' data-target='#' title='Done'>Done</button>"; 
}
?>
</td>


<td class="actions">
<a href="" data-toggle="modal" data-target="#editModal"  class=" btn btn-warning editbtn"><i class="fas fa-edit"></i></a>

      <a href="index.php?id=<?php echo $row['id'];?>" class="btn btn-danger trash m-1"><i class="fas fa-trash" ></i></a>

       <a href="" data-toggle="modal" data-target="#viewModal" class=" btn btn-success viewbtn"><i class="fas fa-eye"></i> </a>
</td>
</tr>

<?php

    } 
    }
  ?>



</tbody>
</table>



     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    
<script type="text/javascript">
	 
 
     $(document).ready(function () {
     $('.editbtn').on('click',function(){
     $tr = $(this).closest('tr');
     
             var data = $tr.children("td").map(function() {
     
                 return $(this).text();
     
             }).get();
     
             console.log(data);
             $('#id').val(data[0]);
              $('#name2').val(data[1]);
                $('#email2').val(data[2]);
                  $('#mobile2').val(data[3]);
                    $('#gender2').val(data[4]);
                      $('#status2').val(data[5]);
                      
     });
     
     });
     
</script>
</body>
</html>
 