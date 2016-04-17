<!-- Modal -->
<div class="modal fade" id="modalBook{$book.Id}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-head-login">{$book.BookName}</p>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td>
                            <img src="{$book.UrlPicture}" style="align:left;">
                        </td>
                        <td>
                            <table>
                                <tr>{$book.BookName}</tr>
                            </table>

                        </td>
                    </tr>
                </table>

            </div>
            <div class="modal-footer">
                <button id="btnLogin" type="button" class="btn btn-default btn-authorized">Sing In</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>