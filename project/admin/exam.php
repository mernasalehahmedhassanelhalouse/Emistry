<?php
include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- custom css file link  -->
 
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php include '../components/admin_header.php'; ?>

<div class="breadoromba">
  <div class="col-mt-4">
    <div class="page-header float-left">
        <div class="page-title">
            <h1>Add exam</h1>

        </div>

    </div>

</div>

</div>

<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form name="form1" action="" method="post">
                <div class="card-body">
                    <div class="col-ig-6">
                        <div class="card">
                            <div class="card-header"><strong>Add Exam</strong>
                                
                            </div>
                            <div class="form-group"><label for="vat" class="form-control-label">New Exam Catagory</label><input type="text" name="examname" placeholder="Enter Name Of Exam " class="form-control">

                            </div>
                            <div class="form-group"><label for="vat" class="form-control-label">Exam Time In Minutes</label> <input type="text"  placeholder="Exam Tim In Minute" class="form-control" name="examtime ">

                            <div class="form-group"><input type="submit" name="submit1" value="Add Exam" class="btn btn-success">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-ig-6">
                        <div class="card">
                            <div class="card-header"><strong class="card-title">Exam catagory</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-borered">
                                    <thead>
                                        <tr>
                                            <th scope="col">$</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Eandle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="col">$</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Eandle</th> 
                                        </tr>
                                        <tr>
                                        <th scope="col">$</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Eandle</th>
                                        </tr>
                                        <tr>
                                        <th scope="col">$</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Eandle</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</from>
            </div>

        </div>
       
      </div>  

   </div>
</div>





<?php
if(isset($_POST["submit1"]))
{
 ("INSERT INTO `exam`(id, catagory, exam_time_in_minutes) values(?,?,?,?)") or die();
}

?>

<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>
</body>
</html>