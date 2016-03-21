<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-head-login">Login</p>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <input class="form-control" type="text" name="login" placeholder="Login"/>
                    <br/>
                    <input class="form-control" type="password" name="password" placeholder="Password"/>
                </form>
                    <p id="login_error" class="text-danger" style="display: none;"></p>
            </div>
            <div class="modal-footer">
                <button id="btnLogin" type="button" class="btn btn-default btn-authorized">Sing In</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>