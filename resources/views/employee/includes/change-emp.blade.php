<!--Change button Pop - Up-->
<div id="change-button" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">

                <!--Close Button oben rechts im Header-->
                <button type="button" class="close" data - dismiss="modal"
                >&times;</button>

                <!--Überschrift -->
                <h2 class="modal-ueberschrift"> Change Details </h2>
                <br>

                <!--Übersicht der Navigation die bei Vorschritt markiert weden-->

            </div>

            <!--Modal body-->
            <!--Basic-->
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee/changeEmp') }}">
                {{ csrf_field() }}
                <!-- Zeile 2 password Change button -->
                    <div class="row">


                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-line">
                            Password
                        </aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <button type="button" class="form-control  modal-change-button space-line"
                                    data-dismiss="modal"
                                    data-toggle="modal"
                                    data-target="#change-password">Change Password
                            </button>
                        </aside>

                    </div>

                    <div class="placeholder-mobil col-xs-12">
                        <hr class="hr-line">
                    </div>

                    <!-- Zeile 3 -->
                    <div class="row">


                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-cap">
                            Surname
                        </aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <input class="inputmodal form-control  modal-input space-cap" type="text" name="name"
                                   value="{{ $thisEmployee->surname }}">
                        </aside>

                    </div>

                    <!-- Zeile 4 -->
                    <div class="row modal-person">


                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-cap-inner">
                            Forename
                        </aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <input class="inputmodal form-control  modal-input space-cap-inner" type="text"
                                   name="forename"
                                   value="{{ $thisEmployee->forename }}">
                        </aside>

                    </div>

                    <!-- Zeile 5 -->
                    <div class="row">


                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-cap-bottom">
                            E-Mail
                        </aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <input class="inputmodal form-control  modal-input space-cap-bottom" type="text"
                                   name="email"
                                   value="{{ $thisEmployee->email }}">
                        </aside>

                    </div>

                    <div class="placeholder-mobil col-xs-12">
                        <hr class="hr-line">
                    </div>

                    <!-- Modal footer-->
                    <div>
                        <div class="col-xs-12">
                            <input style="display: none;" name="thisDate" value="{{ $week[0]->format('d-m-Y') }}"/>

                            <button type="submit" class="form-control modal-change-button">Change
                            </button>


                        </div>
                    </div>
                </form>


            </div>


        </div>

    </div>
</div>

<!-- changebutton für das Password-Pop-Up im Pop-Up -->
<div id="change-password" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <!-- Close Button oben rechts im Header -->
                <button type="button" class="close" data-dismiss="modal"
                >&times;</button>

                <!-- Überschrift -->
                <h2 class="modal-ueberschrift">Change Password</h2>
            </div>

            <!-- Body-->
            <div class="modal-body">

                <input class="inputmodal form-control space-line " type="password"
                       placeholder="Old password">

                <input class="inputmodal form-control space-line " type="password"
                       placeholder="New password">

                <input class="inputmodal form-control space-line" type="password"
                       placeholder="Confirm new password">


            </div>

            <!-- Modal footer-->
            <div class="modal-footer">
                <div class="col-xs-12">
                    <input style="display: none;" name="thisDate" value="{{ $week[0]->format('d-m-Y') }}"/>
                    <button type="submit" class="form-control  modal-change-button" data-dismiss="modal"
                            data-toggle="modal" onclick="modalChange()">Change
                    </button>


                </div>
            </div>

        </div>
    </div>
</div>