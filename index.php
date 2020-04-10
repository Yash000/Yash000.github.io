<!DOCTYPE html>

<?php
	
	
	function display($id,$title,$text,$others)
	{
		echo " <pre><h3>" .$title. " </h3><p><br>" .$text. " </p></pre>" ;
	}
	
	
	$server="localhost:3306";
	$user="root";
	$pass="";
	$db="yash";
	
	$conn=new mysqli($server,$user,$pass,$db);
	
	if($conn->connect_error)
		die("connection failed");
	
	$sql="select * from abc";
	$result = $conn->query($sql);
	
?>


<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>home</title>
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="generator" content="thesitewizard.com's Layout Wizard 3.0.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="styles.css">
  </head>
  <body style="margin:0;">
  
  
    <div id="tswcontainer">
	<!-- ****************************************************************************************************************** -->
      
	<div id="tswheader">
	<div class="header"></div>
	<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
	<label for="openSidebarMenu" class="sidebarIconToggle">
		<div class="spinner diagonal part-1"></div>
		<div class="spinner horizontal"></div>
		<div class="spinner diagonal part-2"></div>
	</label>
  <div id="sidebarMenu" style="margin-top:69px;">
    <ul class="sidebarMenuInner">
      <li>Jelena Jovanovic <span>Web Developer</span></li>
      <li><a href="https://vanila.io" target="_blank">Company</a></li>
      <li><a href="https://instagram.com/plavookac" target="_blank">Instagram</a></li>
      <li><a href="https://twitter.com/plavookac" target="_blank">Twitter</a></li>
      <li><a href="https://www.youtube.com/channel/UCDfZM0IK6RBgud8HYGFXAJg" target="_blank">YouTube</a></li>
      <li><a href="https://www.linkedin.com/in/plavookac/" target="_blank">Linkedin</a></li>
    </ul>
  </div>
  
        <!-- start of header section: insert your logo, etc, here --><center> <img src="images/logo%20%281%29.png"
          style="width: 196px; height: 65px;"></center>
        <!-- end of header section: insert your logo, etc, above this line --> </div>
      <div id="tswcontent" style="margin-left:50px;">
        <div id="tswcontproper">
          <!-- start of content column: insert your content here -->
          <h1>JAVA TUTORIAL</h1>
     <?php     
		  if($result ->num_rows > 0)
	{
		
		display("id","title","text","others");
		while($row=$result->fetch_assoc())
		{
			display($row["id"],$row["title"],$row["text"],$row["others"]);
		}
		

	}
	else
	{
		echo "0 results";
	}
	?>
	
          <!-- end of content column: put your content above this line --> </div>
      </div>
      
      <div style="clear: both;"></div>
      <footer id="tswfooter">
        <!-- start of footer section: insert your copyright notice, etc, here -->
        <p> Placeholder content for the footer: please replace these words with
          your real content. </p>
        <!-- end of footer section: insert your copyright notice, etc, above this line -->
      </footer>
    </div>
  </body>
</html>
<?php
	$conn->close()
		
?>