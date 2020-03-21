console.log("dfgh");
sign_up.addEventListener("click", function () {
  window.location.href = "registration";
});
signup_page.addEventListener("click", function () {
  window.location.href = "registration";
});
login_button.addEventListener("click", function() {
    event.preventDefault();
    let obj={};
    let username_vaild = /(([\-\w] +) \.?){ 4, 10 } [a - zA - Z0 - 9]$/;
    let email_valid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email_valid.test(username.value)) {
      obj ={
        email: username.value
      }
    }
    else if (username_vaild.test(username.value)) {
      obj = {
        username: username.value
      }
    } 
    let password_valid = /(?=^.{6,}$)((?=.*\d)(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[^A-Za-z0-9])(?=.*[a-z])|(?=.*[^A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[A-Z])(?=.*[^A-Za-z0-9]))^.*/;
    if (password_valid.test(password.value)) {
      obj = {
        ...obj,
        password: password.value
    };
  }
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
  });

