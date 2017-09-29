<?php require('partials/head.view.php'); ?>
<form method="GET" action="about/culture">
    <label for="name">Name</label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<ul>
    <?php foreach($tasks as $task) : ?>
    <li>
        <?php if($task->completed()) : ?>
        <strike>
            <?= $task->description(); ?>
        </strike>
        <?php else: ?>
        <?= $task->description(); ?>
            <?php endif; ?>
    </li>
    <?php endforeach ?>
</ul>
<hr>
<ul>
    <?php foreach($tasks as $task) : ?>
    <li>
        <?= $task->toString() ?>
    </li>
    <?php endforeach ?>
</ul>
<?php require('partials/footer.view.php') ?>