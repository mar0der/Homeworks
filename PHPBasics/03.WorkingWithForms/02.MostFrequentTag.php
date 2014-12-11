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
            <form action="02.MostFrequentTag.php" method="post">
                <input type="text" name="tags" placeholder="Enter tags comma separated">
                <input type="submit">
            </form>
            <?php printTags(); ?>
        </article>
    </main>
</body>
</html>
<?php
function printTags(){
    $tags = filter_input(INPUT_POST, "tags", FILTER_SANITIZE_SPECIAL_CHARS);
    if(isset($tags) && $tags != ""){
            $tags = explode(",",$tags);
            $tags = array_count_values($tags);
            arsort($tags);
            foreach($tags as $k => $v){
                echo $k." : ".$v." times<br />\n\r";
            }
            $maxValue = max($tags);
            $maxValueTag = array_search($maxValue, $tags);
            echo "Most Frequent Tag is: ".$maxValueTag;
    }
    

}
?>