<?php
include('../env.php');
include('../includes/header.php');
?>

<main>
    <h1>Blog</h1>
    <ul>
        <li><a href="<?php echo $baseURl; ?>blog/post1.php">blog 1</a></li>
        <li><a href="<?php echo $baseURl; ?>blog/post2.php">blog 2</a></li>
    </ul>
</main>

<?php
include('../includes/footer.php');
?>