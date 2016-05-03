<!-- Modal -->
<div class="modal fade" id="{$name}{$book.idBook}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-head-login">{$book.BookName}</p>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td width="300px;">
                            <img src="{$book.UrlPicture}" style="align:left; margin: 10px;">
                        </td>
                        <td  style="margin: 10px;">
                            <table>
                                <tr>
                                    <td><p style="color:black; font-size: large">Описание:</p>{$book.Description}</td>
                                </tr>
                                <tr>
                                    <td><p style="color:black; font-size: large">Жанры:</p>
                                        {foreach item="genre" from=$book.genres}
                                            {$genre.Name}<br>
                                        {/foreach}
                                    </td>
                                </tr>
                                <tr>
                                    <td><p style="color:black; font-size: large">Авторы:</p>
                                        {foreach item="author" from=$book.authors}
                                            {$author.Name}<br>
                                        {/foreach}
                                    </td>
                                </tr>
                                <tr>
                                    <td><p style="color:black; font-size: large">Рейтинг книги:</p><p id="book_rating_{$book.Id}">{if $book.NumberOfLikes != 0}{$book.Rating/$book.NumberOfLikes}{else}0{/if}</p></td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            {if isset($smarty.session.userLogin)}
                                {if $book.IsLike|default:0 == 0}
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
                                    {/if}
                            {if $book.IsLike|default:0 == 1}
                            <p id="isLikeBook" >Вы уже оценили данную книгу!</p>
                                {/if}
                            {/if}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {if isset($smarty.session.userLogin)}
                            <select class="form-control" id="book_status_{$book.Id}" onchange="setBookStatus({$book.Id}, this.value)">
                                <option  value="0"></option>
                            {foreach item="bookStatus" from=$smarty.session.bookStatuses}
                                <option value="{$bookStatus.Id}" {if $book.BookStatusId|default:0 == $bookStatus.Id}selected{/if}>{$bookStatus.StatusOfBook}</option>
                            {/foreach}
                            </select>
                            {/if}
                        </td>
                        {if isset($smarty.session.userLogin)}

                            <td><a style="margin: 20px;" onclick="incDownloadsBook({$book.Id})" href="{$book.UrlBook}" class="btn btn-default">Скачать</a></td>

                        {/if}
                    </tr>

                </table>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" style="font-family: 'Times New Roman';font-size: large;" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Отзывы
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                        <div id = "divComments_{$book.idBook}">
                        </div>
                            </div>
                        </div>
                    </div>
                    </div>
                {if isset($smarty.session.userLogin)}
                            <textarea class="form-control" id='comment_{$book.idBook}' style="margin: 10px;"></textarea>
                            <button class="btn btn-info" id="btnComment" onclick="addComment({$book.idBook});" style="float: right">Оставить отзыв</button>
                {/if}
                <br><br>
            </div>
        </div>
    </div>
</div>