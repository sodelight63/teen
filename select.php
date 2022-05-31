<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

    <title>select</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <h1 class="text-conter">ตารางลูกค้า</h1>
                    <div class="col-md-2"></div>
                    <?php
                    $stmt = $conn->query($sql);
                    ?>
                    <table class="table table-bordered table-dark">
                        <thead>
                            <th>รหัสลูกค้า</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>รหัสผ่าน</th>
                            <th>หมายเลขโทรศัพท์</th>
                            <th>อีเมล</th>
                            <th>ที่อยู่</th>
                            <th>ลบ</th>

                        </thead>
                        <?php
                        while ($row = $stmt->fetch()) {
                        ?>
                            <tr class="table-info">
                                <td><?= $row["customer_id"]; ?></td>
                                <td><?= $row["username_ct"]; ?></td>
                                <td><?= $row["password_ct"]; ?></td>
                                <td><?= $row["title_ct"]; ?></td>
                                <td><?= $row["name_ct"]; ?></td>
                                <td><?= $row["surname_ct"]; ?></td>
                                <td><?= $row["phone_ct"]; ?></td>
                                <td><?= $row["emai;_ct"]; ?></td>
                                <td><?= $row["adress_ct"]; ?></td>
                                <td><a href="edit-form.php?empno=<?php echo $row['EMPNO']; ?>"><img src="edit.png" width="24"></a></td>
                                <td><a href="delete-employee.php?empno=<?php echo $row['EMPNO']; ?>" onclick="return confirm('คุณต้องการลบหรือไม่');"><img src="garbage.png" width="24"></a></td>

                            </tr>
                        <?php
                        }
                        ?>
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $('#datatable').DataTable({});
    </script>

</body>

</html>