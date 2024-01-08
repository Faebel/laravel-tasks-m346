@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    Das Resultat
                </div>
                <div class="panel-body">
                    Das Resultat unseres Projekts ist eine Webseite, auf der man sich verschiedene "Tasks" oder Aufgaben, 
                    in form von kurzen Texten aufschreiben, speichern und löschen kann. Die Webseite ist von überall und jedem gleich nutzbar, einen 
                    konkreten, produktiven Zweck hat diese Webseite leider nicht, da sie für Benutzer alle das gleiche anzeigt und jeder Tasks kreiren und löschen kann.
                    <br>Diese Webseite und Datenbank wird gehostet auf der Cloudplatform von Microsoft Azure als Web-App mit Datenbank als FaaS. 
                    Der Zugriff erfolgt wie auf jede andere Webseite über einen Webbrowser über die URL: 
                    <a href="https://tasks.kallhof-bl.ch/" target="_blank">tasks.kallhof-bl.ch</a>, oder 
                    die "Originale" URL von Azure: <a href="https://m346-tasks-jfg.azurewebsites.net" target="_blank">m346-tasks-jfg.azurewebsites.net</a>. 
                    Die erste Adresse ist eine eigene Subdomain die Fabian Gysin zu seiner bereits vorhandenen, eigenen Domain Hinzugefügt hatte. 
                    Der zugriff ist Mit HTTPS verschlüsselt, mit einem gültigen Zertifikat, welches automatisch von microsoft Azure ausgestellt wurde.
                    <br>Der Sourcecode ist <a href="https://github.com/Faebel/laravel-tasks-m346" target="_blank">hier</a> , in einem Github Repository zu finden.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Projektauswahl
                </div>
                <div class="panel-body">
                    Bei der Projektsuche war es uns wichtig, dass wir ein Projekt auswählen, welches nicht zu leicht, aber auch nicht zu schwer für unsere bisherige Kenntnis ist. 
                    Wir haben uns in unserer Gruppe zusammengesetzt und Ideen für ein mögliches Abschlussprojekt gesucht. 
                    In unserer Gruppe haben wir Brainstorming betrieben und viele verschiedene Ideen gesammelt. 
                    Danach haben wir uns miteinander abgesprochen, bei welchen Projektideen eine Umsetzung möglich ist und auf welche wir Lust hatten.
                    Mit dem Ausschlussverfahren haben wir die Anzahl Ideen auf 3 minimiert. Zusammen haben wir uns letztendlich für unser jetziges Projekt 
                    entschieden, eine Webapp mit Anbindung an eine Datenbank zu erstellen.
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    Erfolge der Projekts
                </div>
                <div class="panel-body">
                    Die Arbeitsaufteilung und die Zusammenarbeit hat bei uns in der Gruppe sehr gut funktioniert. Die Zeiteinteilung bei unserem 
                    Projekt hat auch sehr gut funktioniert und es gab keine Probleme, da wir früh angefangen haben unsere Ideen umzusetzen. 
                    Auch das Deployment über GitHub hat immer sehr gut und zuverlässig funktioniert. 
                    Die Änderungen wurden direkt übernommen und das Ergebnis konnte direkt auf der Webseite angeschaut werden. 
                    So konnten wir immer wieder kleine Anpassungen machen und schauen, ob es funktioniert hat und ob es uns gefällt. 
                    So konnten wir schnell und effektiv an unserem Projekt arbeiten.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Schwierigkeiten
                </div>
                <div class="panel-body">
                    Bei der Umsetzung unseres Projekts gab es immer wieder einzelne Schwierigkeiten. Wir konnten diese jedoch immer zusammen als Team 
                    und mithilfe vom Internet und KI-Chatbots lösen. 
                    Das Framework in Azure zum Funktionieren zu bringen, bereitete uns Schwierigkeiten, 
                    da bei der Umsetzung nach der Anleitung von Microsoft einige Fehler aufgetaucht sind. Wir mussten eigenständig die Fehler suchen und diese 
                    korrigieren, was meistens viel Zeit in Anspruch genommen hat.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Was wir Lernten
                </div>
                <div class="panel-body">
                    Wir haben den Umgang mit Microsoft Azure kennengelernt und konnten anschliessend auch ein eigenständiges Projekt daraus machen. 
                    Da wir uns noch nicht sehr gut mit der Cloud und Azure auseinandergesetzt haben, konnten wir einiges Neues lernen. 
                    In diesem Modul haben wir gelernt, wie man mit GitHub eine Webapp auf der Azure Cloud deployen kann und wie man diese Webapp mit 
                    einer Datenbank verbinden kann, damit die Tasks auch nach dem Neuladen der Seite bestehen bleiben. Auch wenn wir das meiste des Programmierens 
                    dem vorgemachten <a href="https://laravel.com/" target="_blank">Laravel Framework</a> überlassen haben, haben wir gelernt, 
                    was PHP ist und wie man es ungefähr verwendet, um eine Webseite zu programmieren.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Selbsbewertung
                </div>
                <div class="panel-body">
                    Das Projekt, an dem wir gearbeitet haben, hat uns eine Menge an neuen Erfahrungen und Kenntnissen vermittelt. 
                    Mit Stolz würden wir unsere Leistung und das Endergebnis mit einer Note von 5.9 bewerten. 
                    <br>Dieses Bewertungsergebnis haben wir gewählt, weil wir doch sehr zufrieden sind mit unseren Errungenschaften, wir aber denken, 
                    dass es noch einige Dinge gäbe, die man an der Webseite anpassen und verbessern könnte. Diese Note spiegelt 
                    unsere Zufriedenheit mit dem erreichten Ergebnis wider, welches sogar dazu geführt hat, dass wir diese Selbstbewertung und Projektbeschreibung wider
                    auf dieser Webseite veröffentlichen. Im Verlauf des Projekts haben wir nicht nur gelernt, wie man eine Web-App als 
                    Function-as-a-Service (FaaS) in der Azure-Umgebung bereitstellt, sondern auch eigenständig herausgefunden, wie die Programmiersprache 
                    PHP mit einer Datenbank interagiert und wie wir diese Daten anschliessend auf der Webseite anzeigen können. Diese Lernerfahrungen haben 
                    unser Verständnis für komplexe Web-Entwicklungskonzepte erweitert und uns befähigt, praktische Fähigkeiten zu erlernen, die über den 
                    Unterricht hinausgehen.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Credits
                </div>
                <div class="panel-body">
                    Diese Web-App basiert auf das Framework Projekt Laravel für Webseiten mit Datenbankanbindung mit PHP nach einer 
                    <a href="https://learn.microsoft.com/en-us/azure/app-service/tutorial-php-mysql-app" target="_blank">angepassten Version von Microsoft</a>.
                    <br>Erstellt wurde dieses Projekt von 
                    <a href="mailto:fabian.gysin@bbzbl-it.ch">Fabian Gysin</a>, 
                    <a href="jerome.chesworth@bbzbl-it.ch">Jerome Chesworth</a> & 
                    <a href="giorgio.basso@bbzbl-it.ch">Giorgio Basso</a>.
                </div>
            </div>

        </div>
    </div>
@endsection
