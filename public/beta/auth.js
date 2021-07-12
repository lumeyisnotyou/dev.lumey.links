
function loginUser(form) {
console.log("AAAAAAAa");
var email = document.getElementById("email").value;
var password = document.getElementById("pass").value;
firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    alert("wow!");
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
  });
}
