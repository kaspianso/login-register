$('#moveLeft').click(function(){
  $('.login').animate({
    marginLeft: "-=420px",
  }, 500);
  $('.bg-folds').animate({
    marginLeft: "-=420px",
  }, 500);
  $('.dark-fold').animate({
    marginLeft: "-=420px",
  }, 500);

});

$('#moveRight').click(function(){
  $('.login').animate({
    marginLeft: "+=420px",
  }, 500);
  $('.bg-folds').animate({
    marginLeft: "+=420px",
  }, 500);
  $('.dark-fold').animate({
    marginLeft: "+=420px",
  }, 500);

});

document.getElementById("moveLeft").onclick = function(){
  document.getElementById("change1").innerHTML = "Sign up";
  document.getElementById('name-signup').style.display= "block";
  document.getElementById('name-signup1').style.display= "block";
  document.getElementById('log-in').style.display= "none";
  document.getElementById('forgot').style.display= "none";
  document.getElementById('sign-up').style.display= "block";
  document.getElementById('moveLeft').style.display= "none";
  document.getElementById('moveRight').style.display= "block";
  document.getElementById('viltusPoga').style.display= "block";
  document.getElementById('viltusPoga2').style.display= "none";
  document.getElementById('email-signup').style.display= "block";
  document.getElementById('email-signup1').style.display= "block";
  document.getElementById('email-login').style.display= "none";
  document.getElementById('email-login1').style.display= "none";
  document.getElementById('pwd-signup').style.display= "block";
  document.getElementById('pwd-signup1').style.display= "block";
  document.getElementById('pwd-login').style.display= "none";
  document.getElementById('pwd-login1').style.display= "none";
  document.getElementById('signup-form').style.display= "block";
  document.getElementById('login-form').style.display= "none";



}
document.getElementById('moveRight').onclick = function(){
  document.getElementById('change1').innerHTML = "Login";
  document.getElementById('name-signup').style.display="none";
  document.getElementById('name-signup1').style.display="none";
  document.getElementById('log-in').style.display= "block";
  document.getElementById('forgot').style.display= "block";
  document.getElementById('sign-up').style.display= "none";
  document.getElementById('moveLeft').style.display= "block";
  document.getElementById('moveRight').style.display= "none";
  document.getElementById('viltusPoga').style.display= "none";
  document.getElementById('viltusPoga2').style.display= "block";
  document.getElementById('email-signup').style.display= "none";
  document.getElementById('email-signup1').style.display= "none";
  document.getElementById('email-login').style.display= "block";
  document.getElementById('email-login1').style.display= "block";
  document.getElementById('pwd-signup').style.display= "none";
  document.getElementById('pwd-signup1').style.display= "none";
  document.getElementById('pwd-login').style.display= "block";
  document.getElementById('pwd-login1').style.display= "block";
  document.getElementById('signup-form').style.display= "none";
  document.getElementById('login-form').style.display= "block";


}
