$("#btnLogin").click(function(){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=login&controller=UserController&" + $('#loginForm').serialize(),
        success: function(data){
            if(data.isLogin){
                location.reload();
            }else{
                $('#login_error').text(data.message).show(500);
            }
        }
    });
});

$("#btnLogout").click(function(){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=logout&controller=UserController",
        success: function(data){
            location.reload();
        }
    });
});

$("#btnRegister").click(function(){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=register&controller=UserController&" + $('#registerForm').serialize(),
        success: function(data){
            if(data.isRegister){
                location.reload();
            }else{
                $('#register_error').text(data.message).show(500);
            }
        }
    });
});
