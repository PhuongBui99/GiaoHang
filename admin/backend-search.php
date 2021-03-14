<?php
/* Cố gắng kết nối đến MySQL server*/
$mysqli = new mysqli("localhost", "root", "", "loginsystem");
 
// Kiểm tra kết nối
if($mysqli === false){
    die("ERROR: Không thể kết nối. " . $mysqli->connect_error);
}
 
if(isset($_REQUEST["term"])){
    // Chuẩn bị câu lệnh SQL SELECT
    $sql = "SELECT * FROM tbl_khachhang WHERE Ten LIKE ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
        $stmt->bind_param("s", $param_term);
        
        // Thiết lập các tham số
        $param_term = $_REQUEST["term"] . '%';
        
        // Cố gắng thực thi câu lệnh đã chuẩn bị
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            // Kiểm tra số lượng row trong kết quả
            if($result->num_rows > 0){
                // Tìm nạp các hàng kết quả dưới dạng mảng kết hợp
                while($post = $result->fetch_array(MYSQLI_ASSOC)){
                   
                    echo "<tr id= 'hang'><td >".$post["IDKH"]."</td><td >".$post["Ho"]."</td><td>".$post["Ten"]."</td><td>".$post["Email"]."</td><td>".$post["phoneNumber"]."</td><td>".$post["NgaySinh"]."</td><td>".$post["GioiTinh"]."</td>
                    <td>".$post["diaChi"]."</td><td>".$post["QuocGia"]."</td><td>".$post["Tinh"]."</td><td>".$post["Quan"]."</td><td>".$post["Phuong"]."</td><td><a href='suakhachhang.php?IDKH=".$post["IDKH"]."'>Sua</a>|<a href='xoakhachhang.php?IDKH=".$post["IDKH"]."'><button onclick = xoa()>Xóa</button></a></td></tr><br>";
               
                }
            } else{
                echo "<p>Không tìm thấy kết quả nào</p>";
            }
        } else{
            echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
        }
    }
     
    // Đóng câu lệnh
    $stmt->close();
}
// Đóng kết nối
$mysqli->close();
?>
