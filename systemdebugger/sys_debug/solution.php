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
$id=$_REQUEST['solu'];
include('connect.php');
$html='<table border=0 width=1000px>
	         <tr>
			    <th colspan="4">General Problems</th> 
	         </tr>
			  <tr>
			    <th colspan="1">ID</th>
				<th colspan="1">Causes</th>
				<th colspan="1">Solution</th> 
	         </tr>
			 
			 ';

$sql=mysql_query("select * from desktop where id='$id'" );
 if(mysql_num_rows($sql)>0)
	{
		while($result=mysql_fetch_array($sql))
	{
		$html.='<tr>
		                <td>'.$result['id'].'</td>
						<td>'.$result['causes'].'</td>
						<td>'.$result['solution'].'</td>
						
				</tr>';
	}
	$html.='</table>';
	}
	echo $html;
?>


</body>
</html>