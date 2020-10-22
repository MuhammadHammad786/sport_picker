<?php
  session_start();
?>
<?php
  include "./dbcon.php";
  $ua = false;

  if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);

      $pass = password_hash($password,PASSWORD_BCRYPT);

      $userquery = "select * from login where username = '$username'";
      $query = mysqli_query($con,$userquery);
      $usercount = mysqli_num_rows($query);

      if($usercount > 0){
        $ua = true;
      }
      else{
          $sql = "INSERT INTO `login`(`username`, `password`) VALUES ($username','$pass')";
          $iquery = mysqli_query($con,$sql);
          $_SESSION['username'] = $username;
          $_SESSION['Auth'] = true;
          header('location:index2.php');
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Test</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="home">
        <nav>
            <div class="left">
                <div class="foo-logo">
                    <span>
                        logo
                    </span>
                </div>
                <div class="heading">
                    <h1>
                        Football Picker
                    </h1>
                </div>
            </div>
            <!-- <div class="nav-page">
                <button class="active">Page1</button>
                <a href="./index2.html">
                    <button>Page2</button>
                </a>
            </div> -->
        </nav>
        <div class="login">
            <div class="txt">
                <h1>All About <br><span>Sports</span></h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam eaque quae eveniet
                    cumque qui, totam nesciunt cum, iste ea modi voluptatum voluptas, ipsa odio facilis rem omnis sint!
                    Tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil quo voluptate, officia
                    dolores in illum sed nam harum temporibus reiciendis doloribus ea incidunt eius consequuntur.
                    Laudantium doloribus vitae dolore tempore.
                </p>

            </div>
            <div class="login-box">
                <h1>
                    Login
                </h1>
                <p>
                    <?php
                       if($ua){
                           echo "UserName Already Exists";
                       }
                    ?>
                </p>

                <form action="" method="post">
                    <div class="log-input">
                        <input type="text" style="display:none;" name="user_id">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="password" placeholder="password" required>
                        <button type="submit" name="submit">Login</button>
                    </div>
                </form>


            </div>
        </div>
        <div class="we-do">
            <div class="box">
                <div class="box-top">
                    <h1>What we do?</h1>
                </div>
            </div>
            <div class="box">
                <div class="box-top">
                    <h1>What we do?</h1>
                </div>
            </div>
            <div class="box">
                <div class="box-top">
                    <h1>What we do?</h1>
                </div>
            </div>
            <div class="box">
                <div class="box-top">
                    <h1>What we do?</h1>
                </div>
            </div>
        </div>
        <footer class="sport-footer">
            <div class="foo-logo">
                <span>
                    logo
                </span>
            </div>
            <div class="heading">
                <h1>
                    Football Picker
                </h1>
            </div>

        </footer>
    </section>

</body>

</html>
<?php
$con->close();
?>