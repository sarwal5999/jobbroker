<!DOCTYPE html>
    <html>
<head>
    <title></title>
</head>
<body>
<form action="test_smtp_gmail_basic.php" method="post">
    <table>
        <tr>
            <td>Email To :</td>
            <td><input type="text" name="to" required style="width: 250px;"> </td>
        </tr>
        <tr>
            <td>Subject :</td>
            <td><input type="text" name="subject" required style="width: 250px;"> </td>
        </tr>
        <tr>
            <td>Message Body :</td>
            <td><textarea rows="5" cols="33" name="body" required></textarea> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SENT"> </td>
        </tr>
    </table>
</form>
</body>
    </html>