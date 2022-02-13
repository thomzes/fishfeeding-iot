<?php 
// connection to the database
$conn = mysqli_connect("localhost", "root", "", "fishfeeding");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function signup($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = stripslashes($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $data["confirm-password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $confirm_password) {
        echo "<script>
                alert('Confirm Password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);

}
?>