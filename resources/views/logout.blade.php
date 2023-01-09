<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/app.css">
        <script src="/app.js" defer></script>
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
                    <a href="/ready">Status new</a>
                </div>
                <div class="linkcenter">
                    <a href="/query">Query sorting</a>
                    <a href="/fetch">Fetch row</a>
                    <a href="/like">Like</a>
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
                <a href="/">Index</a>
            </div>
        </div>
    </div>
        <div class="small smlborder">
            <div class="links">
                <h3>Logout</h3>
                <img src="{{ $image }}" alt="old house photo" title="old house photo" width="400" height="256">
            </div>
            <div class="rand">
                <div class="main">Jammer dat u niet ingelogd bent op onze Todo.</div>
                <button class="button" onclick="myparagraaf()">Click me!</button>
            </div>
        </div>
    </body>
</html>
