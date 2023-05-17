
<?php
session_start();
$link = mysqli_connect("localhost", "id20612543_chetankumar", "CHetan@12", "id20612543_chetankumar");
if (mysqli_connect_error()) {
    die("Connection in not done");
}

if ($_POST) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email == "")
        echo ("Please enter email");

    if ($password == "")
        echo ("Please enter password");


    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    $query = "SELECT id FROM `information` WHERE email = '".mysqli_real_escape_string($link,$email)."'";
    if($result = mysqli_query($link,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
            echo "<br>Your email is already exists</p>";
        }
        else
        {
            $query = "INSERT INTO information (email,password,name) VALUES ('".mysqli_real_escape_string($link,$email)."','".mysqli_real_escape_string($link,$password)."','')  ";
            if(mysqli_query($link,$query))
            {
                // echo "You are signed in ";
                $_SESSION["email"] = $email;
                header("Location: session.php");
            }
            else
            {
                echo("There is some technical error!Please sign in later");
            }
        }
    }
}
?>


<form method="post">
    <p>Enter email</p>
    <input type="text" name="email">
    <p>Enter password</p>
    <input type="password" name="password">
    <br>
    <br>
    <button>Submit</button>
</form>