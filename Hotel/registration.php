<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel-Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
    <!-- font awsome icon -->
    <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
 *{
     padding:0px;
     margin:0px;
     box-sizing:border-box;
 }
 .main{
     background-image:url("Bg11.jpeg");
    height:100vh;
     background-repeat:no-repeat;
     background-size:cover;
      width:100vw;
 }
 .home{
     display:flex;
     justify-content:center;
     align-items:center;
     padding-top:10%;
 }
 .card{
     background:transparent;
 }
 </style>
</head>
<body>
<div class="main">
    <div class="container">
        <div class="row home">
            <div class="col-lg-6 col-md-8 col-sm-10 col-10 ">
                <div class="card"id="card">
                    <div class="card-header-0">
                        <div id="output"></div>
                        <h1 class="text-center text-primary my-3">Registration</h1>
                    </div>
                    <div class="card-body">
                    <form action=""method="POST"autocomplete="off">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user text-primary"id="textuserid"></i></span>
                            <input type="text"class="form-control"placeholder="Full name"value=""name="username"id="userid">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text"><i class="fas fa-envelope text-primary"id="textemailid"></i></span>
                            <input type="text"class="form-control"placeholder="Email address"value=""name="email"id="emailid">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text"><i class="fas fa-phone text-primary"id="textphoneid"></i></span>
                            <input type="text"class="form-control"placeholder="Phone number"value=""name="phone"id="phoneid">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text"><i class="fas fa-lock text-primary"id="textpassid"></i></span>
                            <input type="password"class="form-control"placeholder="Create Password"value=""name="pass"id="passid">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text"><i class="fas fa-lock text-primary"id="textcpassid"></i></span>
                            <input type="password"class="form-control"placeholder="Confirm Password"value=""name="cpass"id="cpassid">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <button class="btn btn-primary w-100"type="submit"name="create">Crete accout</button>
                      </form>  
                      <h6 class="text-dark my-3 text-center">Have an account?<a href="login.php"class="link-primary">login Here</a></h6>
                </div>
            </div>
        </div>
    </div> 
</div>
<script src="./validate.js"></script>
<?php
include "connection.php";

if(isset($_POST['create'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
    if($username==""){
        ?>
        <script>
        document.getElementById("userid").classList.add("is-invalid");
        document.getElementById("textuserid").classList.add("text-danger");
        </script>
        <?php  
    }
   else if($email==""){
        ?>
        <script>
        document.getElementById("userid").classList.add("is-valid");
        document.getElementById("emailid").classList.add("is-invalid");
        document.getElementById("textemailid").classList.add("text-danger");
        </script>
        <?php  
    }
  else  if($phone==""){
        ?>
        <script>
        document.getElementById("phoneid").classList.add("is-invalid");
        document.getElementById("textphoneid").classList.add("text-danger");
        </script>
        <?php  
    }
  else  if($pass==""){
        ?>
        <script>
        document.getElementById("passid").classList.add("is-invalid");
        document.getElementById("textpassid").classList.add("text-danger");
        </script>
        <?php  
    }
  else  if($cpass==""){
        ?>
        <script>
        document.getElementById("cpassid").classList.add("is-invalid");
        document.getElementById("textcpassid").classList.add("text-danger");
        </script>
        <?php  
    }
     if($username!="" && $email!="" && $phone!="" && $pass!="" && $cpass!=""){
        ?>
        <script>
         document.getElementById("userid").classList.remove("is-invalid");
         document.getElementById("emailid").classList.remove("is-invalid");
         document.getElementById("phoneid").classList.remove("is-invalid");
         document.getElementById("passid").classList.remove("is-invalid");
         document.getElementById("cpassid").classList.remove("is-invalid");
         document.getElementById("userid").classList.add("is-valid");
         document.getElementById("emailid").classList.add("is-valid");
         document.getElementById("phoneid").classList.add("is-valid");
         document.getElementById("passid").classList.add("is-valid");
         document.getElementById("cpassid").classList.add("is-valid");
        </script>
        <?php
         $emailquery="SELECT * FROM register where email='$email'";
         $query=mysqli_query($con,$emailquery);

         $emailcount=mysqli_num_rows($query);

         if($emailcount>0){
              ?>
              <script>
               document.getElementById("output").innerHTML=`<div class="alert alert-danger">Email id allready exist</div>`;
               document.getElementById("emailid").classList.add("is-invalid");
              </script>
              <?php 
         }else{
             if($pass===$cpass){
                     $insert="INSERT INTO register( name, email, phone, pass, cpass)values('$username','$email','$phone','$pass','$cpass')";
                     $iquery=mysqli_query($con,$insert);
                     if($iquery){
                          
                         ?>
                         <script>
                         document.getElementById("output").innerHTML=`<div class="alert alert-success">Account is created successfully</div>`;
                         location.replace("login.php");
                         </script>
                         <?php 
                     }
                     else{
                         echo "not success";
                     }
                 }else{
                  ?>
                  <script >
                  document.getElementById("output").innerHTML=`<div class="alert alert-danger">password is not mathching</div>`;
                  document.getElementById("passid").classList.add("is-invalid");
                  document.getElementById("cpassid").classList.add("is-invalid");
                  </script>
                  <?php
             }
         }

    }
}


?>
</body>
</html>