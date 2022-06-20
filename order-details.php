<html>
<head>
    <title>Confirmation Page of Web Form</title>
</head>
<h1>Confirmation Page of Customer Info</h1>

<p>Thank you for submitting this form.

<p>We have successfully received it.

<p>Below is a summary of the information you provided.<br><br>
<?php
echo 'Street: ' . $_POST ["street"] . '<br>';
echo 'Streetnumber: ' . $_POST ["streetnumber"] . '<br>';
echo 'City: ' . $_POST ["city"] . '<br>';
echo 'Zipcode: ' . $_POST ["zipcode"];

?>