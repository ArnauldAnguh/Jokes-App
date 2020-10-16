<?php 
    $query   = "SELECT * FROM chats ";
    $run     = mysqli_query($db,$query);
 while ($row = mysqli_fetch_assoc($run)) {
 	$name    = $row['name'];
 	$message = $row['message'];
 	$time    = $row['time']; 
?>

<p>
<span style="color: red;"><?php echo $name . " : ";  ?></span>
<span style="color: blue;"><?php echo $message;      ?></span>
<span style="float: right;"><?php echo $time; ?></span>
</p>

<?php }; ?>