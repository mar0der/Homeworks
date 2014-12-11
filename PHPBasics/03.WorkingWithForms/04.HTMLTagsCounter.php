<?php
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $score = 0;
}
$validTags = array('!DOCTYPE', 'html', 'head', 'title', 'base', 'link', 'meta', 'style',
    'script', 'noscript', 'template', 'body', 'section', 'nav',
    'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
    'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
    'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
    'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
    'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
    'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
    'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
    'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
    'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
    'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
    'label', 'input', 'button', 'select', 'datalist', 'optgroup',
    'option', 'textarea', 'keygen', 'output', 'progress',
    'meter', 'details', 'summary', 'menuitem', 'menu');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML Tag Counter</title>
    </head>
    <body>
        <form method="get">
                <label for="tag">HTML tags</label> <br />
                <input type="text" name="tag" /> <input type="submit" value="Submit"/><br />
                <?php
                if (isset($_GET['tag']) && $_GET['tag'] != "") {
                    $input = $_GET['tag'];
                    $isValid = false;
                    foreach ($validTags as $tag) {
                        if ($input == $tag) {
                            $isValid = true;
                            break;
                        }
                    }
                    if ($isValid) {
                        $_SESSION['score'] ++;
                        echo "<p>Valid HTML tag! <br />Score:" . htmlentities($_SESSION['score']) . "</p>";
                    } else {
                        echo "<p>Invalid HTML tag! <br />Score:" . htmlentities($_SESSION['score']) . "</p>";
                    }
                }
                ?>
        </form>
    </body>
</html>