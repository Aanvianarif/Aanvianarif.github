// index
document.getElementById("jadwal").addEventListener("click", function () {
  swal("Alert", "Login Dulu Goblok", "warning");
});
document.getElementById("porfolio").addEventListener("click", function () {
  swal("Alert", "Login Dulu Goblok", "warning");
});
document.getElementById("kosong2").addEventListener("click", function () {
  swal("Alert", "Login Dulu Goblok", "warning");
});
document.getElementById("login").addEventListener("click", function () {
  swal("Write something here:", {
    content: "input",
  }).then((value) => {
    if (value == 1619) {
      swal(`You typed: ${value}`);
      location.replace("menulogin.html");
    } else {
      return false;
    }
  });
});
