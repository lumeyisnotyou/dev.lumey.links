
function loginUser(form) {
console.log("AAAAAAAa");
var email = document.getElementById("email").value;
var password = document.getElementById("pass").value;
firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    console.log("signed in");
    window.location.replace("index.html");
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorMessage);
  });
}

function signOut() {
  firebase.auth().signOut()
  .then(function() {
  window.location.replace("index.html")
  });
}
