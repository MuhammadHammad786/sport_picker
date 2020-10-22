<?php
  session_start();
?>
<?php
   include "./dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

</head>

<body>
    <nav class="page2">
        <div class="left">
            <div class="foo-logo">
                <span style="margin-right: 10px;">
                    logo
                </span>
            </div>
            <div class="heading">
                <h1>
                    Football Picker
                </h1>
            </div>
        </div>
        <div class="user">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    User
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (isset($_SESSION['username']))
                    {
                        $template = "<p class=\"user\">".$_SESSION['username']."</p>";
                        echo $template;
                        echo "
                          <a class = \"logout\"href=\"logout.php\">Logout</a>
                        ";
                    }
                    ?>
                    <!-- <p>Username</p>
                    <button>Logout</button> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="player">
        <h2 class="sub-heading mgL">Add A Player</h2>
       <form action="index2.php" method="post">
            <div class="player-content">
            <div class="name">
                <h2 class="sub-heading">Player Name</h2>
                <input type="text" name="p_name" placeholder="Player Name" required>
            </div>
            <div class="cost">
                <h2 class="sub-heading">Player Cost</h2>
                <input type="text" name="p_cost" placeholder="Player Cost" required>

            </div>
            <button class="green" name="addPlayer">
                Add a Player
            </button>
        </div>
       </form>
    </div>
    <div class="currently">
        <h2 class="sub-heading">Players Currently Added</h2>
        <div class="cur-box">
            <?php
                    
                    if(isset($_POST['addPlayer'])){
                        $p_name = $_POST['p_name'];
                    $p_cost = $_POST['p_cost'];
                    $sql = "INSERT INTO `addplayer`(`p_name`, `p_cost`) VALUES ('$p_name','$p_cost')";
                    $add_p = mysqli_query($con,$sql);
                }

                $query="select * from addplayer";
                $query_run = mysqli_query($con,$query);  
                $check_panel = mysqli_num_rows($query_run) > 0;
                if($check_panel)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <div class="border-box">
                           <div class="p-name">
                           <h1>Player Name:</h1>
                        <h2><?php echo $row['p_name'];?></h2>
                        
                        </div>
                        <div class="p-cost">
                        <h1>Player Cost:</h1>
                        <h2><?php echo $row['p_cost'];?></h2>
                        
                        </div>
                        <div class="action">
                        
                        </div>
                        </div>
                        <?php
                    }
                }else{
                    echo "no found";
                }
            ?>
            

        </div>

    </div>

    <div class="player">
        <h2 class="sub-heading mgL">More Details</h2>
        <form action="" method="post">
            <div class="player-content">
            <div class="name">
                <h2 class="sub-heading">Size Of Team</h2>
                <input type="number" name="team_size" placeholder="Size of Team" required>

            </div>
            <div class="cost">
                <h2 class="sub-heading">Salary Cap</h2>
                <input type="text" name="salary_cap" placeholder="Salary Cap" required>

            </div>
            <button class="green">
                Generate
            </button>

        </div>
        </form>
        <div class="sport-btn">
            <button>Generate</button>
        </div>

    </div>
    <div class="more">
        <div class="more-box">

        </div>
        <div class="more-box">

        </div>
        <div class="more-box">

        </div>
        <div class="more-box">

        </div>
        <div class="more-box">

        </div>
        <div class="more-box">

        </div>


    </div>
    <div class="sport-btn">
        <button>More</button>
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

</body>
</html>