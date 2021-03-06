<!--Start Sign in-->
<!-- wird über Button click im header (Sign in) aufgerufen -->
<div id="signinbutton" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!-- Modal header-->
            <div class="modal-header">

                <!-- Close Button oben rechts im Header -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- Überschrift -->
                <h1 class="modal-ueberschrift">Sign in</h1>

                <br>
            </div>

            <!-- Modal body-->
            <div id="modal-login-admin">
                @include('admin.auth.login')
            </div>

            <div id="modal-login-emp">
                @include('employee.auth.login')
            </div>
        </div>
    </div>
</div>

