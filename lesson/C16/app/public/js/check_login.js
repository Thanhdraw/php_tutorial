function validationForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    print(username, password);
    var messageError = document.getElementById("passwordError");
    if (!check_password(password)) {
        messageError.style.display = "block";
        return false;
    } else {
        messageError.style.display = "none";
        return true;
    }
    if(!check_username(username)) {
        messageError.style.display = "block";
        return false;
    } else {
        messageError.style.display = "none";
        return true;
    }
}


function check_password(password) {
    return password.length >= 8;
}
function check_username(username) {
    return username.length > 0;
}