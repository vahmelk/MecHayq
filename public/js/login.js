console.log("dfgh");
sign_up.addEventListener("click", function () {
  window.location.href = "registration";
});
signup_page.addEventListener("click", function () {
  window.location.href = "registration";
});
  login_button.addEventListener("click", function() {
    
    event.preventDefault();
    let obj = {
      username: username.value,
      password: password.value
    };
    let request=JSON.stringify(obj);
    $.ajax({
      url: "./controller/request.php",
      method: "POST",
      data: request,
      headers: {
        'Content-Type': 'application/json',
        "for": "login"
      },
      success: function (res) {
          console.log(res);
        }
    });
  });

