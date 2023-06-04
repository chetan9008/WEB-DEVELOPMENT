<?php
session_start();
$error = "";
include("connection.php");
if (array_key_exists("logout",$_GET)) {
    unset($_SESSION["id"]);
    setcookie("id", "", time() - 60 * 60);
    $_COOKIE["id"] = "";
} else {
    if ((array_key_exists("id", $_SESSION) && $_SESSION["id"]) || (array_key_exists("id", $_COOKIE) && $_COOKIE["id"])) 
    {
        header("Location: header.php");
    }
}

if (array_key_exists("submit", $_POST)) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (!$email) {
        $error .= "Please enter email<br>";
    }
    if (!$password) {
        $error .= "Please enter password<br>";
    }
    if ($error != "") {
       
    } else {
        if ((array_key_exists("sign", $_POST))  &&  ($_POST["sign"])) {
            $query = "SELECT * FROM information WHERE email = '" . mysqli_real_escape_string($link, $email) . "' ";
            if ($result = mysqli_query($link, $query)) {
                if (mysqli_num_rows($result) > 0) {
                    $error.= "Email already exist!<br>";
                } else {
                    $query = "INSERT INTO information(email,password,diary) VALUES('" . mysqli_real_escape_string($link, $email) . "','" . mysqli_real_escape_string($link, $password) . "','')";
                    if (mysqli_query($link, $query)) {
                        $id = mysqli_insert_id($link);
                        $salt = $id;
                        $password = md5(md5($salt) . $password);
                        $query = "UPDATE information SET password = '$password' WHERE id = $id LIMIT 1";
                        if (mysqli_query($link, $query)) {
                            $_SESSION["id"] = $id;
                            if (array_key_exists("signIn", $_POST)) {
                                setcookie("id", $id, time() + 60 * 60 * 24);
                                $_COOKIE["id"] = $_SESSION["id"];
                            }
                            header("Location: header.php");
                        }
                    }
                }
            }
        } else {
            $query = "SELECT id FROM information WHERE email = '$email'";
            if ($result = mysqli_query($link, $query)) {
                $row = mysqli_fetch_array($result);
                $id = $row["id"];
                $temp = md5(md5($row["id"]) . $password);
                $query = "SELECT password FROM information WHERE id =  $id";
                if(!$result = mysqli_query($link, $query))
                {
                    $error .= "Password not found<br>";
                    exit(0);
                }
                $row = mysqli_fetch_array($result);
                if ($temp == $row["password"]) {
                    $_SESSION["id"] = $id;
                            if (array_key_exists("signIn", $_POST)) {
                                setcookie("id", $id, time() + 60 * 60 * 24);
                                $_COOKIE["id"] = $_SESSION["id"];
                            }
                            header("Location: header.php");
                }
            }
            else
            {
                $error.= "Email not found<br>";
            }
        }
    }
}
?>
<?php
include("ProjectHTML.php");
?>
    <script>
        $(".log").hide();
        $("#button").click(function () {
            $("#sign_in").toggle();
            $(".log").toggle();

        })
        $("#button").click(function () {
            if($(this).html() == "Log In")
            {
                $(this).html("Sign In");
            }
            else
            if($(this).html() == "Sign In")
            {
                $(this).html("Log In");
            }
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>