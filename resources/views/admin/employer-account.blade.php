@extends('admin.layout.employer-start')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/table-account.css')}}">
@endsection

@section('content')

    <section class="fake-body">

        <section class="container">

            <div class="row -col-12">
                <h2 class="modal-ueberschrift">Admin Details</h2>

                <button class="form-control to-right yellow my-account-button" type="submit" data-toggle="modal"
                        data-target="#change-button">
                    Change
                </button>

                <table class="table-account">
                    <tr>
                        <td>Admin ID</td>
                        <td>{{ $admin->id }}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>{{ $admin->password }}</td>
                    </tr>

                    <tr class="table-space">
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Surname</td>
                        <td>{{ $admin->name }}</td>
                    </tr>
                    <tr>
                        <td>Forename</td>
                        <td>{{ $admin->forename }}</td>
                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td>{{ $admin->email }}</td>
                    </tr>

                    <tr class="table-space">
                        <td></td>
                        <td></td>
                    </tr>

                    <tr class="table-space-above">
                        <td>Company name</td>
                        <td>{{ $company->name }}</td>
                    </tr>
                    <tr>
                        <td>Headquarter Address</td>
                        <td>{{ $address->street }} {{ $address->street_nr }}
                            , {{ $address->postcode }} {{ $address->city }}
                            , {{ $address->country }}
                        </td>
                    </tr>
                </table>


                <button class="form-control to-right red my-account-button" data-toggle="modal"
                        data-target="#delete-button-admin">Delete
                </button>


            </div>

        </section>
    </section>

    <!-- Change button Pop-Up -->
    <div id="change-button" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <!-- Modal header-->
                <div class="modal-header">

                    <!-- Close Button oben rechts im Header -->
                    <button type="button" class="close" data-dismiss="modal"
                    >&times;</button>

                    <!-- Überschrift -->
                    <h2 class="modal-ueberschrift">Change Details</h2>
                    <br>

                    <!-- Übersicht der Navigation die bei Vorschritt markiert weden -->

                </div>

                <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body">


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/changeAdmin') }}">
                    {{ csrf_field() }}
                    <!-- Zeile 2 password Change button -->
                        <div class="row">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-line">
                                Password
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <button type="button" class="form-control  modal-change-button space-line yellow"
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
                                       value="{{ $admin->name }}">
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
                                       value="{{ $admin->forename }}">
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
                                       value="{{ $admin->email }}">
                            </aside>

                        </div>

                        <div class="placeholder-mobil col-xs-12">
                            <hr class="hr-line">
                        </div>


                        <!-- Zeile 6 -->
                        <div class="row ">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-cap">
                                Company
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class="inputmodal form-control  modal-input space-cap" type="text" name="company_name"
                                       value="{{ $company->name }}">
                            </aside>

                        </div>

                        <!-- Zeile 7 -->
                        <div class="row">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-cap-inner">
                                Street
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class="inputmodal form-control  modal-input space-cap-inner" type="text" name="street"
                                       value="{{ $address->street }}">
                            </aside>

                        </div>

                        <!-- Zeile 8 -->
                        <div class="row">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-cap-inner">
                                Street Nr,
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class="inputmodal form-control  modal-input space-cap-inner" type="text" name="street_nr"
                                       value="{{ $address->street_nr }}">
                            </aside>

                        </div>

                        <!-- Zeile 9 -->
                        <div class="row">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-cap-inner">
                                Postcode
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class="inputmodal form-control  modal-input space-cap-inner" type="text" name="postcode"
                                       value="{{ $address->postcode }}">
                            </aside>

                        </div>

                        <!-- Zeile 10 -->
                        <div class="row ">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left space-cap-inner">
                                City
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class=" inputmodal form-control  modal-input space-cap-inner" type="text" name="city"
                                       value="{{ $address->city }}">
                            </aside>

                        </div>

                        <!-- Zeile 11 -->
                        <div class="row space-cap-bottom">


                            <!-- links -->
                            <aside class="col-sm-4 col-xs-12  aside-left">
                                Country
                            </aside>

                            <!-- rechts -->
                            <aside class="col-sm-8 col-xs-12  aside-right">
                                <input class="inputmodal form-control  modal-input space-cap-bottom" type="text" name="country"
                                       value="{{ $address->country }}">

                            </aside>

                        </div>

                        <div class="modal-footer">
                            <div class="col-xs-12">

                                <button type="submit" class="form-control  modal-change-button yellow">Change
                                </button>


                            </div>
                        </div>

                    </form>


                </div>

                <!-- Modal footer-->

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

                    <input class="inputmodal form-control space-cap-inner" type="password"
                           placeholder="Old password">

                    <input class="inputmodal form-control space-cap-inner " type="password"
                           placeholder="New password">

                    <input class="inputmodal form-control space-cap-inner " type="password"
                           placeholder="Confirm new password">


                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <button type="button" class="form-control  modal-change-button space-line yellow"
                            data-dismiss="modal"
                            data-toggle="modal"
                            data-target="#change-password">Change Password
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Button der den Account löscht-->
    <div id="delete-button-admin" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <!-- Close Button oben rechts im Header -->
                    <button type="button" class="close" data-dismiss="modal"
                    >&times;</button>

                    <!-- Überschrift -->
                    <h2 class="modal-ueberschrift">Delete Account</h2>
                </div>

                <!-- Body-->
                <div class="modal-body">
                    Do you really want to delete all accounts of your company?
                </div>

                <!-- Modal footer-->
                <div class="modal-footer">
                    <button class="form-control  red modal-bottom" data-toggle="modal"
                            data-target="#delete-button-admin"
                            onclick="deleteAdmin()">
                        Delete
                    </button>
                </div>
            </div>
        </div>

    </div>


@endsection

