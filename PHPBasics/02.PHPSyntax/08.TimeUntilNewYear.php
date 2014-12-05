<?php
date_default_timezone_set ("Europe/Sofia");
$currentTime = getdate();
$unixTime = $currentTime[0];
$unixNewYearTime = strtotime("01 january ".(intval(date('Y'))+1));
$seconds = $unixNewYearTime - $unixTime;
$minutes = round($seconds / 60);
$hours = round($minutes / 60);
$days = floor($seconds / 86400);
$remainingSeconds = $seconds - $days * 86400;
$remainingHours = floor($remainingSeconds / 3600);
$remainingSeconds = $remainingSeconds - $remainingHours * 3600;
$remainingMinutes = floor($remainingSeconds / 60);
$remainingSeconds = $remainingSeconds - $remainingMinutes * 60;
echo 'Hours until new year : ' . $hours . "<br />\n\r";
echo 'Minutes until new year : ' . $minutes . "<br />\n\r";
echo 'Seconds until new year : ' . $seconds . "<br />\n\r";
echo 'Days:Hours:Minutes:Seconds ' . $days . ':' . $remainingHours . ':' . $remainingMinutes . ':' . $remainingSeconds;
?>