{{--Change Modal--}}
<div id="change" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!-- Modal header-->
            <div class="modal-header">

                <!-- Close Button oben rechts im Header -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- Überschrift -->
                <h2 class="modal-ueberschrift">Change Employee</h2>
                <br>

                <!-- Übersicht der Navigation die bei Vorschritt markiert weden -->

            </div>

            <!-- Modal body-->
            <!-- Basic-->
            <form class="form-horizontal" method="POST" action="{{ url('/admin/changeEmp') }}"> {{ csrf_field() }}
                <div class="modal-body">

                    <!-- Zeile 1 password Change button -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-line">Password</aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <button type="button" class="form-control yellow-button space-line" data-dismiss="modal" data-toggle="modal" data-target="#change-password">Change Password</button>
                        </aside>

                    </div>

                    <div class="placeholder-mobil col-xs-12">
                        <hr class="hr-line">
                    </div>


                    <!-- Zeile 2 Surname -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12 aside-left space-line">Employee</aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input class="inputmodal form-control  modal-input space-cap" type="text" name="name" placeholder="Name" value="{{ $thisEmployee->surname }}">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </aside>

                    </div>

                    <!-- Zeile 3 Forename -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right {{ $errors->has('forename') ? ' has-error' : '' }}">
                            <input class="inputmodal form-control  modal-input space-cap-bottom" type="text" name="forename" placeholder="Forename" value="{{ $thisEmployee->forename }}">
                            @if ($errors->has('forename'))
                                <span class="help-block"><strong>{{ $errors->first('forename') }}</strong></span>
                            @endif
                        </aside>

                    </div>

                    <!-- Zeile 4 Email -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right">
                            <button type="button" class="form-control yellow-button space-line" data-dismiss="modal" data-toggle="modal" data-target="#change-email">Change Email</button>
                        </aside>
                    </div>

                    <div class="placeholder-mobil col-xs-12">
                        <hr class="hr-line">
                    </div>

                    <!-- Zeile 5 Agreement -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-line">Contract</aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">

                            <p>limitted / unlimitted aus DB lesen!</p>
                            <div class="select-parent">
                                <div class="select-div form-control" draggable="true">
                                    <div class="select-text">limitted</div>
                                    <input style="display: none;" class="select-text" name="agreement" value="Overwrite"/>
                                    <div id="select-arrow" class="arrow-down"></div>
                                </div>

                                <div class="select-hidden">
                                    <p class="select-p">limitted</p>
                                    <p class="select-p">unlimitted</p>
                                </div>
                            </div>

                        </aside>

                    </div>

                    <!-- Zeile 6 Role -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right {{ $errors->has('role') ? ' has-error' : '' }}">
                            <input class="inputmodal form-control  modal-input space-cap-inner" type="text" name="role" placeholder="Role" value="{{ $thisEmployee->role }}">
                            @if ($errors->has('role'))
                                <span class="help-block"><strong>{{ $errors->first('role') }}</strong></span>
                            @endif
                        </aside>


                    </div>

                    <!-- Zeile 7 Classification -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">

                            <p>Classification aus DB lesen!</p>
                            <div class="select-parent">
                                <div class="select-div form-control" draggable="true">
                                    <div class="select-text">Full Time</div>
                                    <input style="display: none;" class="select-text" name="classification" value="Overwrite"/>
                                    <div id="select-arrow" class="arrow-down"></div>
                                </div>

                                <div class="select-hidden">
                                    <p class="select-p">Full Time</p>
                                    <p class="select-p">Part Time</p>
                                    <p class="select-p">Student Employee</p>
                                    <p class="select-p">Temporary Help</p>
                                </div>
                            </div>
                        </aside>

                    </div>

                    <!-- Zeile 8 hours -->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-sm-8 col-xs-12  aside-right {{ $errors->has('working_hours') ? ' has-error' : '' }}">
                            <input class="inputmodal form-control  modal-input space-cap-bottom" type="text" name="working_hours" placeholder="Working hours" value="{{ $thisEmployee->working_hours }}">
                            @if ($errors->has('working_hours'))
                                <span class="help-block"><strong>{{ $errors->first('working_hours') }}</strong></span>
                            @endif
                        </aside>

                    </div>

                    <div class="placeholder-mobil col-xs-12">
                        <hr class="hr-line">
                    </div>

                    <!-- Zeile 9 Company-->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-sm-4 col-xs-12  aside-left space-line">Company</aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p class="inputmodal form-control">{{ $company->name }}</p>
                        </aside>

                    </div>

                    <!-- Zeile 10 RetailStore-->
                    <div class="row">

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4 "></aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <div class="select-parent">
                                <div class="select-div form-control" draggable="true">
                                    <div class="select-text">{{ $thisRetailStore->name }}</div>
                                    <input style="display: none;" class="select-text" name="retail_store_value" value="{{ $thisRetailStore->name }}"/>
                                    <div id="select-arrow" class="arrow-down"></div>
                                </div>

                                <div class="select-hidden">
                                    @foreach($allRetailStores as $retailStore)
                                        <p class="select-p">{{ $retailStore->name }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </aside>

                    </div>
                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <input style="display: none;" name="thisDate" value="{{ $week[0] }}"/>
                    <button class="form-control yellow-button" type="submit" value="{{ $thisEmployee->id }}" name="thisEmployeeId">Change</button>
                </div>
            </form>
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
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- Überschrift -->
                <h2 class="modal-ueberschrift">Change Password</h2>
            </div>

            <form class="form-horizontal" method="POST" action="{{ url('/admin/changePasswordEmp') }}"> {{ csrf_field() }}
            <!-- Body-->
                <div class="modal-body">

                    <!-- password1-->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <!-- password1 ende-->

                    <!-- password2-->
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                        <div class="col-xs-12">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <!-- password1 ende-->
                </div>

                <!-- Modal footer-->
                <div class="modal-footer">

                    <input style="display: none;" name="thisDate" value="{{ $week[0] }}"/>
                    <button type="submit" class="form-control yellow-button space-line" value="{{ $thisEmployee->id }}" name="thisEmployeeId">Change Password</button>
                </div>

            </form>
        </div>
    </div>

</div>


<div id="change-email" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">

                <!-- Close Button oben rechts im Header -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- Überschrift -->
                <h2 class="modal-ueberschrift">Change E-Mail</h2>
            </div>

            <form class="form-horizontal" method="POST" action="{{ url('/admin/changeEmailEmp') }}"> {{ csrf_field() }}

            <!-- Body-->
                <div class="modal-body {{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input class="inputmodal form-control  modal-input space-cap-bottom" type="text" name="email" value="{{ $thisEmployee->email }}">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>


                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <input style="display: none;" name="thisDate" value="{{ $week[0] }}"/>
                    <button type="submit" class="form-control yellow-button space-line" value="{{ $thisEmployee->id }}" name="thisEmployeeId">Change Email</button>
                </div>
            </form>
        </div>
    </div>

</div>