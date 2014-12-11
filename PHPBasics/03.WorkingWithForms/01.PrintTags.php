<!DOCTYPE html>
<html>
    <head>
        <title>Print Tags</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
    <main>
        <article>
            <p>Enter Tags</p>
            <form action="01.PrintTags.php" method="post">
                <input type="text" name="tags" placeholder="Enter tags comma separated">
                <input type="submit">
            </form>
            <?php printTags(); ?>
        </article>
    </main>
</body>
</html>

<?php
function printTags() {
    $tags = filter_input(INPUT_POST, 'tags');
    if (strlen($tags) > 0) {
        $tags = explode(",", $tags);
        echo "<p>";
        foreach ($tags as $key => $value) {
            echo $key." : ".$value."<br />\n\r";
        }
        echo "</p>";
    }
}
?>

