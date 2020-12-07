<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:180px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form method = "post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30"  placeholder="username" />
        <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>

/*

Xây dựng một trang web với chứng năng đăng nhập và hiển thị lời chào nếu đăng nhập thành công. Tạo trang index.php chứa một form đăng nhập. Tên đăng nhập và mật khẩu được cố định sẵn là admin và admin. Khi nhập đúng tên và mật khẩu thì hiển thị lời chào Welcome admin to website.; Nếu nhập không đúng thì hiển thị thông báo Login Error.

Trong đoạn mã trên:

$_POST["username"] và $_POST["password"] được dùng để lấy giá trị từ form do người dùng nhập vào. Các tên username và password là trùng với thuộc tính name của các thẻ input.

Bước 4: Chạy chương trình

- Đăng nhập với username và password là admin/admin và quan sát kết quả.

- Đăng nhập với username và password bất kỳ và quan sát kết quả.

- Thay POST bằng GET chạy lại chương trình và so sánh kết quả.

Lưu ý: Nếu quan sát trên URL, sẽ có sự khác nhau:

URL với POST: http://localhost/index.php
URL với GET: http://localhost/index_GET.php?username=admin&password=admin
Vậy khi phương thức HTTP GET được sử dụng với form, các tham số sẽ được hiển thị trên URL khi form được truyền đi. Khi đó các tham số này sẽ được lưu vào mảng $_GET. Biến $_GET là mảng chứa các cặp khóa/giá trị cho dữ liệu được truyền theo yêu cầu HTTP. Biến $_GET là biến toàn cục, do đó nó có thể được truy cập ở bất cứ đâu trong mã PHP.

Tương tự với phương thức HTTP POST, tuy nhiên với GET thì giá trị của các tham số sẽ được hiển thị trên URL truyền đi, còn POST thì không.
*/


</body>
</html>