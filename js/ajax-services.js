$("#btnLogin").click(function(){
    var request = $.ajax({
        method: "POST",
        url: 'option_fill.php',
        data: "method=login&" + $('#loginForm').serialize(),
        success: function(data){
            alert(data);
        }
    });
});
