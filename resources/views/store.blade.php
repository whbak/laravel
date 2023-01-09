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
        <div class="small smlborder">
            <div class="links">
                <h3>Todo project toevoegen</h3>
                <h3>Project van: {{ $username }}</h3>
                <img src="{{ $image }}" alt="gent user" title="gent user" width="101" height="159">
            </div>
            <div class="rand">
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label for="">In te vullen: <span-redfont>{{ $eerst }}</span-redfont></label>
                    </div><div><hr>
                        <label for="sequence">Wat komt eerst?</label>
                        <input class="adddata" required type="number" id="sequence" name="sequence" placeholder="priority">
                    </div><div><hr>
                        <label for="username">Projectleider:</label>
                        <input class="adddata" required type="text" id="username" name="username" value="{{ $username }}">
                    </div><div><hr>
                        <label for="todo">Projectnaam:</label>
                        <input class="adddata" required type="text" id="todo" name="todo" placeholder="naam project">
                    </div><div><hr>
                        <label for="begin">Start datum:</label>
                        <input class="adddata" required type="date" id="begin" name="begin" min="1900-01-01" max="2100-12-31" value="">
                    </div><div><hr>
                        <label for="finish">Eind datum:</label>
                        <input class="adddata" required type="date" id="finish" name="finish" min="1900-01-01" max="2100-12-31" value="">
                    </div><div><hr>
                        <label for="status">Welk van de statussen?</label>
                        <select class="adddata" name="status">
                            <option value="new">new</option>
                            <option value="open">open</option>
                            <option value="going">going</option>
                            <option value="ready">ready</option>
                            <option value="closed">closed</option>
                        </select><hr>
                    </div>
                    <div>
                        <label for="knop">Alles correct ingevuld?</label>
                        <input class="adddata" type="submit" id="knop" name="knop" value="Toevoegen">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
