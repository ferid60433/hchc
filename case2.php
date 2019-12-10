<!DOCTYPE html>

<html>
    
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CyberTech System Development & Deployment...Developer Ferid Ibrahim">
    <title>Hawassa City High Court</title>
<style type="text/css">
p {
	text-indent:40px;
	font-size:20px;
}
.text-center {
	text-align: center !important;
}
table {
border-collapse: collapse;
}
table, th {
border: 5px solid blue;
text-align: center;
}
table, td {
border: 2px solid blue;
text-align: center;
}
th {
background-color: #000000 ;

text-align:center;
color: white;
font-size:20px;
margin-top:50px;
    
}
td {
background-color: #FFFFFF ;

text-align:center;
color: black;
font-size:20px;
margin-top:5px;
}


@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}

</style>


		
<?php include('header.php'); ?>
		
</head>

<body>

<script type="text/javascript">
	$(function() {
		$("#search_file").focus();
	});
</script> 

<br /> 
<center>
<a href=""><img src="/1/image/ladyjus.jpg"
  alt="hchc"
  width="100" height="90" border="0" /></a></center><center>
<div><h4>Hawassa City High Court Case Status Search System </h4></center> </div>

<center  <li>
                                <a href="index.php"><img src="/1/image/home.jpg"
  alt="hchc"
  width="150" height="65" border="5" /></a>
                            </li>  
	

<center>
	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">የመዝገብ ቁጥር</th>
				<th class="text-center">የከሳሽ ስም</th>
				<th class="text-center">የተከሳሽ ስም</th>
				<th class="text-center">የክስ አይነት</th>
				<th class="text-center">ችሎት</th>
				<th class="text-center">የቀጠሮ ምክንያት</th>
				<th class="text-center">ቀጠሮ</th>
				
			</tr>
		</thead>
		</center>
								
		<tbody>	
			<?php
			error_reporting(1);
			if ($_REQUEST['submit']) {
			$search_file = $_POST['search_file'];
			$sql = mysql_query("select * from vwrcaseappointment where CaseNumber like '%$search_file%' LIMIT 1") or die('Error in query : $sql. ' .mysql_error());
			
			if (empty($search_file)) {
			echo '<script language="javascript">';
			echo 'alert("Text field cannot be empty. Please Try it again.")';
			echo '</script>';
			header( "refresh:2000; url=index.php" ); 
			}
			else if (mysql_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysql_fetch_array($sql)) {
							// Print out the contents of the entry 
			echo '<tr>';
			//echo '<td class="text-center">' . $i . '</td>';
			echo '<td class="text-center">' . $row['CaseNumber'] . '</td>';
			
			echo '<td class="text-center">' . $row['PlaintiffName'] . '</td>';
			echo '<td class="text-center">' . $row['DefendantName'] . '</td>';
			
			echo '<td class="text-center">' . $row['CaseTypeName'] . '</td>';echo '<td class="text-center">' . $row['RoomName'] . '</td>';echo '<td class="text-center">' . $row['AppointReasonName'] . '</td>';echo '<td class="text-center">' . $row['DateAppointedAmh'] . '</td>';
			$i++;
			}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:130px; float:right; margin-top:-142px;">ምንም መዝገብ አልተገኘም<br>እባክዎን ደግመው በትክክል ያስገቡ!!!</div>';
			}
			}
			?>       
		</tbody>
	</table>
</div>
<!-- Footer -->
   <center> <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
               
                    
                      
                    </ul>
					
              <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">       
                    <footer class="footer-basic-centered">


			<p class="footer-company-name">Copyright &copy; Hawassa City High Court 2019. All Rights Reserved | Developed & Powered by: CyberTech System Dev & Deployment | Shashemene: Mobile: 251910102875-251984726043</p>

		</footer>          </div>
            </div>
        </div>
    </footer></center>
</body>

</html>