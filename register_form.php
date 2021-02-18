<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
    <meta charset="UTF-8">
    <meta name='viweport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <link rel="stylesheet" href = "register_css.css">
    <title>สมัครสมาชิก</title>
</head>
<body>
    
<form action="register.php" method="post">
    <h2>สมัครสมาชิก</h2>
          <p>
              <label for="photo" class="floatLabel">อัพโหลด</label>
              <br/><br/>
              <input id="photo" name="photo" type="file" required>
          </p>
          <p>
              <label for="username" class="floatLabel">ชื่อผู้ใช้</label>
              <input id="username" name="username" type="text" required>
          </p>
          <p>
              <label for="password" class="floatLabel">รหัสผ่าน</label>
              <input id="password" name="password" type="password" required>
              
          </p>
           <p>
              <label for="confirm_password" class="floatLabel">ยืนยันรหัสผ่าน</label>
              <input id="confirm_password" name="confirm_password" type="password" required>
              
          <p>
            <label for="tel" class="floatLabel">เบอร์โทรศัพท์</label>
            <input id="tel" name="tel" type="text" required>
          </p>
          <p>
            <label for="role" class="floatLabel">บทบาท</label>
            <br/><br/>
            <select id="role" name="role" required>
                <option value="empty"></option>
                <option value="sender">sender</option>
                <option value="receiver">receiver</option>
              </select>
          </p>
          <p>
          <input type="hidden" id="status" name="status" value="ปกติ">
          </p>
          <p>
              <input type="submit" value="สร้างบัญชีของฉัน" id="submit">
          </p>
      </form>
</body>
</html>