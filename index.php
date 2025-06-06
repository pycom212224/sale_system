<?php
    session_start();
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
<body>
    <?php include 'menu.php'; ?>
    <main>
        <div class="container mt-4">       
            <div class="card-header alert-primary">
                <h4 class="mt-4 text-center"><i class="bi bi-graph-up"></i>  ระบบการขายสินค้า (SaleSystem)</h4>
            </div>
            <div class="card-body">
                <p class="lead text-center">เป็นระบบสารสนเทศที่ใช้ในการขายสินค้าในธุรกิจขนาดเล็กเพื่อความสะดวกในการตรวจสอบการขายสินค้าต่าง ๆ</p> 
<hr>
                <p class="lead ">  แสดงข้อมูลสินค้าในระบบ</p> 
                <div align = "center">
                        <table class="table table-striped table-hover">
                            <thead class="table-success">
                            <tr>
                                <th>#</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวนคงเหลือ</th>
                            </tr>
                            </thead>
<?php 
    $stmt01 = $conn->prepare("SELECT * FROM product");
    $stmt01->execute();
    $result = $stmt01->fetchAll();
    $m=1;

foreach($result as $row) { 
    
?>
                            <tr>
                                <td><?php echo $m;?>.</td>
                                <td><?php echo $row['pro_id'];?></td>
                                <td><?php echo $row['pro_name'];?></td>
                                <td align="center"><?php echo $row['pro_total'];?></td>
                            </tr>
<?php 
    $m=$m+1;
    }
?>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    <?php include 'footter.php' ?>
    </main>
</body>

</html>
