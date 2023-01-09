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
                <h3>Show Text gegevens werkzaamheden</h3>
                <img src="<?php echo e($image); ?>" alt="happy user" title="happy user" width="129" height="131">
            </div>
            <div class="randbar">
                <?php $__currentLoopData = $texts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bar">
                    <div class="left border">todo id: <?php echo e($text->mytodo_id); ?></div>
                    <div class="middle border">username: <?php echo e($text->username); ?></div>
                    <div class="right border">todo: <?php echo e($text->todo); ?></div>
                </div>
                <div class="bar">
                    <div class="left border">text id: <?php echo e($text->id); ?></div>
                    <div class="middle border">werkzaamheden: </div>
                    <div class="right border">laatste actie: <?php echo e($text->last_action); ?></div>
                </div>
                <div class="main border"><?php echo e($text->werkzaamheden); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /var/www/html/project/resources/views/showtext.blade.php ENDPATH**/ ?>