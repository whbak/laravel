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
                <h3>Text werkzaamheden wijzigen</h3>
                <img src="<?php echo e($image); ?>" alt="laptop user" title="laptop user" width="128" height="128">
            </div>
            <div class="rand">
                <table>
                    <tr>
                        <th colspan="6">todo</th>
                        <th colspan="5">text</th>
                    </tr>
                    <tr>
                        <th>todo id</th>
                        <th>user</th>
                        <th>todo</th>
                        <th>begin</th>
                        <th>finish</th>
                        <th>status</th>
                        <th>text id</th>
                        <th>werk</th>
                        <th>laatste actie</th>
                    </tr>
                    <?php $__currentLoopData = $texts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($text->mytodo_id); ?></td>
                        <td><?php echo e($text->username); ?></td>
                        <td><?php echo e($text->todo); ?></td>
                        <td><?php echo e($text->begin); ?></td>
                        <td><?php echo e($text->finish); ?></td>
                        <td><?php echo e($text->status); ?></td>
                        <td><?php echo e($text->id); ?></td>
                        <td><?php echo e($text->werkzaamheden); ?></td>
                        <td><?php echo e($text->last_action); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <div class="links">
                <h3>Kies je aan te passen text</h3>
            </div>
            <div class="rand">
                <form action="/edittext" method="GET">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label for="nummer">Voer je text id in:</label>
                        <input class="adddata" required type="number" id="nummer" name="textid" placeholder="Text id invoeren">
                    </dv><div><hr>
                        <label for="knop">Correct text id?</label>
                        <input class="adddata" type="submit" id="knop" name="knop" value="Wijzigen">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /var/www/html/project/resources/views/alltext.blade.php ENDPATH**/ ?>