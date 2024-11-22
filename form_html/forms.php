
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
$names=$_POST['names'];
$password=$_POST['password'];
$email=$_POST['email'];
$age=$_POST['Age'];
$date=$_POST['date'];
$status=$_POST['status'];
$gender=$_POST['gender'];
$level=$_POST['level'];
$file=$_POST['file'];
$textarea=$_POST['textarea'];
$color=$_POST['color'];
$datetime=$_POST['datetime-local'];
$month=$_POST['month'];
$range=$_POST['range'];
$search=$_POST['search'];
$tel=$_POST['tel'];
$text=$_POST['text'];
$time=$_POST['time'];
$url=$_POST['url'];
$week=$_POST['week'];
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