<html>
<head>

<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("tr:even").css("background-color","#CCF");
  $("tr:odd").css("background-color","#09F");
});
</script>
</head>
<body>


<?php
session_start();
 include("connect.php");
$a=$_REQUEST['prob'];
$system=$_SESSION['system'];
if($a=='gp')
{
	$html='<table border=0 width=0>
	         <tr>
			    <th colspan="4">General Problems</th> 
	         </tr>
			 <tr>
			    <th colspan="1">ID</th>
			    <th colspan="1">Problems</th>
				<th colspan="1">Solutions</th> 
	         </tr>
';
$sql=mysql_query("select * from {$system}  where category='general_problems'") or die(mysql_error());	
	$num=count($sql);
	
		if(mysql_num_rows($sql)>0)
	{
		while($result=mysql_fetch_array($sql))
	{
		$html.='<tr>
		                <td>'.$result['id'].'</td>
						<td>'.$result['problem'].'</td>
						<td><a href=solution.php?solu='.$result['id'].'>Solution</a></td>
				</tr>';
	}
	$html.='</table>';
	}
}
echo $html;

?>


</body>
</html>