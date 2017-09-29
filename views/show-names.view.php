<?php require('partials/head.view.php'); ?>
<h1>Users</h1>
<?php if($added) : ?>
    <h3>User <?= $user->firstName(); ?> added successfully!</h3>
<?php endif; ?>
<hr>
<ul>
    <?php foreach ($users as $u) : ?>
        <li><?= $u->firstName(); ?></li>
    <?php endforeach; ?>
</ul>
<?php require('partials/footer.view.php') ?>