<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        die("Ket noi khong thanh cong: ".mysqli_connect_error());
    }
    else{
        // die("Ket noi thanh cong");
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])){
            $name = $_POST['name'];
            $sql = "INSERT INTO khachhang (customer_name) VALUES ('$name')";
            if(mysqli_query($conn,$sql)){
                echo "Du lieu da duoc them thanh cong";
            }
            else{
                echo "Loi: ".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>