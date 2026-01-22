$(document).ready(function(){
    $("#loginbutton").click(function(){
        const email=$("#email").val();
        const password=$("#password").val();
        $.ajax({});
    });

    $("#registerbutton").click(function(){
        const name = $("#rname").val();
        const email = $("#remail").val();
        const password = $("#rpassword").val();
        $.ajax({});
    });

    $("sendemailbtn").click(function(){
        const email=$("#rtemail").val();
        $.ajax({});
    })
    $("#signup").click(function () {
        $("#login").hide();
        $("#resetpass").hide();
        $("#register").show();
    });
    $("#showLogin").click(function () {
        $("#register").hide();
        $("#resetpass").hide();
        $("#login").show();
    });
    $("#backToLogin").click(function () {
        $("#register").hide();
        $("#resetpass").hide();
        $("#login").show();
    });
    $("#forgetpassword").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#resetpass").show();
    });
    $(".logoutbutton").click(function () {
        
    });

})