<?php 

        session_start();
        require_once('config.php');

        if (isset($_POST['username']) && isset($_POST['password']) ){

            echo '

            <script src="bootstrap/js/jquery-2.1.3.min.js"></script>
            <script src="bootstrap/js/sweetalert-dev.js"></script>
            <link href="bootstrap/css/sweetalert.css" rel="stylesheet">';

        

                $username = $_POST['username'];
                $password = $_POST['password'];

                if (empty($username)) {
                    $_SESSION['error'] = 'กรุณากรอก Username';
                    header("location: login.php");
                } else if (empty($password)) {
                    $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
                    header("location: login.php");
                } else if (strlen($password) > 20 || strlen($password) < 4) {
                    $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 4 ถึง 20 ตัวอักษร';
                    header("location: login.php");
                } else {

                        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
                        $stmt->bindParam(":username", $username);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($stmt->rowCount() > 0 ) {
                            if ($username == $row['username'])  {
                                if ($password == $row['password']) {
                                    if($row['urole'] == 'Admin'){
                                        $_SESSION['admin_login'] = $row['user_id'];
                                        echo '<script>
                                             setTimeout(function() {
                                              swal({
                                                  title: "คุณเข้าสู่ระบบโดยใช้สิทธิ์ Admin",
                                                  text: "[คุณเป็นผู้ดูแลระบบสามารถใช้ระบบใด้ทุกส่วน]",
                                                  type: "success"
                                              }, function() {
                                                  window.location = "admin/index.php"; //หน้าที่ต้องการให้กระโดดไป
                                              });
                                            }, 500);
                                        </script>';
                                        }
                                    if($row['urole'] == 'User'){
                                        $_SESSION['user_login'] = $row['user_id'];
                                        echo '<script>
                                            setTimeout(function() {
                                                swal({
                                                    title: "คุณเข้าสู่ระบบโดยใช้สิทธิ์ user",
                                                    text: "[คุณสามารถใช้ระบบหลังบ้านใด้บางส่วนเท่านั้น]",
                                                    type: "success"
                                                }, function() {
                                                    window.location = "user/index.php"; //หน้าที่ต้องการให้กระโดดไป
                                                });
                                            }, 500);
                                        </script>';
                                        
                                    }

                                }else {
                                    $_SESSION['warning'] = "UserName ไม่ถูกต้อง";
                                    echo '<script>
                                        setTimeout(function() {
                                            swal({
                                                title: "Password ไม่ถูกต้อง!!",
                                                text: "[กรุณากรอกข้อมูลให้ถูกต้องหรือติดต่อผู้ดูแลระบบ]",
                                                type: "warning"
                                            }, function() {
                                                window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                                            });
                                        }, 500);
                                    </script>';

                                        }
                                    }else {
                                        $_SESSION['warning'] = "รหัสผ่านไม่ถูกต้อง";
                                        echo '<script>
                                            setTimeout(function() {
                                                swal({
                                                    title: "Password ไม่ถูกต้อง!!",
                                                    text: "[กรุณากรอกข้อมูลให้ถูกต้องหรือติดต่อผู้ดูแลระบบ]",
                                                    type: "warning"
                                                }, function() {
                                                    window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                                                });
                                            }, 500);
                                        </script>';
                                                                  
                                        }
                                    }else {
                                        $_SESSION['error'] = "ไม่พบข้อมูลในระบบ";
                                        echo '<script>
                                            setTimeout(function() {
                                                swal({
                                                    title: "ไม่พบข้อมูลในระบบ !!",
                                                    text: "[กรุณาสมัครสมาชิกหรือติดต่อผู้ดูแลระบบ]",
                                                    type: "error"
                                                }, function() {
                                                    window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                                                });
                                            }, 500);
                                        </script>';
                                    }
            
                    }
                }
        
    
            
?>