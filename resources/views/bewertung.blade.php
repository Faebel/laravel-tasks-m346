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
                    in form von kurzen Texten aufschreiebn, speichern und löschen kann. Die Webseite ist von überall und jedem gleich nutzbar, einen 
                    Konkreten Produktiven Zweck hat diese webseite leider nicht, da Sie für alle das gleiche anzeigt und jeder Tasks kreiren und löschen kann
                    <br>Diese Webseite und Datenbank wird gehostet auf der Cloudplatform von Microsoft Azure als Web-App mit Datenbank als FaaS. 
                    Der Zugriff erfolg genz normal über einen Webbrowser über die URL: <a href="https://tasks.kallhof-bl.ch/" target="_blank">tasks.kallhof-bl.ch</a>, oder 
                    die "Originale" URL von Azure: <a href="https://m346-tasks-jfg.azurewebsites.net" target="_blank">m346-tasks-jfg.azurewebsites.net</a>. 
                    Dies ist eine eigene Adresse und Domain die Fabian Gysin gehört. der zugriff ist Mit HTTPS verschlüsselt, mit einem gültigen Zertifikat, 
                    automatisch ausgestellt von microsoft Azure.
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
                    dem vorgemachten <a href="https://laravel.com/" target="_blank">Laravel Framework</a> überlassen haben, haben wir gelern, 
                    was PHP ist und wie man es ungefähr verwendet, um eine Webseite zu programieren.
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Selbsbewertung
                </div>
                <div class="panel-body">
                        öldwjaödowjadöwjd
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Credits
                </div>
                <div class="panel-body">
                    Diese Web-App basiert auf das Framework Projekt Laravel für Webseiten mit Datenbankanbindung mit PHP nach einer 
                    <a href="https://learn.microsoft.com/en-us/azure/app-service/tutorial-php-mysql-app" target="_blank">angepassten Version von Microsoft</a>.
                    <div>
                        Erstellt wurde dieses Projekt von Fabian Gysin, Jerome Chesworth & Giorgio Basso.
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
