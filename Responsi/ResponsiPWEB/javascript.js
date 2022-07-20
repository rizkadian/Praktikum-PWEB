function Login() {
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if (username == "admin" && password == "admin") {
        window.location = "daftar.php";
        alert("Login berhasil!");
        return false;
    } 
    else {
        alert("Username/Password yang anda masukkan salah!");
    }
}