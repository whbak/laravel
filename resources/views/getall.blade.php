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
                <h3>Todo projectlijst get all</h3>
                <img src="{{ $image }}" alt="female user" title="female user" width="150" height="127">
            </div>
            <div class="rand">
                <table>
                    <tr>
                        <th>id - seq.</th>
                        <th>username</th>
                        <th>todo project</th>
                        <th>begin</th>
                        <th>finish</th>
                        <th>status</th>
                    </tr>
                    @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->id }} - {{ $todo->sequence }}</td>
                        <td>{{ $todo->username }}</td>
                        <td>{{ $todo->todo }}</td>
                        <td>{{ $todo->begin }}</td>
                        <td>{{ $todo->finish }}</td>
                        <td>{{ $todo->status }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
