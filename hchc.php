<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv ="refresh" content="15;index.html" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CyberTech System Development & Deployment...Developer Ferid Ibrahim">
    

    <title>Hawassa City High Court</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="amharic.php">አማርኛ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
     <a name="about"></a>
    <div class="intro-header">
        <div class="container">
<a href=""><img src="/case/img/justice.png"
  alt="hchc"
  width="95" height="150" border="5" /></a>
            
                     <a href=""><img src="/case/img/Banner1.png"
  alt=""
  width="330" height="100" border="5" /></a>
                   <i>  <center><h2>ሲጨርሱ ይህንን ይጫኑ</h2></center></i>
                    <a href="index.html"><img src="/case/img/home.png"
  alt=""
  width="150" height="65" border="5" /></a>
  <hr class="intro-divider">
  
                        <font color="#3FCE29">
                        <h3>  የሃዋሳ ከተማ ከፍተኛ ፍ/ቤት የመዝገብ ሁኔታ መከታተያ ሲስተም:: </h3></font>
                        <h5> የመዝገብዎን ሁኔታ ውጤት ከዚህ ገፅ መከታተል ይችላሉ:: </h5>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
							
                        <?php
						include('db.php');
$result=mysql_query("select*from vwrcaseappointment where CaseNumber= $_POST[name]"); 
while($rowval=mysql_fetch_array($result))
{
$CaseNumber=$rowval['CaseNumber'];
$PlaintiffName=$rowval['PlaintiffName'];
$DefendantName=$rowval['DefendantName'];
$CaseTypeName=$rowval['CaseTypeName'];
$CaseRankName=$rowval['CaseRankName'];
$CaseStatusName=$rowval['CaseStatusName'];
$ChargeName=$rowval['ChargeName'];
$DateOpenedAmh=$rowval['DateOpenedAmh'];
$RoomName=$rowval['RoomName'];
$AppointReasonName=$rowval['AppointReasonName'];
$AppointConditionName=$rowval['AppointConditionName'];
}
?>
<html>
<body>

<center>
<form>
<table style="color : purple ; border-style : groove ;
height : 150px ; width: 350px" background ="3.jpg">
<tr>
<td style="font-family : Copperplate Gothic
Bold">&nbsp;</td>
</tr>

<tr>
<td align = "right" style="color:red; background-color : #11B556; "
class="auto-style3"> የመዝገብ ቁጥር: </td>
<td class="auto-style4">
<input id="Text" type ="text" value='<?php
echo $CaseNumber;?>'/></td>
</tr>
<tr>
<td align = "right" style="color:red;background-color:#11B556;"
class ="auto-style3"> የከሳሽ ስም: </td>
<td class ="auto-style4">
<input id="Text" type ="text" value ='<?php
echo $PlaintiffName; ?>'/></td>
</tr>
<tr>
<td align = "right" style="color:red;background-color:#11B556;"
class ="auto-style3"> የተከሳሽ ስም: </td>
<td class ="auto-style4">
<input id="Text" type ="text" value ='<?php
echo $DefendantName; ?>'/></td>
</tr>
<td align = "right" style="color: red ;background-color : #11B556 ; "
class ="auto-style3"> የክስ አይነት:</td>
<td class ="auto-style4">
<input id="Text" type="text" value ='<?php
echo $CaseTypeName; ?>'/></td>
</tr>
<tr>
<td align = "right" style="color: red ;background-color : #11B556 ; "
class ="auto-style3"> ደረጃ:</td>
<td class ="auto-style4">
<input id="Text" type="text" value ='<?php
echo $CaseRankName; ?>'/></td>
</tr>
 <?php
						include('db.php');
$result=mysql_query("select*from appointment where casenumber= $_POST[name]");
while($rowval=mysql_fetch_array($result))
{ $CaseNumber=$rowval['CaseNumber'];
$DateAppointedAmh=$rowval['DateAppointedAmh'];
//$ExactTime=$rowval['ExactTime'];
$AppointCountNumber=$rowval['AppointCountNumber'];
}
?>
<tr>
<td align = "right" style="color: red ;background-color : #11B556 ; "
class ="auto-style3"> የመዝገብ ሁኔታ:</td>
<td class ="auto-style4">
<input id="Text" type="text" value ='<?php
echo $CaseStatusName; ?>'/></td>
</tr>

<tr>
<td align = "right" style="color: red ;background-color : #11B556 ; "
class ="auto-style3"> የተከፈተበት ቀን:</td>
<td class ="auto-style4">
<input id="Text" type="text" value ='<?php
echo $DateOpenedAmh; ?>'/></td>
<tr>
<td align = "right" style="color: red ;background-color : #11B556 ; "
class ="auto-style3"> የመጨረሻ ቀጠሮ:</td>
<td class ="auto-style4">
<input id="Text" type ="text" value ='<?php
echo $DateAppointedAmh; ?>'/></td>
</tr>
<tr>
<td align = "right"  style="color:red;background-color:#11B556;"
class ="auto-style3"> የቀጠሮ ምክንያት: </td>
<td class ="auto-style4">
<input id="Text" type ="text" value ='<?php
echo $AppointReasonName; ?>'/></td>
</tr>
<tr>
<td align = "right" style="color:red; background-color : #11B556; "
class="auto-style3"> የመዝገቡ ዕድሜ: </td>
<td class="auto-style4">
<input id="Text" type ="text" value='<?php
echo $AppointCountNumber;?> ቀጠሮ'/></td>
</tr>
<tr>
<td align = "right" style="color:red;background-color:#11B556;"
class ="auto-style3"> የቀጠሮ ሁኔታ: </td>
<td class ="auto-style4">
<input id="Text" type ="text" value ='<?php
echo $AppointConditionName; ?>'/></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>
</center>
</body>
</html>
                            </li>
                            
                      
<tr>
<td></td>
</tr>
</table>
</form>
</center>
</body>
</html>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	
        <!-- /.container -->

    </div>
    <!-- /.banner -->
                 
                          

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
               
        
                    <ul class="list-inline">
                   
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="amharic.php">አማርኛ</a>
                        </li>
                    </ul>
                  <center>  <p class="copyright text-muted small">Copyright &copy; Hawassa City High Court 2019. All Rights Reserved | Designed & Powered by: CyberTech System Dev & Deployment | Shashemene: Mobile: 251910102875-251984726043</p></center>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>