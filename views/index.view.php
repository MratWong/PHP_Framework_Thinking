<?php require "views/partials/heading.php" ?>

    <h2>Usernames</h2>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>PHP Framework Thinking</h3>
    <form action="names" method="POST">
         <input type="text" name="name" id="">
        <input type="submit" value="Submit">
    </form>
<?php require "views/partials/footer.php" ?>