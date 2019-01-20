<?php require 'app/app.php';

    if (isset($_POST['username'], $_POST['password'])) {
        loginController::login($_POST['username'], $_POST['password']);
    }

?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container" style="margin: 30px;">
<div class="col-md-5 col-md-offset-4">
    <?php if (Controller::hasMessage('error')) : ?>
        <div class="alert alert-danger" role="alert">
           <?=Controller::getMessage('error'); ?>
        </div>
    <? endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
        <div class="panel-body">
            <form role="form" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-sm btn-default">Sign in</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
