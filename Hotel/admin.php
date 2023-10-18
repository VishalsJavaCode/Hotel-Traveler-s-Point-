<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jwellaryshop-admin</title>
  <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
    <table class="table table-info">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>pass</th>
        <th>cpass</th>
      </tr>
      
      <?php
      include "connection.php";
      $query="SELECT * FROM register";
      $mydata=mysqli_query($con,$query);
        while($res=mysqli_fetch_array($mydata)){
          ?>
          <tr>
          <td><?php echo $res['id']; ?></td>
          <td><?php echo $res['name']; ?></td>
          <td><?php echo $res['email']; ?></td>
          <td><?php echo $res['phone']; ?></td>
          <td><?php echo $res['pass']; ?></td>
          <td><?php echo $res['cpass']; ?></td>
          </tr>
          <?php 
        }
      ?>

    </table>
 </div>
</body>
</html>