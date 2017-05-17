<?php
include_once('connection.php');

$type=base64_decode($_GET['ty']);
if($type=="fetch_exam_price")
{
   $exam=base64_decode($_GET['text']);
   $sql=mysql_query("SELECT  `amount` FROM  `exam` WHERE  `id` =  '$exam'");
   $amt=mysql_fetch_assoc($sql);
   $amount=$amt['amount'];
   echo $amount;
}
if($type=="fetch_city")
{
  $s=base64_decode($_GET['text']);
  $sql=mysql_query("SELECT * FROM  `city_name` WHERE  `state_id` =  '$s' ");
  while($data=mysql_fetch_assoc($sql))
  {
    ?>
       <option value='<?php echo $data['id']; ?>'><?php echo $data['city_name']; ?></option>
    <?php
  }
}
if($type=="search_exam")
{
  $a=base64_decode($_GET['text']);
  $s='%'.$a.'%';
  $sql=mysql_query("select * from exam_category where exam_type like '$s' ");
 if(mysql_num_rows($sql))
	{
	  while($data=mysql_fetch_assoc($sql))
	  {
		 $id=$data['id'];
		 $exam_type=$data['exam_type'];
                 $link=$data['link'];
		 $b_exam_type='<strong>'.$q.'</strong>';
		 $final_exam_type = str_ireplace($q, $b_exam_type, $exam_type);
		?>
	  <span class="name" onclick="sendValueToText(this.id)" id=<?php echo $id."_abc"; ?>><a href="<?php echo $link; ?>"> <?php echo $final_exam_type; ?></a></span><br>
		<?php
	  }
	 }
 else
	{
	?>
		  <!--<span class="name" >No Record Found</span><br>-->
	 <span class="name" ><b><font color="red" font-size="10px";>No Record Found</font></b></span><br>
		<?php
	}
}

if($type=="checkemail")
{
   //ritesh
	 $email=base64_decode($_GET['text']);
         $sql=mysql_query("SELECT email_id FROM `users`WHERE email_id = '$email'");
        // $mail_check=mysql_fetch_assoc($sql);
         if(mysql_num_rows($sql)>0)
	     {
	       echo "Email Already Exist";
             }
            
	     
}
?>