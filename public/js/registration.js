sign_in.addEventListener("click", function() {
  window.location.href = "login";
});
signin_page.addEventListener("click", function() {
  window.location.href = "login";
});
  regist_button.addEventListener("click", function() {
    let obj = {
      name: name.value,
      age: age.value,
      username: username.value,
      email: email.value,
      password: password.value,
      gender:gender.value
    };
    let request=JSON.stringify(obj);
    $.ajax({
    url:"./controller/registration.php",
    method:"POST",
    data:request,
     success:function(res){
     
     }
    });

  });
