<?php
session_start();
require_once('config/connect_db.php');

if(isset($_POST['save_customer_btn']))
{
    $title_ct = $_POST['title_ct'];
    $name_ct = $_POST['name_ct'];
    $surname_ct = $_POST['surname_ct'];
    $phone_ct = $_POST['phone_ct'];
    $email_ct = $_POST['email_ct'];
    $adress_ct = $_POST['adress_ct'];


    $query = "INSERT INTO customer (title_ct, name_ct, surname_ct, phone_ct, email_ct, adress_ct) VALUES (:title_ct, :name_ct, :phone_ct, :phone_ct, :email_ct, :adress_ct)";
    $query_run = $conn->prepare($query);

    $data = [
        'title_ct' => $title_ct,
        ':name_ct' => $name_ct,
        ':surname_ct' => $surname_ct,
        ':phone_ct' => $phone_ct,
        ':email_ct' => $email_ct,
        ':adress_ct' => $adress_ct,
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "เพิ่มข้อมูลสำเร็จ";
        header('Location: insert.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "เกิดข้อผิกพลาด เพิ่มข้อมูลไม่สำเร็จ";
        header('Location: insert.php');
        exit(0);
    }
}
