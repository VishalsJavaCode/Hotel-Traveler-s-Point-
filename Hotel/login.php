<?php 
session_start();
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel-loginpage</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet"  href="./asset/animate.css-main/animate.min.css">
   <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
    <!-- font awsome icon -->
    <link rel="stylesheet" href="./asset/icon/fontawesome-free-5.15.2-web/css/all.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   
 </head>
 <style>
 *{
     padding:0px;
     margin:0px;
     box-sizing:border-box;
 }
 .main{
     background-image:url("h.jpg");
    height:100vh;
     background-repeat:no-repeat;
     background-size:cover;
      width:100%;
 }
 .home{
     display:flex;
     justify-content:center;
     align-items:center;
     padding-top:15%;
 }
 
 </style>
 
 <body>
<div class="main">
    <div class="container">
        <div class="row home">
            <div class="col-lg-4 col-md-8 col-sm-10 col-10 ">
                <div class="card "id="card">
                    <div class="card-header-0">
                       <div id="output"></div> 
                        <h1 class="text-center text-primary my-3">Login</h1>
                    </div>
                    <div class="card-body">
                    <form action=""method="POST"autocomplete="off">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user text-primary"id="text-gmail"></i></span>
                            <input type="text"class="form-control"name="gmail"id="intergmail"placeholder="Enter gmail or Phone"value="">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                        <div class="input-group my-2">
                            <span class="input-group-text"><i class="fas fa-lock text-primary"id="text-pass"></i></span>
                            <input type="password"class="form-control"placeholder="Password"name="pass"id="interpass"value="">
                            <span class="invalid-feedback">Plz Enter this feed</span>
                        </div>
                      
                        <a class="text-primary nav-link"href=""data-bs-toggle="modal" data-bs-target="#model">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary w-100" name="login">Login</button>  
                     </form>
                              <!-- modal -->
                                  <div class="modal fade"id="model"data-bs-backdrop="static"data-bs-keyboard="false"tabindex="-1">
                                     <div class="modal-dialog">
                                         <div class="modal-content ">
                                             <div class="modal-header">
                                                    <h3 class="text-dark">Forgot Password</h3>
                                                     <button type="button" class="btn btn-close"data-bs-dismiss="modal"></button>
                                                                       
                                             </div>
                                        <div class="modal-body text-dark">
                                         <form action=""method="POST">
                                        <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope text-primary"></i></span>
                                        <input type="text"class="form-control"placeholder="Enter gmail "name="forgotgmail">
                                        <span class="invalid-feedback">Plz Enter this feed</span>
                                          </div>
                                        <label for="username mt-2">Phone number</label>
                                        <div class="input-group">
                                         <span class="input-group-text"><i class="fas fa-phone text-primary"></i></span>
                                         <input type="text" placeholder="Enter registred phone number" class="form-control"name="forgotphone">
                                         <span class="invalid-feedback">Plz Enter this feed</span>
                                         </div>               
                                    </div>
                                <div class="modal-footer ">
                            <button class="btn btn-danger "type="submit" name="forgot">Submit</button> </form>
                            </div>
                        </div> </div>
                         </div>
                        <!-- modal ** -->    
                        <p class="text-center text-dark">Or login with</p>
                        <div class="btn-group w-100">
                            <button class="btn btn-primary"><a href="https://../../../../facebook.com"class="link-light nav-link fab fa-facebook"target="_blanck">Facebook</button></a>
                            <button class="btn btn-danger"><a href="https://../../../instagram.com "class="nav-link link-light fab fa-instagram"target="_blanck">Instagram</button></a>
                        </div>
                        <h6 class="text-dark my-3 text-center"> <a href="admin.php"data-bs-toggle="modal" data-bs-target="#admin">admin</a> Don't have account? 
                        <a href="registration.php"class="link-primary">Create Account</a></h6>
                         <!-- modal -->
                         <div class="modal fade"id="admin"data-bs-backdrop="static"data-bs-keyboard="false"tabindex="-1">
                                     <div class="modal-dialog">
                                         <div class="modal-content ">
                                             <div class="modal-header">
                                                    <h3 class="text-dark">Admin login</h3>
                                    <button type="button" class="btn btn-close"data-bs-dismiss="modal"></button>                                   
                                             </div>
                                        <div class="modal-body text-dark">
                                        <div class="input-group my-2">
                                        <span class="input-group-text"><i class="fas fa-user-secret text-primary"></i></span>
                                        <input type="text"class="form-control"placeholder="Enter gmail or Phone"id="admingmail"value="">
                                        <span class="invalid-feedback">Plz Enter this feed</span>
                                          </div>
                                        <div class="input-group my-2">
                                         <span class="input-group-text">
                                         <i class="fas fa-lock text-primary"></i></span>
                                         <input type="password"placeholder="Password"class="form-control"id="adminpassword"value="">
                                         <span class="invalid-feedback">Plz Enter this feed</span>
                                         </div>               
                                    </div>
                                <div class="modal-footer ">
                            <button class="btn btn-primary"data-bs-dismiss="modal" onclick="adminsubmit()">Submit</button>
                            </div>
                        </div> </div>
                         </div>
                        <!-- modal ** -->
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
function adminsubmit(){
    console.log("yess");
    var admingmail=document.getElementById("admingmail").value;
    var adminpass=+document.getElementById("adminpassword").value;
    if(admingmail=="admin@gmail.com" && adminpass==12345){
        location.replace("admin.php");
    }else{
        document.getElementById("output").innerHTML=`<div class="alert alert-danger>sorry....your not Admin</div>"`;
    }
}
</script>
 <?php 
 include "connection.php";
 if(isset($_POST['login'])){
    $gmail=mysqli_real_escape_string($con,$_POST['gmail']);   
    $pass=mysqli_real_escape_string($con,$_POST['pass']);   
    if($gmail!="" && $pass!=""){
        $cond="SELECT * FROM register where email='$gmail'";
        $condpass="SELECT * FROM  register where pass='$pass'";
        
        $querycondgmail=mysqli_query($con,$cond);
        $querycondpass=mysqli_query($con,$condpass);
        $gamailcount=mysqli_num_rows($querycondgmail);
        $passcount=mysqli_num_rows($querycondpass);
        if($gamailcount>0){
            
            if($passcount>0){ 
                $_SESSION['gmail']=$gmail;
                ?>
                <script>
                document.getElementById("output").innerHTML=`<div class="alert alert-success">login successfully</div>`;
                location.replace("index.html");
                </script>
                <?php
            }else{
                ?>
                <script>
                 document.getElementById("output").innerHTML=`<div class="alert alert-danger">password is not found</div>`;
                </script>
                <?php
            }
        }else{
            ?>
            <script>
             document.getElementById("output").innerHTML=`<div class="alert alert-danger">Gmail is not found</div>`;
            </script>
            <?php 
        }
    }else{
        if($gmail=="" && $pass==""){
            ?>
            <script>
            document.getElementById("intergmail").classList.add("is-invalid");
            document.getElementById("text-gmail").classList.add("text-danger");
            document.getElementById("interpass").classList.add("is-invalid");
            document.getElementById("text-pass").classList.add("text-danger");
            </script>
            <?php 
        }else if($gmail==""){
            ?>
            <script>
             document.getElementById("intergmail").classList.add("is-invalid");
            document.getElementById("text-gmail").classList.add("text-danger");
            </script>
            <?php
        } if($pass==""){
            ?>
            <script>
            document.getElementById("interpass").classList.add("is-invalid");
            document.getElementById("text-pass").classList.add("text-danger");
            </script>
            <?php 
        }
    }
    
  
   }
   
 ?> 
 <?php
        include "connection.php";
    if(isset($_POST['forgot'])){
        $forgotgmail=mysqli_real_escape_string($con,$_POST['forgotgmail']);   
        $forgotphone=mysqli_real_escape_string($con,$_POST['forgotphone']);   
        $forgotgmailquery="SELECT * FROM register WHERE email='$forgotgmail'"; 
        $forgotphonequery="SELECT * FROM register WHERE phone='$forgotphone'";
        $runforgotgmail=mysqli_query($con,$forgotgmailquery);
        $runforgotphone=mysqli_query($con,$forgotphonequery);
        $gamailcount=mysqli_num_rows($runforgotgmail);
        $phonecount=mysqli_num_rows($runforgotphone);
        if($gamailcount>0){
    
            if($phonecount>0){
                while($res=mysqli_fetch_array($runforgotgmail)){

                    ?>
                    <script>
                    document.getElementById("output").innerHTML=`<div class="alert alert-success">your password is down this page</div>`;
                    </script>
                    <?php
                    echo $res['pass'];
                }
            }else{
                ?>
                <script>
                document.getElementById("output").innerHTML=`<div class="alert alert-danger">phone number is not registred</div>`;
                </script>
                <?php
            }
        }else{
            ?>
         <script>
         document.getElementById("output").innerHTML=`<div class="alert alert-danger">gmail is wrong</div>`;
         </script>
         <?php
            
        }
        
        
    } 

?>
 </body>
 </html>