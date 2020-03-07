home.addEventListener("click", function() {
  window.location.href = "home";
});
home_page.addEventListener("click", function() {
  window.location.href = "home";
});
sign_out.addEventListener("click", function() {
  delete_cookie("u_id");
  location.reload();
});
signout_page.addEventListener("click", function() {
  delete_cookie("u_id");
  location.reload();
});


