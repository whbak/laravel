<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/app.css">
        <!-- Styles -->
    </head>
    <body>
    <div class="linkbar">
        <div class="linkcontent">
            <div class="linkleft">
                <a href="/login">Login Loguit</a>
            </div>
            <div class="linkmiddle">
                <div class="linkcenter">
                    <a href="/todo">Todo users</a>
                    <a href="/getall">Get project</a>
                    <a href="/query">Query sorting</a>
                    <a href="/fetch">Fetch row</a>
                    <a href="/like">Like</a>
                </div>
                <div class="linkcenter">
                    <a href="/store">Toevoegen project</a>
                    <a href="/ready">Status new</a>
                    <a href="/all">Wijzigen project</a>
                    <a href="/assign">Delete project</a>
                </div>
                <div class="linkcenter">
                    <a href="/text">Text</a>
                    <a href="/addtext">Text toevoegen</a>
                    <a href="/alltext">Text wijzigen</a>
                    <a href="/todotext">Todo Text lijst</a>
                    <a href="/picktext">Text tonen</a>
                    <a href="/wipetext">Text verwijder</a>
                </div>
            </div>
            <div class="linkright">
            	<a href="/todotext">Todo Text lijst</a>
            </div>
        </div>
    </div>
        <div class="medium smlborder">
            <div class="links">
                <h3>Todo projectlijst selecteer row</h3>
                <img src="{{ $image }}" alt="fetch" title="fetch" width="128" height="128">
            </div>
            <div class="rand">
                <form action="" method="POST">
                @csrf
                    @foreach ($todos as $todo)
                    <div>
                        <label>Kies je query: {{ $todo }}:
                            <input class="adddata" required type="radio" name="query" value="{{ $todo }}">
                        </label>
                    </div><hr>
                    @endforeach
                    <div>
                        <label for="row">Row omschrijving of nummer:</label>
                        <input class="adddata" required type="text" id="row" name="row" placeholder="Tekst of getal">
                    </div><div><hr>
                        <label for="knopje">Gekozen query:</label>
                        <input class="adddata" type="submit" id="knopje" name="knop" value="Tabel ophalen">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
