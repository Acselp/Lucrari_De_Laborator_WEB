<html lang="en">

<?php
    include("./head.php");
?>

<body>

    <?php
        $activePage = "";
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh" id="loginPage">
        <form class="login_form" name="loginForm">
            <ul class="ul_login_form">
                <li class="form_header">Log in</li>
                <li class="form_elem"><input name="unameLog" type="text" placeholder="Username"></li>
                <li class="form_elem"><input name="pwdLog" type="password" placeholder="Password"></li>
                <li class="form_elem"><button id="loginBtn">Submit</button></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </form>

        <div class="container hidden">
            <div class="serverData">
                <div>Your data has been successfully sent.
                    <img src="./img/ok.png" alt="Successfuly sent" width="52px" height="52px">
                    <br>
                    Now you can pretend you are signed in :)
                </div>
                <br>Your data:
                <br>Fname: <span id="fnameSignUp"></span>
                <br> Lname: <span id="lnameSignUp"></span>
                <br> Email: <span id="emailSignUp"></span>
                <br>Subject: <span id="passwordSignUp"></span>
                <br> 
            </div>
        </div>"
    </section>

</body>

</html>