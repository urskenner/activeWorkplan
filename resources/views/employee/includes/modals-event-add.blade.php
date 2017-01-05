<!-- Button der Event hinzufügt -->
<div id="add-button-event" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!-- Modal header-->
            <div class="modal-header">

                <!-- Close Button oben rechts im Header -->
                <button type="button" class="close" data-dismiss="modal"
                >&times;</button>

                <!-- Überschrift -->
                <h2 class="modal-ueberschrift">Add Event</h2>
                <br>

                <!-- Übersicht der Navigation die bei Vorschritt markiert weden -->

            </div>
            <form type="form" method="POST" action="{{ url('/emploee/eventCreate') }}">
            {{ csrf_field() }}

            <!-- Modal body-->
                <!-- Basic-->
                <div class="modal-body">

                    <!-- Zeile 1 -->
                    <article class="row">
                        <h2 style="display: none">fakeheading</h2>

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4 aside-left-add">Type</aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p><input class="inputmodal form-control" type="text" name="type"
                                      placeholder="Type (Allday or Time-Event)">
                        </aside>

                    </article>

                    <!-- Zeile 2 -->
                    <article class="row">
                        <h2 style="display: none">fakeheading</h2>

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p><input class="inputmodal form-control" type="text" name="category"
                                      placeholder="Category">
                        </aside>

                    </article>

                    <!-- Zeile 3 -->
                    <article class="row">
                        <h2 style="display: none">fakeheading</h2>

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4 aside-left-add">Time</aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p><input class=" inputmodal form-control space-cap" type="text" name="date"
                                      placeholder="Date">
                            </p>
                        </aside>

                    </article>

                    <!-- Zeile 4 -->
                    <article class="row">
                        <h2 style="display: none">fakeheading</h2>

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p><input class="inputmodal form-control space-cap" type="text"
                                      name="from" placeholder="From ">
                            </p>
                        </aside>

                    </article>

                    <!-- Zeile 5 -->
                    <article class="row">
                        <h2 style="display: none">fakeheading</h2>

                        <!-- links -->
                        <aside class="col-xs-12 col-sm-4"></aside>

                        <!-- rechts -->
                        <aside class="col-xs-12 col-sm-8 aside-right">
                            <p><input class="inputmodal form-control space-cap" type="text" name="to"
                                      placeholder="To">
                            </p>
                        </aside>

                    </article>

                </div>
                <!-- Modal footer-->
                <div class="modal-footer">
                    <button type="submit" class="form-control to-right add-button" data-toggle="modal"
                            data-target="#add-button-store" onclick="addstore()">Add
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>