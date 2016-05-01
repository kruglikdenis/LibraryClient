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
                                <tr>
                                    <td>{$book.Description}</td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="reviewStars-input">
                                <input id="star-4" type="radio" name="reviewStars" value="1" onclick="setRating({$book.Id}, this.value)"/>
                                <label title="gorgeous" for="star-4"></label>

                                <input id="star-3" type="radio" name="reviewStars" value="2" onclick="setRating({$book.Id}, this.value)"/>
                                <label title="good" for="star-3"></label>

                                <input id="star-2" type="radio" name="reviewStars" value="3" onclick="setRating({$book.Id}, this.value)"/>
                                <label title="regular" for="star-2"></label>

                                <input id="star-1" type="radio" name="reviewStars" value="4" onclick="setRating({$book.Id}, this.value)"/>
                                <label title="poor" for="star-1"></label>

                                <input id="star-0" type="radio" name="reviewStars"  value="5" onclick="setRating({$book.Id}, this.value)"/>
                                <label title="bad" for="star-0"></label>
                            </div>
                            <p id="isLikeBook" style="display: none;">Вы уже оценили данную книгу!</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a onclick="incDownloadsBook({$book.Id})" href="{$book.UrlBook}" class="btn btn-default">Скачать</a></td>
                        <td></td>
                    </tr>
                </table>
                <div id = "divComments_{$book.Id}">
                </div>
                <table>
                    <tr>
                        <td>
                            <textarea class="form-control" id='comment_{$book.Id}'></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-info" id="btnComment" onclick="addComment({$book.Id});">Оставить отзыв</button>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>