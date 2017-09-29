<?php require('partials/head.view.php'); ?>
<h1>Submit Your Name</h1>
<form method="POST" action="/names">
    <input name="first_name" type="text" >
    <button type="submit">Submit</button>
</form>
<hr>
<?php foreach ($users as $user) : ?>
    <li><?= $user->firstName() ?></li>
<?php endforeach; ?>
<?php require('partials/footer.view.php') ?>