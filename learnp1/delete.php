<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        die("Ket noi khong thanh cong: ".mysqli_connect_error());
    }
    else{
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])){
            $id = $_POST['id'];
            $sql = "DELETE FROM khachhang WHERE customer_id = $id";
            if(mysqli_query($conn,$sql)){
                echo "Du lieu da duoc xoa thanh cong";
            }
            else{
                echo "Loi: ".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>