<?php
$tab_nam=$_POST['system'];

include("connect.php");
$sql="select*from $tab_nam";
$result=mysql_query($sql);
echo"<table border=1 width=500px>
        <tr>
		    <th>id</th>
			<th>Problem</th>
			
			</tr>";
if(mysql_fetch_array($result))
{
while($row=mysql_fetch_array($result))
{
	?>
    
    
       <tr> 
          <td> <?php echo $row['id']; ?></td>
          <td> <?php echo $row['problem']; ?></td>
          	</tr>
    
	
	<?php
}
echo "</table>";
}
?>

