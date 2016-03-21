<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-head-login">Registration</p>
            </div>
            <div class="modal-body">
                <form id="registerForm">
                    <input class="form-control" type="text" name="Name" placeholder="Name"/>
                    <br/>
                    <input class="form-control" type="text" name="Surname" placeholder="Surname"/>
                    <br/>
                    <input class="form-control" type="text" name="Email" placeholder="Email"/>
                    <br/>
                    <div class="container">
                        <div class="row">
                                <input type='text' class="form-control" name="DateOfBirdth" id='datetimepicker4' />
                        </div>
                    </div>
                    <br/>
                    <input class="form-control" type="text" name="Login" placeholder="Login"/>
                    <br/>
                    <input class="form-control" type="password" name="Password" placeholder="Password"/>
                    <br/>
                    <input class="form-control" type="password" name="ConfPassword" placeholder="confPassword"/>
                </form>
                <p id="register_error" class="text-danger" style="display: none;"></p>
            </div>
            <div class="modal-footer">
                <button id="btnRegister" type="button" class="btn btn-default btn-authorized">Ok</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>