document.addEventListener('DOMContentLoaded', function () {
	var elems = document.querySelectorAll('.sidenav');
	var instances = M.Sidenav.init(elems);
});
if (getCookie("u_id")) {
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
} else {
  sign_up.addEventListener("click", function() {
    window.location.href = "registration";
    regist_button.addEventListener("click", function() {
      let obj = {
        name: name.value,
        age: age.value,
        username: username.value,
        email: email.value,
        password: password.value
      };
      JSON.stringify(obj);
    });
  });
  signup_page.addEventListener("click", function() {
    window.location.href = "registration";
  });
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
}











function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toGMTString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

}

function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function checkCookie() {
	var user = getCookie("username");
	if (user != "") {
		alert("Welcome again " + user);
	} else {
		user = prompt("Please enter your name:", "");
		if (user != "" && user != null) {
			setCookie("username", user, 30);

		}
	}
}
function delete_cookie(name) {
	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}


$(document).ready(function () {
	$('.sidenav').sidenav();
});