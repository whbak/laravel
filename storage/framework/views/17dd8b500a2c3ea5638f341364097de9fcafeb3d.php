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
                <h3>Todo projectlijst status new</h3>
                <img src="<?php echo e($image); ?>" alt="computer user" title="computer user" width="128" height="150">
            </div>
            <div class="rand">
                <table>
                    <tr>
                        <th>id - seq.</th>
                        <th>username</th>
                        <th>todo project</th>
                        <th>status</th>
                    </tr>
                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($todo->id); ?> - <?php echo e($todo->sequence); ?></td>
                        <td><?php echo e($todo->username); ?></td>
                        <td><?php echo e($todo->todo); ?></td>
                        <td><?php echo e($todo->status); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /var/www/html/project/resources/views/ready.blade.php ENDPATH**/ ?>