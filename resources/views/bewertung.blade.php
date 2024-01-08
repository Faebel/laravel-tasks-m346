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
                    Konkreten Produktiven Zweck hat diese webseite leider nicht, da Sie für alle das gleiche anzeigt und jeder Tasks kreiren und löschen kann.
                    <br>Diese Webseite und Datenbank wird gehostet auf der Cloudplatform von Microsoft Azure als Web-App mit Datenbank als FaaS. 
                    Der Zugriff erfolgt wie auf jede andere Webseite über einen Webbrowser über die URL: 
                    <a href="https://tasks.kallhof-bl.ch/" target="_blank">tasks.kallhof-bl.ch</a>, oder 
                    die "Originale" URL von Azure: <a href="https://m346-tasks-jfg.azurewebsites.net" target="_blank">m346-tasks-jfg.azurewebsites.net</a>. 
                    Die erste Adresse ist eine eigene subdomain und Domain die Fabian Gysin gehört. der zugriff ist Mit HTTPS verschlüsselt, mit einem gültigen Zertifikat, 
                    automatisch ausgestellt von microsoft Azure.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Projektauswahl
                </div>
                <div class="panel-body">
                    Bei der Projekt suche war uns wichtig, dass wir  ein Projekt auswählen welches nicht zu leicht aber auch nicht zu schwer für unsere bisherige Kenntnis ist. 
                    Wir haben uns in unserer Gruppe zusammengesetzt und Ideen für ein mögliches Abschlussprojekt gesucht. 
                    In unserer Gruppe haben wir Brainstorming betrieben und viele verschiedene Ideen gesammelt. 
                    Danach haben wir uns mit einander abgesprochen bei welchen Projektideen eine Umsetzung möglich ist. 
                    Mit dem Ausschlussverfahren haben wir die Anzahl Ideen auf 3 minimiert. Zusammen haben wir uns letztendlich für unser jetzige Projekt 
                    entschieden eine Webapp zu erstellen.
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    Erfolge der Projekts
                </div>
                <div class="panel-body">
                    Die Arbeitsaufteilung und die Zusammenarbeit hat bei unserer Gruppe sehr gut funktioniert. Die Zeiteinteilung bei unserem 
                    Projekt hat gut funktioniert und es gab keine Probleme. Das Deployment über GitHub hat immer gut funktioniert. 
                    Die Änderungen wurden direkt übernommen und das Ergebnis konnte direkt auf der Webseite angeschaut werden. 
                    So konnten wir immer wieder kleine Anpassungen machen und schauen ob es funktioniert hat und ob es uns gefällt. 
                    So konnten wir schnell und effektiv an unserem Projekt arbeiten.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Schwierigkeiten
                </div>
                <div class="panel-body">
                    Bei der Umsetzung unseres Projekt, gab es immer wieder einzelne Schwierigkeiten. Wir konnten diese jedoch immer zusammen als Team 
                    und mit dem Internet lösen. Die Zusammenarbeit über GitHub hat nicht so gut funktioniert, da man nicht zusammen am Projekt arbeiten konnten. 
                    Es brauchte einen Pull Request um Änderungen vor zu nehmen. Das Framework in Azure zum funktionieren zu bringen hatte uns Schwierigkeiten bereitet. 
                    Da bei der Umsetzung nach der Anleitung von Microsoft einige Fehler aufgetaucht sind. Wir mussten denn Fehler suchen und 
                    korrigieren was manchmal viel Zeit in Anspruch genommen hat.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Was wir Lernten
                </div>
                <div class="panel-body">
                    Wir haben den Umgang mit Microsoft Azure kennengelernt und konnten anschliessend auch ein eigenständiges Projekt daraus machen. 
                    Da wir uns noch nicht sehr gut mit der Cloud und Azure auseinandergesetzt haben, konnten wir einiges Neues lernen. 
                    In diesem Modul haben wir gelernt, wie man mit GitHub eine Webapp auf der Azure Cloud deployen kann und wie man diese Web-App mit 
                    einer Datenbank verbinden kann, damit die Tasks auch nach dem Neuladen der Seite bestehen bleiben. Auch wenn wir das meiste des Programieren 
                    dem vorgemachten <a href="https://laravel.com/" target="_blank">Laravel Framework</a> überlassen haben, haben wir gelernt, 
                    was PHP ist und wie man es ungefähr verwendet, um eine Webseite zu programieren.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Selbsbewertung
                </div>
                <div class="panel-body">
                    Wir würden uns für die Ausführung und das Endresultat dieses Projektes die Note 5.9 geben.
                    <br>Dies weil wir mit dem Endresultat sehr zufrieden sind und wir Sogar diesen Text zur Selbstbewertung auf der Eigenen Webseite schreiben. 
                    Aus dem Unterricht haben wir gelernt, wie man eine Web-App als FaaS in Azure Deployen kann. Dazu haben wir noch noch selber lernen müssen, 
                    wie die Programiersprache PHP mit der Datenbank komuniziert und dessen Daten auf der Webseite anzeigen kann.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Credits
                </div>
                <div class="panel-body">
                    Diese Web-App basiert auf das Framework Projekt Laravel für Webseiten mit Datenbankanbindung mit PHP nach einer 
                    <a href="https://learn.microsoft.com/en-us/azure/app-service/tutorial-php-mysql-app" target="_blank">angepassten Version von Microsoft</a>.
                    <br>Erstellt wurde dieses Projekt von Fabian Gysin, Jerome Chesworth & Giorgio Basso.
                </div>
            </div>

        </div>
    </div>
@endsection
