async function getUGCImages() {
    try {
       await $.ajax({
          type: "GET",
          url: "https://links.lumey.dev/php/requestinfo.php",
          data: {
             userID: firebase.auth().currentUser.uid
          },
          contentType: "application/json"
       }).done(function(response) {
          console.log(response);
       }).fail(function(err) {
          console.log(err);
       });
    } catch (error) {
       console.log(error);
    }
 }