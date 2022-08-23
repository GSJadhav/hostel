<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        //read from database
        $query = "select * from user_details where username = '$username'";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {

                    $_SESSION['username'] = $user_data['username'];
                    header("Location: index.php");

                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hostel Management Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script language="javascript" src="jquery-3.6.0.min.js" />
    <script type="text/javascript">
        $(document).ready(function() {
            $(".login").click(function() {
                $(".form").hide(1000);
            })
        })
    </script>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hostel Mgt.</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">BOOKING</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#" name="profile"></a></li>
                </ul>
            </div>


        </div>
        <div class="content">
            <h1>Hostel Management & <br><span>System</span><br>Analysis</h1>
            <p class="par">GSJ recognises that a major concern to all students and parents is the availability <br>and quality of accomodation and other facilities.<br> GSJ provides separate hostel facilities for men and women.<br>

                The College Hostels –<b> A Home Away From Home </b>have the following features:<br>

                * A separate block for first year students<br>
                * Well-furnished, spacious and air cooled rooms<br>
                * Common-room for recreational facilities<br>
                * Strict round-the-clock security<br>
                * Adequate medical facilities to take care of the students in case of any emergency.</p>


            <div class="form">
                <form action="#" method="POST">
                    <h3>Login Here</h3> <br>
                    <label for="username" class="fl fontLabel">Username:</label>
                    <input type="username" name="username" placeholder="Enter Username"><br><br>

                    <label for="password" class="fl fontLabel">Password:</label>
                    <input type="password" name="password" placeholder="Enter Password"><br><br>

                    <button class="btn" name="login" type="submit" class="login">Log In</button>
                    <button class="btn-outline" name="signup"><a href="signup.php" target="_blank">Sign Up</a></button>

                </form>
                <div class="icon">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-snapchat"></ion-icon>
                    </a>
                </div>
                </form>
            </div>
        </div>
        <script src=""></script>
</body>

</html>