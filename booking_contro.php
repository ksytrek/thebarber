<?php
define("DB_TYPE", "MySQL"); // MySQL & SQLite
define("DB_HOST", "localhost");
define("DB_USERNAME", "nsc");
define("DB_PASSWORD", "!nsc2022");
// define("DB_USERNAME", "root");
// define("DB_PASSWORD", "");
define("DB_NAME", "srs");

define("DB_DNS_MYSQL", "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME);
define("DB_DNS_SQLITE", "sqlite:db/sqlite_file");

class Database
{
    private static $link = null;
    private static function getLink()
    {
        if (self::$link) {
            return self::$link;
        }
        self::$link = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
        self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$link;
    }

    public static function __callStatic($name, $args)
    {
        $callback = array(self::getLink(), $name);
        return call_user_func_array($callback, $args);
    }

    public static function Con_delete()
    {
        self::getLink() == null;
    }
}


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

        $sq = "INSERT INTO `booking` (`id`, `custid`, `services`, `services2`, `techid`, `date`, `thistime`, `time`, `services_time`, `price`, `description`, `status_id`, `disapprove`, `date_create`) VALUES (NULL, '$cid', '$services', '$services2', '$tech', '$dates', '$enddate2', '$enddate', '$services_time', '', '$description', '1', '1', CURRENT_TIMESTAMP);";
        $d = "INSERT INTO booking(custid, services,services2, techid,date,thistime, time,services_time,description) VALUES('$cid', '$services','$services2', '$tech','$dates','$enddate2', '$enddate','$services_time', '$description')";
        $sql = $bookingdata->booking($cid, $services, $services2, $tech, $dates, $enddate2, $enddate, $services_time, $description);

        if(Database::query($sq)){
            echo "success";
        }else{
            echo "error";
        }


        //     if ($sql) {
    //         echo '<script type="text/javascript">';
    //         echo 'setTimeout(function () { swal.fire({
    // title: "สำเร็จ!",
    // text: "จองคิวเรียบร้อย!",
    // type: "success",
    // icon: "success"
    // });';
    //         echo '}, 500 );</script>';
    //         echo '<script type="text/javascript">';
    //         echo 'setTimeout(function () { 
    // window.location.href = "/thebarber/";';
    //         echo '}, 3000 );</script>';
    //     } else {
    //         echo '<script type="text/javascript">';
    //         echo 'setTimeout(function () { swal.fire({
    // title: "ผิดพลาด!",
    // text: "กรุณาลองใหม่!",
    // type: "warning",
    // icon: "error"
    // });';
    //         echo '}, 500 );</script>';
    //     }
    }
}
