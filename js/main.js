var email = $("#email").val();
var pass = $("#pass").val();
$.ajax({
    url: "./user.php",
    method: "POST",
    dataType: "json",
    data: {email: email, pass: pass},
    success: function (data) {
        if (!data.status) {
            alert(data.notify);
        } else {
            $("#login").hide();
            alert(data.notify);
            $("#hello").show();
        }
    },
    error: function () {
        alert("Request error!");
    }
});