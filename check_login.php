<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $conn=mysqli_connect("localhost", "root", "","trader");
    $conn->query("SET NAMES UTF8");
    $sql = "SELECT * FROM profiles WHERE username = '$username' AND password = '$password'";
    $rs = $conn->query($sql);

    if(!$rs || mysqli_num_rows($rs) == 0) {
        header("Location: login.html");
    }
    else
    {
        while($row = $rs->fetch_assoc()) {
            $role = $row['roles'];
            $username = $row['username'];

            $_SESSION['logged'] = true;
			$_SESSION["s_username"] = $username;
            $_SESSION["s_role"] = $role;

            $conn->close();

                if ($role == "admin")
			        header("Location: main.html");
                else
                    header("Location: home.html");
        }
    }
?>