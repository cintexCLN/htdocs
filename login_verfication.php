<!DOCTYPE html>
<html>
<head>
<title>TradeStone Software Inc.</title>

</head>
<body  onload="document.LoginForm.user_id.focus()">

<script language="javascript" src="js/comfunc2015R1FP24-min.js"></script>

<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" src="js/htmlcomponents2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/main2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/htmlAjax2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/messaging2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/htmlErrors2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/loginactivesessions2015R1FP24-min.js"></script>
<script type="text/javascript" src="js/screenutils2015R1FP24-min.js"></script>



<link rel="stylesheet" type="text/css" media="screen" href="css/global2015R1FP24-min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="jquery/css/custom-theme/jquery-ui-1.8.4.custom.css" />


    <style type="text/css">
        .ui-dialog .ui-dialog-titlebar
        {
          	font-size:8pt;
  			font-family:Trebuchet MS, Verdana;
            background:#FDC349;
        }
        .ui-dialog .ui-dialog-content
        {
  			font-size:8pt;
  			font-family:Trebuchet MS, Verdana;
  		}
        .ui-dialog .ui-dialog-content input
        {
  			font-size:8pt;
  			font-family:Trebuchet MS, Verdana;
  		}
  		.ui-dialog
  		{
  			padding: 0em;
  		}        
  		.ui-widget-content
		{
			border-color: #B3AA9B;
		}     
  		.ui-dialog-titlebar
  		{
	  		-moz-border-radius-bottomleft: 0px;
	  		-webkit-border-bottom-left-radius: 0px;
	  		border-bottom-left-radius: 0px; 	  		
	  		-moz-border-radius-bottomright: 0px; 
	  		-webkit-border-bottom-right-radius: 0px;
	  		border-bottom-right-radius: 0px;
	  		border-width: 0px;
  		}
  		.ui-dialog-title
  		{
    		color: #FFFFFF;
    		font-weight: normal;
		}
  		.ui-dialog-titlebar-close 
  		{  
  		    display: none;
  		}

    </style>




<form id="LoginForm" name="LoginForm" action="LoginSubmit.do" autocomplete="off" method="post">
<input type="hidden" name="method" value="">
<input type="hidden" name="css" value="">
<script language="javascript">
    lockMenuclr('FFFFFF');



    if (nCurScrWidth <= 800)
        document.LoginForm.css.value = "css/scr800.css";
    else if (nCurScrWidth > 800 && nCurScrWidth < 1400)
        document.LoginForm.css.value = "css/scr800p.css";
    if (nCurScrWidth > 1400)
        document.LoginForm.css.value = "css/scr1400p.css";

    var pic1= new Image(100,25);
    pic1.src="images/p.gif";
    FRM='LoginForm';    
    var popuptitle = 'Active Session Warning'
</script>

<center>
<br><br><br><br><br>
<table cellpadding="5" cellspacing="0" border="0">
    <tr>
        <td valign="top">
            <TABLE cellpadding="0" cellspacing="0" border="0" width="100%">
                <TR style="line-height:0">
                    <TD valign="top" width="12" align="left">
                    <img src="images/blue_tl.gif" border="0" width="12" height="12"></td>
                    <TD valign="top" style="background:#FFFFFF url('images/blue_tm.gif') repeat-x center 50%; background-position:top"></TD>
                    <TD valign="top" width="12" align="right">
                    <img src="images/blue_tr.gif" border="0" width="12" height="12"></td>
                </TR>
                <TR>
                    <TD align="left" style="background-color:#FFFFFF; background-image: url('images/blue_ml.gif'); background-repeat: repeat-y; background-attachment: scroll; background-position: left">
                    <img src="images/blue_ml.gif" border="0" width="2" height="2"></td>
                    <td>
                        <table cellpadding="5" cellspacing="0" border="0" class="clsLogin">
                            <tr>
                                <td valign="top" style="text-align:center">
                                
                                    <img src="imagestore/urbn_tradestone2.gif" border="0"><br><br>
                                  <font color="#0070FF" size="2">&nbsp;For assistance please contact the Vendor Relations team. <br> Go to www.urbnvendor.com, General Information, to view the Contact list. <br> WARNING for best performance, please use Internet Explorer 9 or above <br>Your User ID is typically based on your five-digit vendor ID#, VEN-xxxxx-01</font>
                                </td>
                               <td align="center">
                                     <TABLE cellpadding="5" cellspacing="0" border="0" class="clsLogin">
                                        <TR>
                                            <TD  align="left" width="50">User ID</TD>
                                            <td><input id="user_id" type=text name="user_id" onChange="u(this)" onfocus="st('Please enter your user id')" onblur="clr()"/></td>
                                        </TR>
                                        <TR>
                                            <TD  align="left" width="50">Password</TD>
                                            <td><input id="pswd" type=password name="pswd" onfocus="st('Please enter your password')" onblur="clr()"/></td>
                                        </TR>
                                        
					           				<TD width="50">&nbsp;</TD>
                                            <TD><input style="width:100px;height:25px" id="formsubmit" type="submit" name="Submit" value="Submit">
                                            
                                            <br/><br/><a href="passwordreset.do" style="FONT-SIZE: 8pt;color: #808000;text-decoration:underline;">Forgot your password?</a></TD>
                                            
                                        </TR>
                                    </TABLE>
                                </td>
                            </tr>
                            <tr><td colspan="2" style="background:#FFFFFF;color:red;text-align:left"><ul>  </ul>
                                                                         

                                 </td>
                             </tr>
                             <tr><td colspan="2" style="background:#FFFFFF;color:green">
                                    <hr>
                                    Please make sure to disable popup blockers, otherwise some features of the application may not work properly.
                                 </td>
                             </tr>
                             <tr><td colspan="2" style="background:#FFFFFF;color:red">
                             <!--[if lt IE 9]>
 								<center>This application works well with Internet Explorer 9 and above.</center> 
							<![endif]-->
                                  
                                 </td>
                             </tr>
                        </table>
                    </td>
                    <TD align="right" style="background-color:#FFFFFF; background-image: url('images/blue_mr.gif'); background-repeat: repeat-y; background-attachment: scroll; background-position: right">
                    <img src="images/blue_mr.gif" border="0" width="2" height="2"></td>
                </tr>
                <TR style="line-height:0">
                    <TD valign="bottom" align="left">
                    <img src="images/blue_bl.gif" border="0" width="12" height="12"></td>
                    <TD valign="bottom" style="background:#FFFFFF url('images/blue_bm.gif') repeat-x center 50%; background-position:bottom"></TD>
                    <TD valign="bottom" align="right">
                    <img src="images/blue_br.gif" border="0" width="12" height="12"></td>
                </TR>
            </table>
        </td>
    </tr>
</table>
</center>
</div>
<script language="javascript">
    endLock();
    
    function refresh() 
    {          
    	var userid = document.forms[0].user_id.value;
        if (userid == null || userid.value == "" || userid.length == 0) {
            alert("Please enter a valid user id");
            return;
        }
        document.forms[0].method.value='captchaRefresh';
		document.forms[0].submit();
    }
</script>
</form>
</body>
</html>
