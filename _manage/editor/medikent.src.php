


<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="50">


				
					<tr>

						<td valign="top" height="50" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

	
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		
<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/editor/medikent.php">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

 	    <tr>

      <td valign="top" width="10%"><font face="Arial, Helvetica, sans-serif" style="font-size:12px">Kapak</font></td>

      <td width="20%">
		<input type="file" name="filename2" size="20" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></td>

    </tr>
	
	<tr>
  
    
<tr>

      <td align="left"  width="10%">Medikent Dosya Ad</td>

      <td width="90%"><input type="text" name="dosyaadi" size="70"></td>

    </tr> 
    
     <tr>

      <td valign="top" width="10%"><font face="Arial, Helvetica, sans-serif" style="font-size:12px">PDF Dosya</font></td>

      <td width="20%">
		<input type="file" name="filename" size="20" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></td><td width="70%"><input type="submit" value="Ekle" name="B1" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></td>

    </tr>
    
    
   
 

  </table>
</td></tr>
  
  </table></td> 
   <input type="hidden" name="ac_t" value="add">
   <input type="hidden" name="remhid" value="<?=$remhid?>">

</form>

						</td>
					</tr>
                    
                    
                    <tr><td>
                    
                    
                       <fieldset>

<legend>Sistemdeki Dergiler</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">




		<td nowrap width="1" bgcolor="#FF6C00" align="center"><b>Sayı</b></td>

	
			<td nowrap width="100%"  align="center" bgcolor="#FFC446"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zaman&#305;</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>

	</tr>

<?



$hs = 0;

$get_pdf = mysql_query("select id,medibaslik from medikent order by id desc limit 100");

while(list($fid, $baslik)=mysql_fetch_row($get_pdf)){


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';




echo'	<tr>

      <td bgcolor="'.$bgc.'" nowrap align="center">'.$baslik.'</td>
	  
	 

	
		 <td bgcolor="'.$bgc.'" nowrap align="center" valign="top">'.$fzaman.'</td>

				
		
		<td bgcolor="'.$bgc.'" nowrap align="center"  valign="top"><a href="/admin/_manage/editor/medikent.php?ac_t=del&remhid='.$remhid.'&remhidx='.$fid.'"><img src="/admin/_media/delete.gif" border="0"></a></td> 
	</tr>'; 



$hs = $hs+1;




}
if(($hs=="0") && ($q)){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Araman&#305;z sonucunda kay&#305;t bulunamam&#305;?t&#305;r.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

} else if(($hs=="0") && ($q=="")){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kay&#305;t bulunmamaktad&#305;r.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

}

?>

</table>

</td></tr><tr><td>


</td></tr></table></fieldset>


</td></tr>
				</table>
                
                



