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
                <h3>Text werkzaamheden aan een todo toevoegen</h3>
                <img src="{{ $image }}" alt="laptop user" title="laptop user" width="128" height="128">
            </div>
            <div class="rand">
                <table>
                    <tr>
                        <th colspan="4">todo</th>
                        <th colspan="4">text</th>
                    </tr>
                    <tr>
                        <th>todo id</th>
                        <th>user</th>
                        <th>todo</th>
                        <th>status</th>
                        <th>text id</th>
                        <th>werk</th>
                        <th>laatste actie</th>
                        <th>text todo id</th>
                    </tr>
                    @foreach ($texts as $text)
                    <tr>
                        <td>{{ $text->todoid }}</td>
                        <td>{{ $text->username }}</td>
                        <td>{{ $text->todo }}</td>
                        <td>{{ $text->status }}</td>
                        <td>{{ $text->id }}</td>
                        <td>{{ $text->werkzaamheden }}</td>
                        <td>{{ $text->last_action }}</td>
                        <td>{{ $text->mytodo_id }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="links">
                <h3>Aanmaken text voor een todo</h3>
            </div>
            <div class="rand">
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label for="nummer">Kies je todo id:</label>
                        <input class="adddata" required type="number" id="nummer" name="todoid" placeholder="Voor todo id">
                    </dv><div><hr>
                    <label class="labeltext"for="werk">Omschrijving werkzaamheden:</label>
                        <textarea class="addtext" required id="werk" name="werk" placeholder="Werkzaamheden" rows="3" cols="30">Omschrijf de werkzaamheden.</textarea>
                    </div><div><hr>
                        <label for="action">Laatste text aktie:</label>
                        <input class="adddata" required type="date" id="action" name="action" min="1900-01-01" max="2100-12-31" value="">
                    </div><div><hr>
                        <label for="knop">Toevoegen text aan todo id:</label>
                        <input class="adddata" type="submit" id="knop" name="knop" value="Toevoegen">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
