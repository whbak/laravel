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
        <div class="large smlborder">
            <div class="links">
                <h3>Text werkzaamheden verwijderen</h3>
                <img src="{{ $image }}" alt="laptop user" title="laptop user" width="128" height="128">
            </div>
            <div class="rand">
                <table>
                    <tr>
                        <th colspan="3">todo</th>
                        <th colspan="3">text</th>
                    </tr>
                    <tr>
                        <th>user</th>
                        <th>todo</th>
                        <th>status</th>
                        <th>text id</th>
                        <th>werk</th>
                        <th>laatste actie</th>
                    </tr>
                    @foreach ($texts as $text)
                    <tr>
                        <td>{{ $text->username }}</td>
                        <td>{{ $text->todo }}</td>
                        <td>{{ $text->status }}</td>
                        <td>{{ $text->id }}</td>
                        <td>{{ $text->werkzaamheden }}</td>
                        <td>{{ $text->last_action }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="links">
                <h3>Kies je te verwijderen text</h3>
            </div>
            <div class="rand">
                <form action="/checktext" method="GET">
                @csrf
                    <div>
                        <label for="nummer">Kies het text id nummer: <span class="span-redfont">{{ $eerst }}</span></label>
                        <input class="adddata" required type="number" id="nummer" name="textid" placeholder="Vul id nummer in">
                    </div><div><hr>
                        <label for="knopje">Te tonen en verwijderen text id:</label>
                        <input class="adddata" type="submit" id="knopje" name="knop" value="Toon & Verwijder">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
