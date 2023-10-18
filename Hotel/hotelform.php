<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hotelform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../new bootstrap/bootstrap-5.0.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .mydiv{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        background-image:url("e.jpg");
        background-size:cover;
    }
    .newdiv{
        width:90vw;
        height:80vh;
    }
    .my-trance{
        background-color:transparent;
    }
    .card-0{
        background-color:transparent;
        border:none;
    }
  </style>
</head>
<body>
 <div class="container-fluid  mydiv">
        <div class="container my-trance">
            <h1 class="text-center text-danger">Hotel Registration</h1>
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto mt-3">
                    <div class="card-0 alert alert-secondary">
                        <h3 class="text-warning text-center">Personal Details</h3>
                        <form action=""method="POST">
                        <div class="d-flex">
                            <input type="text" class="form-control w-40"placeholder="Name"required name="name">
                            <input type="text" class="form-control w-40"placeholder="Last Name"required name="lname">
                        </div> <br>
                        <div class="d-flex">
                            <input type="text" class="form-control w-45"placeholder="Email"required name="email">
                            <input type="number" class="form-control w-45"placeholder="Phone number" required name="phone">
                        </div> <br>
                        <input type="text" class="form-control"placeholder="Street Adress"required name="street">
                        <br>
                        <div class="d-flex">
                            <input type="text" class="form-control w-45"placeholder="City"required name="city">
                            <input type="text" class="form-control w-45"placeholder="State"required name="state">
                        </div> <br>
                        <div class="d-flex">
                            <input type="number" class="form-control w-45"placeholder="Pin Code"required name="pin">
                            <input type="text" class="form-control w-45"placeholder="Country"required name="contry">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12 col-12 mx-auto mt-3">
                    <div class="card-0 alert alert-secondary">
                        <h3 class="text-warning text-center">Make Reservation</h3>
                        <div class="d-flex">
                            <input type="date" class="form-control w-40"placeholder="Arrival Date"required name="arrivaldate">
                            <input type="date" class="form-control w-40"placeholder="Deparature date"required name="depdate">
                        </div> <br>
                        <div class="d-flex">
                             <select name="noofadult"class="form-control w-50">
                             <option value="0">No of Adult</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="more then three">more then three</option>
                             </select>
                             <select name="noofkid"class="form-control w-50">
                             <option value="0">No of Kids</option>
                             <option value="0">0</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="more then three">more then three</option>
                             </select>
                            
                        </div> <br>
                        <div class="d-flex">
                        <select name="noofnight"class="form-control w-50">
                             <option value="0">No of nights at hotel</option>
                             <option value="0">0</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="more then three">more then three</option>
                        </select>
                            <input type="text" class="form-control w-45"placeholder="Room reference"required name="roompre">
                        </div> <br>
                         <textarea name="" id=""rows="2"class="form-control"placeholder="Any Special Request"required name="special"></textarea>
                         <br>
                         <button class="btn btn-info w-100"type="submit"name="submit">Submit</button>
                         </form>
                    </div>
                </div>
            </div>
         </div>
 </div>
 <?php
 include "connection.php";
 if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);   
    $lname=mysqli_real_escape_string($con,$_POST['lname']);   
    $email=mysqli_real_escape_string($con,$_POST['email']);   
    $phone=mysqli_real_escape_string($con,$_POST['phone']);   
    $street=mysqli_real_escape_string($con,$_POST['street']);   
    $city=mysqli_real_escape_string($con,$_POST['city']);   
    $state=mysqli_real_escape_string($con,$_POST['state']);   
    $pin=mysqli_real_escape_string($con,$_POST['pin']);   
    $contry=mysqli_real_escape_string($con,$_POST['contry']);   
    $arrivaldate=mysqli_real_escape_string($con,$_POST['arrivaldate']);   
    $depdate=mysqli_real_escape_string($con,$_POST['depdate']);   
    $noofadult=mysqli_real_escape_string($con,$_POST['noofadult']);   
    $noofkid=mysqli_real_escape_string($con,$_POST['noofkid']);   
    $noofnight=mysqli_real_escape_string($con,$_POST['noofnight']);   
    $roompre=mysqli_real_escape_string($con,$_POST['roompre']);   
    $specialname=mysqli_real_escape_string($con,$_POST['special']);   
   $query="INSERT INTO hotelform(name, lname,email,phone,street,city,state, pin,contry,arrdate,dedate,noadd,nokid,nonight,roompre,sperequest) values('$name','$lname','$email','$phone','$street','$city','$state','$pin','$contry','$arrivaldate','$depdate','$noofadult','$noofkid','$noofnight','$roompre','$specialname')" ;
   $dataimport=mysqli_query($con,$query);
   if($dataimport){
       //echo "successfully inserted";
   } else{
       echo "error.......!";
   }
 }
 ?>
</body>
</html>