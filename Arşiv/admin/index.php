<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yahya Kanibol - Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Erdi Dogan">

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
<body>
    

<div class="container">
<div class="row">
        <div class="com-md-12">
<div class="notification login-alert">
  Please Enter Your Username And Password!
</div>
<div class="notification notification-success logged-out">
  You logged out successfully!
</div>
          <div class="well welcome-text">
                Selamin Aleykum Mr. Yahya, to access your app please <button class="btn btn-default btn-login">Log in</button> or go to home page <button class="btn btn-default btn-register" disabled="disabled">Home</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well login-box">
                <form action="login.php" method="post" >
                    <legend>Login</legend>
                    <div class="form-group">
                        <label for="username-email">E-mail or Username</label>
                        <input name="email" value='' id="username-email" placeholder="E-mail or Username" type="text" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" placeholder="Password" type="password" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-cancel-action">Cancel</button>
                        <button type="submit" class="btn btn-success">Enter System</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/log.js"></script>
</body>
</html>

