@extends('admin.layout.start')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/side-bar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/global/table-account.css')}}">


@endsection

@section('content')

    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <ul>
                @foreach($errors -> all() as $error)
                    <li style="margin-left: 10px">{{$error}}</li>
                @endforeach

            </ul>
        </div>
    @endif


    {{-- Meldung für den Fall das Erfolgreich geändert wurde --}}
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {!! session('flash_notification.message') !!}
        </div>
    @endif

    @if($amountOfRetailStores != 0)

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li style="margin-left: 10px">{{$error}}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <div class="fake-body container">

            <br>
            <aside class="col-xs-12 col-sm-3 side-bar">
                @include('admin.includes.side-bar')
            </aside>

            <aside class="col-xs-12 col-sm-9 my-right-side">

                <!-- Überschrift -->
                <h2 class="header">{{ $thisRetailStore->name }}</h2>

            @include('includes.calendar.navigation')

                <div class="col-xs-12 space_emp"></div>

            <!-- +++++++++++++++ PROPOSAL ++++++++++++++++++++ -->
                <div class="col-xs-12 table-head-store">
                    <p class="table-head-a">Individual proposals of Employees</p>
                </div>

                <table class="col-xs-12 calendar-days-all-emp">

                @include('includes.calendar.tr-1-week-date')
                @include('includes.calendar.tr-2-week-days')

                <!-- +++++++++++++++ EMPLOYEE ROW +++++++++++++++ -->
                    @foreach($allEmployees as $thisEmployee)
                        @if($thisEmployee->retail_store_id == $thisRetailStore->id)

                            @include('includes.calendar.tr-3a-proposal-all-day')
                            @include('includes.calendar.tr-3b-proposal-time-events')

                        @endif
                    @endforeach
                </table>

                <div class="col-xs-12 space_emp"></div>

                <!-- +++++++++++++++ WORKTIME FIX ++++++++++++++++++++ -->
                <div class="col-xs-12 table-head-store">
                    <p class="table-head-a">Final Workplan</p>
                </div>
                <table class="col-xs-12 calendar-days-all-emp">

                @include('includes.calendar.tr-1-week-date')
                @include('includes.calendar.tr-2-week-days')


                <!-- +++++++++++++++ EMPLOYEE ROW +++++++++++++++ -->
                    @foreach($allEmployees as $thisEmployee)
                        @if($thisEmployee->retail_store_id == $thisRetailStore->id)

                            @include('includes.calendar.tr-4a-final-all-day')
                            @include('includes.calendar.tr-4b-final-time-events')

                        @endif
                    @endforeach
                </table>

                <div class="col-xs-12 space_emp"></div>

                <!-- Change Button -->
                <button class="set-right form-control yellow-button" data-toggle="modal" data-target="#change-store">Change</button>

                <div class="col-xs-12 space_emp"></div>


                <!-- +++++++++++++++ RETAIL STORE DETAILS +++++++++++++++ -->
                <table class="col-xs-12 table-account">
                    <tr>
                        <td>Retail Store Name</td>
                        <td>{{ $thisRetailStore->name }}</td>
                    </tr>
                    <tr>
                        <td>Retail Store Address</td>
                        <td>{{ $addressRetailStore->street . ' ' . $addressRetailStore->street_nr . ', ' . $addressRetailStore->postcode . ' ' . $addressRetailStore->city . ', ' . $addressRetailStore->country }}
                        </td>
                    </tr>
                    <tr>
                        <td>Amount of Employees</td>
                        <td>{{ $countEmployees }}</td>
                    </tr>
                </table>

                <div class="col-xs-12 space_emp"></div>

                <!-- Delete Button -->
                <button class="set-right form-control red-button" data-toggle="modal" type="submit" data-target="#delete-store">Delete</button>
            </aside>

            <div class="col-xs-12 space_emp"></div>

        </div>

        @include('includes.calendar.modal-event-admin-add-final')
        @include('includes.calendar.modal-event-admin-change-final')
        @include('admin.includes.change-store')
        @include('admin.includes.delete-store')

    @endif
@endsection


@section('js')
    <script src="{{ asset('/js/admin/side-bar.js') }}"></script>
    <script src="{{ asset('/js/global/calendar.js')}}"></script>
@endsection

