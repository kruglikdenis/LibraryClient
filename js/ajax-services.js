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


function addComment(bookId){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=createComment&controller=CommentController&bookId=" + bookId+"&text=" + $('#comment_'+bookId).val(),
        success: function(data){
            fillCommentByBookId(bookId);
        }
    });
}


function fillCommentByBookId(bookId){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=getCommentByBook&controller=CommentController&bookId=" + bookId,
        success: function(data){
            var $div = $('#divComments_'+bookId);
            $div.empty();
            $.each(data.data,function(index,item){
                $div.append('<p>'+item.Text+'</p>');
            });
        }
    });
}

function incDownloadsBook(bookId){
    var request = $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=incDownloads&controller=BookController&id=" + bookId,
        success: function(data){
        }
    });
}


function setRating(bookId, rating){
    $.ajax({
        method: "POST",
        dataType: "json",
        url: 'option_fill.php',
        data: "action=setRating&controller=LibraryCardController&bookId=" + bookId+'&rating='+rating,
        success: function(data){
            $('#reviewStars-input').hide();
            $('#isLikeBook').show();
        }
    });
}
