<h1>Hello, world!</h1>
<p>Шаблон (view) Main</p>
<br>
<?php foreach ($posts as $post) : ?>
    <h3><?= $post->title; ?></h3>
<?php endforeach; ?>