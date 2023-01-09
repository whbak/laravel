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
                <h3>Text werkzaamheden verwijderen</h3>
                <img src="{{ $image }}" alt="happy user" title="happy user" width="129" height="131">
            </div>
            <div class="randbar">
                @foreach ($texts as $text)
                <div class="bar">
                    <div class="left border">todo id: {{ $text->mytodo_id }}</div>
                    <div class="middle border">laatste actie: {{ $text->last_action }}</div>
                    <div class="right border">text id: {{ $text->id }}</div>
                </div>
                <div class="bar">
                    <div class="left border">*</div>
                    <div class="middle border">werkzaamheden: </div>
                    <div class="right border">*</div>
                </div>
                <div class="main border">{{ $text->werkzaamheden }}</div>
                @endforeach
            </div>
            <div class="links">
                <h3>Bevestig de te verwijderen text</h3>
            </div>
            <div class="rand">
                <form action="/deltext" method="GET">
                @csrf
                    <div>
                    <label for="nummer">Te verwijderen id: {{ $text->id }}</label>
                        <input class="adddata" type="hidden" id="nummer" name="id" value="{{ $text->id }}">
                    </div><div><hr>
                        <label for="check">Ja, deze text verwijderen:</label>
                        <input class="addcheck" type="checkbox" id="check" name="check" value="delete">
                    </div><div><hr>
                        <label for="knopje">Weet u dit zeker?</label>
                        <input class="adddata" type="submit" id="knopje" name="knop" value="Verwijder">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
