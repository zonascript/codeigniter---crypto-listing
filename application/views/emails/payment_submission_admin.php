<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- If you delete this meta tag, Half Life 3 will never be released. -->
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<body bgcolor="#FFFFFF">

<p>ProjID: <?=$SubProjID?>,</p>
<p>Project Name: <?=$SubCoinName?></p>

<?php
if ($SubDatesNotDefined == 1) {
    $emailMessage .= "<p>Dates not defined yet - TBA </p>";
} else {
    $emailMessage .= "<p>Start Date: ".date("Y-m-d", strtotime($SubStart))."</p>";
    $emailMessage .= "<p>End Date: ".date("Y-m-d", strtotime($SubEnd))."</p>";
}
echo $emailMessage;
?>
</body>
</html>