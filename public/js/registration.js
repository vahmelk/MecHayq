sign_in.addEventListener("click", function() {
  window.location.href = "login";
 
});

signin_page.addEventListener("click", function() {
  window.location.href = "login";
});
  regist_button.addEventListener("click", function() {
    event.preventDefault();
    const now = Date.now();
    console.log(now);
    const obj = {
      u_id:now,
      name: name.value,
      age: age.value,
      username: username.value,
      email: email.value,
      password: password.value,
      gender:document.getElementById(document.getElementById('male').checked ? "male" : "female").value
    };
    // const request=JSON.stringify(obj);
    $.ajax({
    url:"./controller/request.php",
    method:"Get",
    data:obj,
    headers:{
      'Content-Type': 'application/json',
      "for":"registration"
    },
     success:function(res){
       let xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
           console.log(this.responseText);
           let row = JSON.parse(res);
            if (res) {
            console.log(res);
            setcookie("u_id", now, 30);
           }
           else {
              username.style.border="red";
              email.style.border="red";
              password.style.border="red";
           }
         }
       }
     }
    });
   
  });

