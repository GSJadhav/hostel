<?php
 $day=$_POST["pull"]
 if(isset($_POST["submit"]))
 {
	if($day=="opt1")
	{
		echo"<body bgcolor=\"red\">";
	}	
    elseif($day=="opt2")
	{
		echo"<body bgcolor=\"yellow\">";
	}		
	elseif($day=="opt3")
	{
		echo"<body bgcolor=\"green\">";
	}
    elseif($day=="opt4")
	{
		echo"<body bgcolor=\"pink\">";
	}	
	elseif($day=="opt5")
	{
		echo"<body bgcolor=\"purple\">";
	} 
	elseif($day=="opt6")
	{
		echo"<body bgcolor=\"black\">";
	}
	elseif($day=="opt7")
	{
		echo"<body bgcolor=\"orange\">";
	}
 }
?>

<html>
<head>
</head>
<body>
<form name="f1" action="#" method="POST">
day<select name="pull" size="1">
<option value="opt1"<?php if($day=="opt1")echo'selected="selected"';?>>Monday</option>
<option value="opt2"<?php if($day=="opt2")echo'selected="selected"';?>>Tuesday</option>
<option value="opt3"<?php if($day=="opt3")echo'selected="selected"';?>>Wednesday</option>
<option value="opt4"<?php if($day=="opt4")echo'selected="selected"';?>>Thursday</option>
<option value="opt5"<?php if($day=="opt5")echo'selected="selected"';?>>Friday</option>
<option value="opt6"<?php if($day=="opt6")echo'selected="selected"';?>>Saturday</option>
<option value="opt7"<?php if($day=="opt7")echo'selected="selected"';?>>Sunday</option>
</select>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>