function validateLogin() {
  var input1 = document.forms["login-form"]["email-login"].value;
  var input2 = document.forms["login-form"]["pwd-login1"].value;
    if (input1 == "" || input2== "") {
        alert("Lūdzu aizpildiet visus nepieciešamos laukus");
        return false;
    }
}

function validateSignup() {
var input1 = document.forms["signup-form"]["name-signup"].value;
var input2 = document.forms["signup-form"]["email-signup"].value;
var input3 = document.forms["signup-form"]["pwd-signup"].value;
if (input1 == "" || input2 == "" || input3 == "") {
    alert("Lūdzu aizpildiet visus nepieciešamos laukus");
    return false;
}
}
