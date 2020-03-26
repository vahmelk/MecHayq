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
      name: user.value,
      age: age.value,
      username: username.value,
      email: email.value,
      password: password.value,
      gender:document.getElementById(document.getElementById('male').checked ? "male" : "female").value
    };
    
    // console.log(obj);
    $.ajax({
    url:"./controller/request.php",
    method:"Get",
    data:obj,
    headers:{
      'Content-Type': 'application/json',
      "for":"registration"
    },
     success:function(res){
      //  let xhttp = new XMLHttpRequest();
      //  xhttp.onreadystatechange = function () {
      //    if (this.readyState == 4 && this.status == 200) {
      //      console.log(this.responseText);
      //      let row = JSON.parse(res);

      //       if (row) {
      //       console.log(row);
      //       setcookie("u_id", now, 30);
      //      }
      //      
      //    }
      //  }
        if (!res.includes("fail")) {
          setCookie("u_id", now, 30);
          window.location.reload();
      }
      else {
              error_msg.style.display="block";
           }
     
          }
    });
   
  });

