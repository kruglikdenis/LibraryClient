<div id="menu-3" class="gallery content">
    <div class="row">
    {foreach from=$smarty.session.books item = book}
        <div class="col-md-4 col-ms-6">
            <div class="g-item">
                <img src="{$book["UrlPicture"]}" alt="">
                <a class="overlay" href="#" data-toggle="modal" data-target="#modalBook{$book["Id"]}" onclick="fillCommentByBookId({$book["Id"]})">
                    <span>{$book["BookName"]}</span>
                </a>
            </div> <!-- /.g-item -->
        </div> <!-- /.col-md-4 -->

    {/foreach}
    </div> <!-- /.row -->
</div> <!-- /.gallery -->


{foreach from=$smarty.session.books item = book}
    {include file="views/partial/inc_modal_book.tpl" book=$book }
{/foreach}
