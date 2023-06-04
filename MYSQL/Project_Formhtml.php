<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Secret Diary</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url(back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .container {
            margin-top: 70px;
        }

        #submit {
            width: 100px;
            margin-left: 130px;
        }


        a {
            text-decoration: underline;
            color:rgb(224,168,0);
        }
        #error
        {
            width:500px;
        }
        #quote {
            margin-top: 10px;
        }

        @media (max-width: 700px) {
            #submit {
                margin-left: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Secret Diary</h1>
        </div>
        <div class="row justify-content-center">
            <p>Store your thoughts secretly and permanently</p>
        </div>
        <div class="row justify-content-center">
        <?php
            if($error)
            {
                echo '<div class="alert alert-danger" role="alert">
            '.$error.'
          </div>';
            }
            ?>
        </div>
            
        <div id="sign_in">
            <div class="row justify-content-center">
                <p>Are you interested? Sign up now!</p>
            </div>
            <form method="post">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email" name="email">

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox" name="signIn" >
                            <label class="form-check-label" for="checkbox">Remember Me</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <input type="hidden" value="1" name="sign">
                        <input type="submit" class="btn btn-warning" value="Sign In" name="submit" id="submit">
                    </div>
                </div>
                <div class="row justify-content-center" id="quote">
                    <p>If your already sign in Please  log in</p>
                </div>
            </form>
        </div>
        <div class="log">
            <div class="row justify-content-center">
                <p>Log in with your email and password</p>
            </div>
            <form method="post">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email" name="email">

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox" name="log" >
                            <label class="form-check-label" for="checkbox">Remember Me</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <input type="hidden" value="0" name="log">
                        <input type="submit" class="btn btn-warning" value="Log In" name="submit" id="submit">
                    </div>
                </div>
                <div class="row justify-content-center" id="quote">
                    <p>If you haven't any account Please sign in</p>
                </div>
            </form>
        </div>
        <div class="row justify-content-center" id="link">
            <p><a href="#" id="button">Log In</a></p>
        </div>
    </div>
    </div>
    </div>