<?php require('partials/head.view.php'); ?>

<h1>All users</h1>
<form method="POST" action="/users">
    <input name="first_name" type="text" >
    <button type="submit">Submit</button>
</form>
<hr>
<?php foreach ($users as $user) : ?>
    <li><?= $user->firstName() ?></li>
<?php endforeach; ?>
<?php require('partials/footer.view.php') ?>