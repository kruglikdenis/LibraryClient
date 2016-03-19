$("#btnLogin").click(function(){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "method=login&" + $('#loginForm').serialize(),
        success: function(data){
            if(data.isLogin){
                location.reload();
            }
        }
    });
});

$("#btnLogout").click(function(){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "method=logout",
        success: function(data){
            location.reload();
        }
    });
});
