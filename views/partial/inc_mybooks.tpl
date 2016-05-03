
        {foreach from=$books item = book}
            <div class="col-md-4 col-ms-6">
                <div class="g-item" style="width:250px;height: 250px;">
                    <img src="{$book["UrlPicture"]}" alt="">
                    <a class="overlay" href="#" data-toggle="modal" data-target="#myModalBook{$book["idBook"]}" onclick="fillCommentByBookId({$book["idBook"]})">
                        <span>{$book["BookName"]}</span>
                    </a>
                </div> <!-- /.g-item -->
            </div> <!-- /.col-md-4 -->

        {/foreach}


{foreach from=$books item = book}
    {include file="views/partial/inc_modal_book.tpl" book=$book name="myModalBook"}
{/foreach}

