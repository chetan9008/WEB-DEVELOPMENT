<?php
    if ($_POST) {
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $header = "From: chetan@chetanprojects.000webhostapp.com";
        $check = true;
        if(!$email || (!filter_var($email,FILTER_VALIDATE_EMAIL)))
        {
            $check = false;
        }
        if(!$subject)
        $check = false;
        if(!$message)
        $check = false;
        if($check)
        {
        mail($email, $subject, $message, $header);
        }
        else
        {
            echo("message is not send");
        }
    }
    ?>
<!doctype html>
<html lang="en">

<head>
    <title>Google mail</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        textarea
        {
            resize: none;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

   
    <div class="container">
        <form method="post">
            <div class="form-group">
                <h1>Gmail</h1>
            </div>
            <div class="form-group" id="error">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p id="empty"></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="form-group" id="success">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>Your message is Send!</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Enter subject" name="subject">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea type="text" class="form-control" id="message" aria-describedby="emailHelp" placeholder="Enter message" name="message" spellcheck="false" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary" id="submit">
        </form>
    </div>

    <script>
        function validateEmail(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test(email);
        }
        var message = "";
        $("#error").hide();
        $("#success").hide();
        $("#submit").click(function() {
            if ((validateEmail($("#email").val())) == false) {
                message += "Wrong email<br>";
            }
            if (($("#email").val()) == "") {
                message += "Please enter the email<br>";
            }
            if (($("#subject").val()) == "") {
                message += "Plese enter Subject<br>";
            }
            if (($("#message").val()) == "") {
                message += "Please enter the message<br>";
            }
            $("#empty").html(message);
            $("#error").show();

            if (message == "") {
                $("form").submit();
                $("#success").show();
                $("#error").hide();
            } else {

                $("form").submit(function(e) {
                    e.preventDefault();
                });
            }
            message = "";

        })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>