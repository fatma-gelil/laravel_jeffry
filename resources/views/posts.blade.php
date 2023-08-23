<!DOCTYPE html>
<html lang="">
    <head>
        <title>Laravel Blog</title>
        <!-- Styles -->
        <link rel="stylesheet" href="resources/css/app.css">

    </head>
    <body>
    <h1>welcome</h1>
    <?php foreach ($posts as $post):?>
     <article>
         <?= $post; ?>
     </article>
    <?php endforeach; ?>
    </body>
</html>
