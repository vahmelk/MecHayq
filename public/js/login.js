<<<<<<< HEAD
// console.log("dfgh");
// sign_up.addEventListener("click", function () {
//   window.location.href = "registration";
// });
// signup_page.addEventListener("click", function () {
//   window.location.href = "registration";
// });
login_button.addEventListener("click", function () {
  event.preventDefault();
  let obj = {};
  let email_valid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  let username_vaild = /(([\-\w] +) \.?){ 4, 10 } [a - zA - Z0 - 9]$/;
  if (email_valid.test(username.value)) {
    let obj = {
      email: username.value,
      password: password.value
    }
  }
  else if (username_valid.test(username.value) && username.value.length < 12) {
    let obj = {
      username: username.value,
      password: password.value
    }
  }
  let request = JSON.stringify(obj);
  $.ajax({
    url: "./controller/request.php",
    method: "POST",
    data: request,
    headers: {
      'Content-Type': 'application/json',
      "for": "login"
    },
    success: function (res) {
      if (res) {
        console.log(res);
      } else {
        username.style.border = "red";
        password.style.border = "red";
      }

    }
=======
console.log("dfgh");
sign_up.addEventListener("click", function () {
  window.location.href = "registration";
});
signup_page.addEventListener("click", function () {
  window.location.href = "registration";
});
  login_button.addEventListener("click", function() {
    event.preventDefault();
    // let obj={};
    let email_valid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let username_vaild = /(([\-\w] +) \.?){ 4, 10 } [a - zA - Z0 - 9]$/;
 
  //  if(username_valid.test(username.value) && username.value.length<12) {
    let obj = {
      username: username.value,
      password: password.value
    }
    let queryString = Object.keys(obj).map(key => key + '=' + obj[key]).join('&');
     // let request=JSON.stringify(obj);
    console.log(username.value);
    $.ajax({
      url: "./controller/request.php",
      method: "GET",
      data: obj,
      headers: {
        'Content-Type': 'application/json',
        "for": "login"
      },
      success: function (res) {
        // if(res){
          console.log(res);
        // }else{
        //   username.style.border="red";
        //   password.style.border="red";
        // }
          
        }
    });
>>>>>>> 19e0f76b523349474e870739f26af9e565fdcc10
  });
});

