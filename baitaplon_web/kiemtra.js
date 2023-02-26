function validate() {
    var u = document.getElementById("username").value;
    var p1 = document.getElementById("password").value;
    
    if( u != "admin") {
    alert("Vui lòng nhập lại tên đăng nhập!");
    return false;
    }
    if(p1 != "admin") {
    alert("Vui lòng nhập lại mật khẩu!");
    return false;
    }
    alert("Xin hãy điền đúng thông tin!")
     
    return true;
    }