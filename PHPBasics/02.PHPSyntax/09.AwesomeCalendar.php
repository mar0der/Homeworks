<?php
//README FIRST
//if your server does not have configured bg_BG locale and you see the months name in english please have a look here:
//http://petarpetkov.com/calendar/index.php?year=2014
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/09.Style.css">
    </head>
    <body>
    <main>
        <section>
            <header>
                <?php
                //set locale to get the months in bg locale
                setlocale(LC_TIME, 'bg_BG', 'bulgarian');

                //check if the year was sent via get if not set the current year. the year can`t be less than 1970 cuz we are using unixtimestamp
                if (isset($_GET["year"]) && intval($_GET["year"]) > 1969) {
                    $year = intval($_GET["year"]);
                } else {
                    $year = intval(date('Y'));
                }
                echo $year;
                ?>
            </header>
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <article>
                    <header>
                        <?php
                        $currentMonthUnixTime = strtotime('01-' . $i . '-' . $year);
                        $currentMonth = intval(date('m', $currentMonthUnixTime));
                        echo strftime ( "%B", $currentMonthUnixTime );
                        ?>
                    </header>
                    <table>
                        <thead>
                            <tr>
                                <th>По</th>
                                <th>Вт</th>
                                <th>Ср</th>
                                <th>Чт</th>
                                <th>Пе</th>
                                <th>Сб</th>
                                <th>Не</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <?php
                            $daysInCurrentMonth = date('t', $currentMonthUnixTime);
                            $firstOfMonthWeekId = date('N', $currentMonthUnixTime);
                            $weeks = getNumberOfRows($firstOfMonthWeekId, $daysInCurrentMonth);
                            $isFirstCurrentDay = false;
                            $dayCounter = 1;
                            for ($j = 0; $j < $weeks; $j++) {
                                echo "<tr>";
                                for ($k = 1; $k < 8; $k++) {
                                    if ($k == $firstOfMonthWeekId) {
                                        $isFirstCurrentDay = true;
                                    }
                                    if ($isFirstCurrentDay && $dayCounter <= $daysInCurrentMonth) {
                                        echo "<td>" . $dayCounter . "</td>";
                                        $dayCounter++;
                                    } else {
                                        echo "<td></td>";
                                    }
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </article>
            <?php } ?>
        </section>
    </main>
</body>
</html>
<?php

//get the number of weeks in a given month (calendar row weeks)
function getNumberOfRows($firstOfMonthWeekId, $monthLength) {
    return ceil(($firstOfMonthWeekId - 1 + $monthLength) / 7);
}
?>