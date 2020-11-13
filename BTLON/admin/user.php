<?php
require('config.php');
$sql= "SELECT * FROM user";
$result= mysqli_query($conn,$sql);

?>
<!-- <script>alert('ban da dang nhap thanh cong');</script> -->
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    html,body{
      font-family:'Times New Roman', Times, serif;;
    }
    @media screen and (max-width: 600px) {
    .navbar-nav a {
      float: none;
      }}
    @media screen and (max-width: 600px) {
    .table {
      font-size: 5px;
    }}
    @media screen and (max-width: 600px) {
    #text h1{ 
      font-size: 20px;
    }
    
}
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm  "style="background:#34626c;">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link text-white " style="font-size: 18px; margin:22px" href="form.php"> <b> Trang Chủ </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" style="font-size: 18px;margin:22px"href="user.php"><b> User</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white"style="font-size: 18px;margin:22px" href="search.php"><b> Tìm Kiếm</b> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white"style="font-size: 18px;margin:22px" href="post.php"><b> Bài Đăng</b> </a>
      </li>
      <li>
        <a href="index.php"><i class="fas fa-sign-in-alt " style="margin-top: 30px; margin-left:750px; color:aliceblue; font-size: 21px " ></i></a>
      </li>
      
    </ul>

  </nav> 
 <br>
  <div class="container ">
  
    <div class="text-center" id="text">
          
      <h1>QUẢN LÝ USER</h1> <br> 
      
    </div>
    <table class="table table-bordered table-striped ">
      <tr>
        
        <th>Id</th>
        <th>Họ</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Chủ Đề</th>
        <th>Nội Dung</th>
        <th></th>
        <th></th>
      </tr>
      
      <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>
            <tr>
                
                <td><?php echo $row ['id']; ?></td>
                <td><?php echo $row ['ho']; ?></td>
                <td><?php echo $row ['ten']; ?></td>
                <td><?php echo $row ['email']; ?></td>
                <td><?php echo $row ['chude']; ?></td>
                <td><?php echo $row ['noidung']; ?></td>
                <td><button onclick="window.open('edit.php?id=<?php echo $row['id']; ?>','_self')" style="background: #c6b497;" class="btn text-white">Edit</button></td>
                <td><button onclick="window.open('del.php?id=<?php echo $row['id']; ?>','_self')"style="background: #c6b497;" class="btn text-white">Delete</button></td>
            </tr>
            
          <?php 
            }
          ?>
         
        </table>
        
        <button onclick="window.open('add.php' ,'_self' ) " class="btn text-white "style="background: #839b97;">Add User</button>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>