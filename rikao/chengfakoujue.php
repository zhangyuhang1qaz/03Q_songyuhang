<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>1*1=1</td>
		</tr>
		<tr>
			<td>1*2=2</td>
			<td>2*2=4</td>
		</tr>
		<tr>
			<td>1*3=3</td>
			<td>2*3=6</td>
			<td>3*3=9</td>
		</tr>
		<tr>
			<td>1*4=4</td>
			<td>2*4=8</td>
			<td>3*4=12</td>
			<td>4*4=16</td>
		</tr>
		<tr>
			<td>1*5=5</td>
			<td>2*5=10</td>
			<td>3*5=15</td>
			<td>4*5=20</td>
			<td>5*5=25</td>
		</tr>
		<tr>
			<td>1*6=6</td>
			<td>2*6=12</td>
			<td>3*6=18</td>
			<td>4*6=24</td>
			<td>5*6=30</td>
			<td>6*6=36</td>
		</tr>
		<tr>
			<td>1*7=7</td>
			<td>2*7=14</td>
			<td>3*7=21</td>
			<td>4*7=28</td>
			<td>5*7=35</td>
			<td>6*7=42</td>
			<td>7*7=49</td>
		</tr>
		<tr>
			<td>1*8=8</td>
			<td>2*8=16</td>
			<td>3*8=24</td>
			<td>4*8=32</td>
			<td>5*8=40</td>
			<td>6*8=48</td>
			<td>7*8=56</td>
			<td>8*8=64</td>
		</tr>
		<tr>
			<td>1*9=9</td>
			<td>2*9=18</td>
			<td>3*9=27</td>
			<td>4*9=36</td>
			<td>5*9=45</td>
			<td>6*9=54</td>
			<td>7*9=63</td>
			<td>8*9=72</td>
			<td>9*9=81</td>
		</tr>
	</table>
</body>
</html>
<!-- <?php
for ($i=1; $i <=9 ; $i++) { 
	for ($a=1; $a <=$i ; $a++) { 
		echo "$i*$j=".$i*$j.'';
	}
		echo '<br/>';
}
?> -->
<?php
for($i=1;$i<=9;$i++)
{
for($j=1;$j<=$i;$j++)
{
echo "$i*$j=".$i*$j.' ';
}
echo '<br />';
}
?>