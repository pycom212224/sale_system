<?php 
session_start();

require_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบ Login</title>

    <style>
    .form-signin {
        width: 100%;
        max-width: 600px;
        padding: 20px;
        margin: auto;
    }

    </style>

<script>
    function setFocus(){
    frm.username.focus();
    }
</script>


</head>

<body onLoad="setFocus()">
    <?php include 'menu.php'; ?>
    <main class="form-signin">
        <div class="container">
            <div class="container-fluid">
                <div class="card body-secondary">
                    <div class="card-header alert-primary">
                        <h4 class="mt-4 text-center"><i class="bi bi-door-open"></i>  ระบบเข้าใช้งาน (Login)</h4>
                    </div>
                    
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
        <?php
            echo $_SESSION['error'];
            unset ($_SESSION['error']);     
        ?>
            </div>
        <?php } ?>

                    <div class = "card-body">
                    <form name="frm" action="login_db.php" method="POST">
                        <div class="form-floating">
                            <input type="username" class="form-control" name="username" placeholder="UserName">
                            <label for="floatingUsername" class="form-label">UserName</label>                        
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-center mt-2">
                            <button type="submit" name="signin" class="w-100 btn btn-lg btn-primary"><i class="bi bi-door-open"></i>  Login</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footter.php'; ?>
</body>

</html>