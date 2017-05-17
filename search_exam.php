<?php include_once('connection.php'); ?>
<?php
if($_POST)
{
$q=$_POST['search'];

$sql_res=mysql_query("select id,exam_type from exam_category where exam_type like '%$q%'  order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
	//print_r($row);
	$id=$row['id'];
$exam_type=$row['exam_type'];

$b_exam_type='<strong>'.$q.'</strong>';

$final_exam_type = str_ireplace($q, $b_exam_type, $exam_type);

?>
<div class="show" align="left">
<span class="name" onclick="sendValueToText(this.id)" id=<?php echo $id."_abc"; ?>><?php echo $final_exam_type; ?>
</span>&nbsp;<br/><?php //echo $final_email; ?><br/>
</div>
<?php
}
}
?>
