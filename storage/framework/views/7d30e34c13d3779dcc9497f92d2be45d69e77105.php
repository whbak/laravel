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
            <h3>Todo project wijzigen</h3>
                <img src="<?php echo e($image); ?>" alt="gent user" title="gent user" width="101" height="159">
            </div>
            <div class="rand">
                <form action="/update" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="id">Gekozen project:</label>
                    </div><div><hr>
                        <label hidden for="id">Gekozen project id: <?php echo e($todo->id); ?></label>
                        <input class="adddata" hidden type="number" id="id" name="id" value="<?php echo e($todo->id); ?>">
                    </div><div><hr>
                        <label for="sequence">Wat komt eerst?</label>
                        <input class="adddata" required type="number" id="sequence" name="sequence" value="<?php echo e($todo->sequence); ?>">
                    </div><div><hr>
                        <label for="username">Projectleider: <?php echo e($todo->username); ?></label>
                        <input class="adddata" hidden type="text" id="username" name="username" value="<?php echo e($todo->username); ?>">
                    </div><div><hr>
                        <label for="todo">Projectnaam:</label>
                        <input class="adddata" required type="text" id="todo" name="todo" value="<?php echo e($todo->todo); ?>">
                    </div><div><hr>
                        <label for="begin">Start datum:</label>
                        <input class="adddata" required type="date" id="begin" name="begin" value="<?php echo e($todo->begin); ?>">
                    </div><div><hr>
                        <label for="finish">Eind datum:</label>
                        <input class="adddata" required type="date" id="finish" name="finish" value="<?php echo e($todo->finish); ?>">
                    </div><div><hr>
                        <label for="status">Welk van de statussen?</label>
                        <select class="adddata" name="status">
                        <option value="new"><?php echo e($todo->status); ?></option>
                            <option value="new">new</option>
                            <option value="open">open</option>
                            <option value="going">going</option>
                            <option value="ready">ready</option>
                            <option value="closed">closed</option>
                        </select><hr>
                    </div>
                    <div>
                        <label for="knop">Alles correct ingevuld?</label>
                        <input class="adddata" type="submit" id="knop" name="knop" value="Aanbrengen">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /var/www/html/project/resources/views/edit.blade.php ENDPATH**/ ?>