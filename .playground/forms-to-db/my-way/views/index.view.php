<?php require('partials/head.view.php'); ?>
<h1>Submit Your Name</h1>
<form method="POST" action="/names">
    <input name="name" type="text" >
    <button type="submit">Submit</button>
</form>
<?php require('partials/footer.view.php') ?>