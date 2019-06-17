<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
         <div class="col-md-6 login-left">
             <h2 style="font-style: italic;color: gold">Login Here</h2>
             <form action="login.php" method="post">
                         <div class="form-group">
                         <label>username</label>
                         <input type="text" name="name" class="form-control" required>

                         <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="password" class="form-control" required>
                         </div>
                         <button type="submit" class="btn btn-primary">Login</button>





             </form>

         </div>
        <div class="col-md-6 login-right">
            <h2 style=";color: gold">Register Here</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="name" class="form-control" required>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>





             </form>

        </div>

    </div>
    </div>
</div>




</body>
</html>