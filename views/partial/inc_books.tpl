<div id="menu-3" class="gallery content">
    <div class="form-inline form-group">
        <input type="text" placeholder="Название книги" value="{$smarty.session.searchBookName|default:""}" class="form-control" id="input_search"/>
        <input type="button" value="Найти" class="btn btn-default" style="float: right" onclick="searchBook()">
    </div>


    <div class="row">
    {foreach from=$books item = book}
        <div class="col-md-4 col-ms-6">
            <div class="g-item" style="width:250px;height: 300px;">
                <img src="{$book["UrlPicture"]}" alt="">
                <a class="overlay" href="#" data-toggle="modal" data-target="#modalBook{$book["idBook"]}" onclick="fillCommentByBookId({$book["idBook"]})">
                    <span>{$book["BookName"]}</span>
                </a>
            </div> <!-- /.g-item -->
        </div> <!-- /.col-md-4 -->

    {/foreach}
    </div> <!-- /.row -->
</div> <!-- /.gallery -->


{foreach from=$books item = book}
    {include file="views/partial/inc_modal_book.tpl" book=$book name="modalBook"}
{/foreach}
