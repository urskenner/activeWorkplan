@if( strpos(url()->current(),'/admin/'))
    <!-- +++++++++++++++ MOBILE EMPLOYEE ROW +++++++++++++++ -->
    <tr class="button-hide">
        <td class="button-show"></td>
        <td>{{ $thisEmployee->surname }} </td>
        <td class="no-border-bottom">&nbsp;{{ $thisEmployee->forename }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
@endif


<!-- +++++++++++++++ ALL-DAY +++++++++++++++ -->
<tr class="all-day">

    <td class="button-show">
        @if( strpos(url()->current(),'/admin/')) {{ $thisEmployee->surname . ' ' . $thisEmployee->forename }} @endif
        @if( strpos(url()->current(),'/employee/')) Allday-Events @endif
    </td>
@for ($i = 0; $i < 7; $i++)


    <!-- +++++++++++++++ IF TODAY +++++++++++++++ -->
        @if((new DateTime())->format('Y-m-d') == $week[$i])
            <td class="today">@else
            <td>@endif

            <!-- +++++++++++++++ ALL ALL-DAY EVENT +++++++++++++++ -->
            @foreach($manyAlldayEvent as $oneAlldayEvent)
                @if( (new DateTime($oneAlldayEvent->date))->format('Y-m-d') == $week[$i]
                    && ($oneAlldayEvent->name == 'Work Final' || (( $oneAlldayEvent->name == ("Vacation" || "Illness")) && $oneAlldayEvent->accepted == 1) )
                    && $oneAlldayEvent->employee_id == $thisEmployee->id)


                    <!-- +++++++++++++++ ONE ALL-DAY EVENT +++++++++++++++ -->
                        <div class="drop-btn one-allday-event {{ $oneAlldayEvent->color }}"
                             onclick="openEventOptions('options-final-allday-' + {{ $oneAlldayEvent->id }} + '')"
                             draggable="true"
                             id="event-final-allday-{{ $oneAlldayEvent->id }}">
                            <p class="event-category">{{ $oneAlldayEvent->name }}</p>


                            <!-- If calendar in Admin Planning or Single -->
                        @if( strpos(url()->current(),'/admin/planning'))


                            <!-- +++++++++++++++ OPTIONS VACATION ILLNESS ACCEPT +++++++++++++++ -->
                                @if ( ($oneAlldayEvent->name == ("Vacation" || "Illness" )) && $oneAlldayEvent->accepted == 0)
                                    <div class="event-dropdown-content options-final-allday-{{ $oneAlldayEvent->id }}">
                                        <form method="POST" action="{{ url('admin/acceptEvent') }}"> {{ csrf_field() }}
                                            <input style="display: none;" name="thisUrl" value="{{ url()->current() }}">
                                            <button class="green-button" name="eventId" value="{{ $oneAlldayEvent->id }}">OK</button>
                                        </form>
                                    </div>
                                @endif


                            <!-- +++++++++++++++ OPTIONS VACATION ILLNESS NOT-ACCEPT +++++++++++++++ -->
                                @if ( ($oneAlldayEvent->name == ( "Vacation" || "Illness" )) && $oneAlldayEvent->accepted == 1)
                                    <div class="event-dropdown-content options-final-allday-{{ $oneAlldayEvent->id }}">
                                        <form method="POST" action="{{ url('admin/notAcceptEvent') }}"> {{ csrf_field() }}
                                            <input style="display: none;" name="thisUrl" value="{{ url()->current() }}">
                                            <button class="red-button" name="eventId" value="{{ $oneAlldayEvent->id }}">-</button>
                                        </form>
                                    </div>
                                @endif
                            @endif


                        </div>
                    @endif
                @endforeach


            </td>
            @endfor
</tr>