<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>เพิ่มข้อมูลลูกค้า</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <?php if (isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php
                    unset($_SESSION['message']);
                endif;
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>เพิ่มข้อมูลลูกค้า
                            <a href="index.php" class="btn btn-danger float-end">ย้อนกลับ</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <form action="crud.php" method="POST">
                            <div class="mb-3">
                                <label>คำนำหน้า:</label>
                                <input type="text" required name="title_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>ชื่อ:</label>
                                <input type="text" required name="name_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>นามสกุล:</label>
                                <input type="text" required name="surname_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>หมายเลขโทรศัพท์:</label>
                                <input type="text" required name="phone_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>อีเมล:</label>
                                <input type="text" required name="email_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>ที่อยู่:</label>
                                <input type="text" required name="adress_ct" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" required name="save_customer_btn" class="btn btn-success">บันทึก</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>

</html>