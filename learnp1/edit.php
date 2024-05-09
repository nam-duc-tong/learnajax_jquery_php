<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        die("Ket noi khong thanh cong: ".mysqli_connect_error());
    }
    else{
        if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['id']) && isset($_POST['name'])){
            $id = $_POST['id'];
            $newName = $_POST['name'];

            $sql = "UPDATE khachhang SET customer_name = '$newName' WHERE customer_id = '$id'";
            if(mysqli_query($conn,$sql)){
                echo "Du lieu da duoc cap nhat thanh cong";
            }
            else{
                 echo "Loi: ".mysql_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>