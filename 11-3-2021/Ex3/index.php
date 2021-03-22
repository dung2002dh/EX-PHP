<!DOCTYPE html>
<html>
<head>
	<title>Ex3</title>
	<style type="text/css">
		body{
			padding-left: 30px;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>Month</th>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>10</td>
			<td>11</td>
			<td>12</td>
		</tr>
		<tr>
			<th>Numb of Day</th>
			<td>31</td>
			<td>28</td>
			<td>31</td>
			<td>30</td>
			<td>31</td>
			<td>30</td>
			<td>31</td>
			<td>31</td>
			<td>30</td>
			<td>31</td>
			<td>30</td>
			<td>31</td>
		</tr>
	</table><br><br>
<?php
function dayOfMonth($month)
{
    switch ($month) {
        case "1":
        case "3":
        case "5":
        case "7":
        case "8":
        case "10":
        case "12":
            return "31";
        case "4":
        case "6":
        case "9":
        case "11":
            return "30";
        case "2":
            return "28";
    }
}
echo "là tháng có: ". dayOfMonth(12);
?>
</body>
</html>