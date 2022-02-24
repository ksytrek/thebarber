<?php 
if (isset($_POST['submit'])) {
    $cid = $_SESSION['id'];
    $services = $_POST['services'];
    $services2 = $_POST['services2'];
    $tech = $_POST['tech'];
    $dates = $_POST['dates'];
    $enddate2 = $_POST['timess'];
    $enddate3 = $_POST['txtNumberC'];
    $services_time = $_POST['txtNumberC'];

    $inputDate = $enddate2;
    $strCurrDate = strtotime($inputDate);
    $enddate = date("H:i", mktime(date("H", $strCurrDate) + 0, date("i", $strCurrDate) + $enddate3, date("s", $strCurrDate) + 0, date("m", $strCurrDate) + 0, date("d", $strCurrDate) + 0, date("Y", $strCurrDate) + 0));



    $description = $_POST['description'];

    $sql22 = "SELECT * FROM `booking` WHERE techid=$tech and TIME(time) BETWEEN TIME('$enddate2') and TIME('$enddate') and date='$dates'";
    $result2 = $conn->query($sql22);
    $row2 = $result2->fetch_assoc();
    $rowcount = mysqli_num_rows($result2);

    if ($rowcount > 0) {

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
    title: "มีการจองคิวอยู่แล้ว!",
    text: "กรุณาลองใหม่!",
    type: "warning",
    icon: "error"
    });';
        echo '}, 500 );</script>';
    } else {


        $sql = $bookingdata->booking($cid, $services, $services2, $tech, $dates, $enddate2, $enddate, $services_time, $description);
        if ($sql) {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
    title: "สำเร็จ!",
    text: "จองคิวเรียบร้อย!",
    type: "success",
    icon: "success"
    });';
            echo '}, 500 );</script>';
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
    window.location.href = "/thebarber/";';
            echo '}, 3000 );</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
    title: "ผิดพลาด!",
    text: "กรุณาลองใหม่!",
    type: "warning",
    icon: "error"
    });';
            echo '}, 500 );</script>';
        }
    }
}
