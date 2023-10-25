<?php
$table = require "./module.php";

const AUTHOR = "curegit";
const PRODUCT = "mmppp-birthday";
const TITLE = "ぴちぴちピッチ誕生日";
const DESCRIPTION = "ぴちぴちピッチ マーメイドプリンセスの誕生日";
?>
<?php header('Content-Type: text/calendar; charset=UTF-8'); ?>
<?php header('Content-Disposition: attachment; filename="mmppp-birthday.ics"'); ?>
<?php header('Cache-Control: no-store'); ?>
BEGIN:VCALENDAR
VERSION:2.0
PRODID:<?= AUTHOR ?>/<?= PRODUCT ?>

X-WR-CALNAME:<?= TITLE ?>

X-WR-CALDESC:<?= DESCRIPTION ?>

<?php FOREACH($table as $row): ?>
BEGIN:VEVENT
UID:<?= $row["uid"] ?>

DTSTART;VALUE=DATE:<?= $row["date"] ?>

DURATION:P1D
RRULE:FREQ=YEARLY
SUMMARY:<?= $row["name"] ?>の誕生日🎂
END:VEVENT
<?php ENDFOREACH; ?>
END:VCALENDAR
