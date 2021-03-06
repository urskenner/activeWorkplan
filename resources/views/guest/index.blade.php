@extends('guest.layout.start')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/guest/index.css')}}">
@endsection

@section('content')
    <!-- Body -->

    <div class="backgroundheadindex">


        <aside class="col-xs-12 col-sm-6 index-image-aside my-hidden-small">
            <img class="my-center index-image-logo" src="{{asset('/img/logo.gif')}}" alt="Bild">
        </aside>


        <aside class="col-xs-12 col-sm-6 index-image-aside">
            <form class="my-center width-80">
                <h4 class="my-horizontal-center">Sign up</h4>
                <p><input class="form-control to-right modal-input full-opacity" id="sign-up-email" type="email" placeholder="Email"></p>
                <p><input class="form-control to-right modal-input full-opacity" id="sign-up-password1" type="password" placeholder="Password"></p>
                <p><input class="form-control to-right modal-input full-opacity" id="sign-up-password2" type="password" placeholder="Confirm Password"></p>
                <button class="form-control green-button full-opacity" type="button" onclick="signupPicture()" data-toggle="modal" data-target="#signupbutton">Sign up</button>
            </form>
        </aside>
    </div>


    <!-- section2 -->
    <div class="fake-body"> <!-- class="container" wegen grauen boxen abstand entfernt -->

        <!-- Reihe 1 -->
        <div class="row article">
            <!-- wenn middle breite: Quasi abstand links -->
            <aside class="col-md-2"></aside>

            <aside class="col-xs-12 col-md-8">
                <br>

                <p>
                    Haben Sie als Arbeitgeber keine Lust mehr stundenlang am Einsatzplan zu feilen, nur um ihn zig mal umwerfen zu
                    müssen? Weil immer wieder ein Mitarbeiter mit einem neuen Termin ankommt, der berücksichtigt werden soll?
                    Überlassen Sie die Arbeit doch Ihren Mitarbeitern!
                    Sie übernehmen die Rolle des Administrators, erstellen den endgültogen Arbeitsplan,
                    müssen sich jedoch keine Sorgen mehr um stressige änderungen der vorgeschlagenen Arbeitszeiten mehr machen.
                    Wie das geht?
                </p>
                <p>
                    activeWorkplan macht´s möglich:
                    Arbeiten kann Spaß machen
                </p>
            </aside>

            <!-- wenn middle breite: Quasi abstand rechts -->
            <aside class="col-md-2"></aside>
        </div>

        <!-- Reihe 2 -->
        <div class="row grey article">


            <!-- rechts / oben; push damit colum nach oben geht -->
            <aside class="col-sm-6 col-sm-push-6">
                <h4>Einsatzplangestaltung mal anders</h4>
                <p>Bei activeWorkplan liegt das Arbeitszeitmanagement nicht nur bei dem Arbeitgeber. Wir bieten für jeden
                    Angestellten eine leichte, intuitive und ansprechende Möglichkeit sich aktiv am Arbeitsplan zu beteiligen.
                    Jeder Mitarbeiter kann bei der Erstellung eines Events zwischen verschiedenen vordefinierten Kategorien wählen.
                    Dazu gehören vorgeschlagene Arbeitszeiten, Seminare, eingeplante Zeit um für sein Studium zu lernen und mehr.
                    Bei Krankheit und Urlaub müssen Sie als Arbeitsgeber die Events sogar genehmigen bzw. bestätigen.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <!-- links / unten; Pull damit colum nach oben geht-->
            <aside class="col-sm-6 col-sm-pull-6">
                <img class="bodyimage" src="{{asset('img/index/store_grey.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 3 -->
        <div class="row article">

            <!--  Links -->
            <aside class="col-sm-6">
                <h4>Vergangenheit, Gegenwart und Zukunft</h4>
                <p>Arbeitszeiten und Termine auf Schmierzettel aufschreiben, die man sowieso verliert? Nicht mit
                    activeWorkplan. Wir bieten einen elektronischen Kalender, der sämtliche eingetragenen Arbeitszeiten
                    speichert. Diese sind bis zu einem Jahr rückwirkend einsehbar. Sie als Arbeitsgeber haben selbstverständlich
                    die kompletten Kalender der Mitarbeiter sowie die fertigen Einsatzpläne zugriffsbereit.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <!-- rechts -->
            <aside class="col-sm-6">
                <img class="bodyimage" src="{{asset('img/index/navigation_vor_zurueck_white.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 4 -->
        <div class="row grey article">

            <aside class="col-sm-6 col-sm-push-6">
                <h4>Selbsteinteilung der Arbeitszeit</h4>
                <p>Wegen jedem privaten Termin dem Chef hinterherrennen gehört der Vergangenheit an. Einfach selbst die
                    gewünschten Arbeitszeiten oder Fehlzeiten in Ihrem Terminplan rechtzeitig eintragen und schon sind sie
                    ihrem organisierten Alltag einen Schritt näher.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <aside class="col-sm-6 col-sm-pull-6">
                <img class="bodyimage" src="{{asset('img/index/overview_grey.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 5 -->
        <div class="row article">

            <!--  Links -->
            <aside class="col-sm-6">
                <h4>Flexibel und Transparent</h4>
                <p>Vorbei sind die Zeiten in denen man in einem starren Planungssystem ohne Mitspracherecht sein
                    Arbeitsleben fristet. Durch aktive Teilnahme des gesamten Teams am Planungsprozess, verteilt sich die
                    Erstellung des Einsatzplanes auf alle Mitarbeiter. Das gesamte Team arbeitet zusammen an einem für alle
                    fairen und optimalen Arbeitsplan.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <!-- rechts -->
            <aside class="col-sm-6">
                <img class="bodyimage" src="{{asset('img/index/store_search_white.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 6 -->
        <div class="row grey article">

            <aside class="col-sm-6 col-sm-push-6">
                <h4>Mobil oder Desktop</h4>
                <p>Sie haben keinen PC oder Laptop zu Hause? Kein Problem, denn activeWorkplan lässt sich auch von Ihrem
                    Smartphone oder Tablet bedienen. Wo immer sie sind und genau dann, wenn Sie es brauchen.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <aside class="col-sm-6 col-sm-pull-6">
                <img class="bodyimage" src="{{asset('img/index/mobil_oder_desktop_grey.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 7 -->
        <div class="row article">

            <!--  Links -->
            <aside class="col-sm-6">
                <h4>Alles bis ins Detail.
                </h4>
                <p>Sie haben nicht nur die Möglichkeit die Mitarbeiter zu den einzelnen Stores hinzuzufügen,
                    sondern können zusätzlich auch Vertragsinformationen hinter dem Account des Bediensteten festlegen.
                    Komfortabel lässt sich jede Einstellung nach belieben ändern. Beispielsweise darf ein Mitarbeiter ab sofort
                    an die Kasse und bekommt dadurch eine neue Rolle zugewiesen. Mit dieser kann er bei der Einsatzplanung
                    unter neuen Aspekten berücksichtigt werden.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <!-- rechts -->
            <aside class="col-sm-6">
                <img class="bodyimage" src="{{asset('img/index/employee_details_white.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 8 -->
        <div class="row grey article">

            <!-- links -->
            <aside class="col-sm-6 col-sm-push-6">
                <h4>Registrierung leicht gemacht!
                </h4>
                <p>Bei aktiveWorkplan genügt es, wenn sich der Planer registriert. Danach ist es für diesen durch einfache
                    und intuitive Bedienung möglich, beliebig viele Mitarbeiter und Filialen zu registieren, ohne
                    dass diese einen Finger rühren müssen.
                </p>
                <a class="form-control blue-button more-info-button" href="feature">More</a>
            </aside>

            <!--  rechts -->
            <aside class="col-sm-6 col-sm-pull-6">
                <img class="bodyimage" src="{{asset('img/index/sign_up.png')}}" alt="Bild">
            </aside>
        </div>

        <!-- Reihe 9 -->
        <div class="row article">

            <aside class="col-xs-12 col-md-8 col-md-offset-2">
                <h4 class="my-horizontal-center">Haben wir Sie überzeugt?
                </h4>
                <p class="my-horizontal-center">
                    Dann legen Sie los und sparen eine Menge Zeit und Nerven! Jetzt kostenlos registrieren. Schnell Angaben
                    zum Unternehmen ausfüllen, Mitarbeiter und Geschäftsstellen hinzufügen und los geht's. Voller
                    Funktionsumfang und alles ohne Zahlungsangaben.
                </p>

                <aside class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <button class="form-control to-right green-button" type="button" data-toggle="modal"
                            data-target="#signupbutton" onclick="nextStep(1)">Kostenlos registrieren
                    </button>
                </aside>

            </aside>

            <!-- wenn middle breite: Quasi abstand rechts -->
            <aside class="col-md-2"></aside>
        </div>
    </div>

    <div class="row">

        <div style="float: left; margin: 10px;">

            <div class="fb-like" data-href="https://www.apple.com"
                 data-width="100" data-layout="button" data-action="like"
                 data-size="small" data-show-faces="true"
                 data-share="true">
            </div>
            <!-- facebook -->
            <script>
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </div>

        <div style="float: left; margin: 12px;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.apple.com" data-text="Apple">Tweet</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
        </div>

    </div>

@endsection