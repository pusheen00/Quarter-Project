var pass= document.getElementById("password")
var text = document.getElementById("password-strength-test")
document.getElementById("submit").disabled = true;
pass.addEventListener('keyup', function() {
    checkPassword(pass.value)
})

function checkPassword(password) {
  var strengthBar = document.getElementById("passStrength")
  var strength = 0;
  if (password.match(/[a-zA-Z0-9][a-zA=Z0-9]+/)){
    strength += 1
  }
  if (password.match(/[~<>?]+/)){
    strength += 1
  }
  if (password.match(/[!@#$%^&*()]+/)){
    strength += 1
  }
  if (password.length > 5) {
    strength += 1
  }


  switch(strength){
    case 0:
      strengthBar.value = 20;
      break
    case 1:
      strengthBar.value=40;
      break
    case 2:
      strengthBar.value=60;
      break
    case 3:
      strengthBar.value=80;
      break
    case 4:
      strengthBar.value=100;
      document.getElementById("submit").disabled = false;
      break
  }
}

function popup(){
  document.getElementById("myPopup").style.visibility = "visible";
}
