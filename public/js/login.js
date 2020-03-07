
sign_in.addEventListener("click", function() {
  window.location.href = "login";
  login_button.addEventListener("click", function() {
    let obj = {
      username: username.value,
      password: password.value
    };
    JSON.stringify(obj);
  });
});
signin_page.addEventListener("click", function() {
  window.location.href = "login";
});
sign_up.addEventListener("click", function() {
  window.location.href = "registration";
  });
signup_page.addEventListener("click", function() {
  window.location.href = "registration";
});
