
<html>
    <head>
        <style>
            body {
                font-family:sans-serif;
                background-color:white;
            }
           table {
            margin-top:15px;
           }
            </style>
        <title>Output</title>
</head>
<body>
    <h1>Below Is the Output!<h1>
<?php
$names = isset($_POST['names']) ? $_POST['names'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['Age']) ? $_POST['Age'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$level = isset($_POST['level']) ? $_POST['level'] : '';
$file = isset($_POST['file']) ? $_POST['file'] : '';
$textarea = isset($_POST['textarea']) ? $_POST['textarea'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';
$datetime = isset($_POST['datetime_local']) ? $_POST['datetime_local'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$range = isset($_POST['range']) ? $_POST['range'] : '';
$search = isset($_POST['search']) ? $_POST['search'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$text = isset($_POST['text']) ? $_POST['text'] : '';
$time = isset($_POST['time']) ? $_POST['time'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$week = isset($_POST['week']) ? $_POST['week'] : '';
?>
<table border=1 cellspacing=0 height=100 >
<tr>
<th>Name</th>
<th>Password</th>
<th>Email</th>
<th>Age</th>
<th>Date of birth</th>
<th>Status</th>
<th>Gender</th>
<th>Level</th>
<th>Id file</th>
<th>Color</th>
<th>New year date</th>
        </tr>
        <tr>
<td><?php echo $names; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $status; ?></td>
<td><?php echo $gender; ?></td>
<td><?php echo $level; ?></td>
<td><?php echo $file; ?></td>
<td><?php echo $color; ?></td>
<td><?php echo $datetime; ?></td>
        </tr>
        </table>
        <table border=1 cellspacing=0 height=100>
            <tr>
<th>Holiday time</th>
<th>Rating</th>
<th>Search</th>
<th>Tel</th>
<th>Food</th>
<th>Wake up time</th>
<th>Link to school website</th>
<th>Week</th>
<th>Feedback!</th>
</tr>
<tr>
<td><?php echo $month; ?></td>
<td><?php echo $range; ?></td>
<td><?php echo $search; ?></td>
<td><?php echo $tel; ?></td>
<td><?php echo $text; ?></td>
<td><?php echo $time; ?></td>
<td><?php echo $url; ?></td>
<td><?php echo $week; ?></td>
<td><?php echo $textarea; ?></td>
</tr>
</table>
</body>
</html>