<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>:: Sistem Informasi Penilaian Mahasiswa ::</title> 
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>

 <?

include "koneksi.php";
 
?>

<table width="45%" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td colspan="2"><div align="center"><img src="images/header-bg.jpg"></div></td>
  </tr>
  <tr>	
	<td>


 		<table  border=0  align=center cellpadding=4 cellspacing=4 width=75%>
            <tr>
                <td colspan=3>&nbsp;</td>
            </tr>  
            <tr> 
                <td width=200 height=102 > 
                    <div align=center> 
                      <p><a href="View_Biodata_Beda_Warna.php"><img border=0 src=images/menu.png width=70 height=70></a>
                      <a href=View_Biodata_Beda_Warna.php><br><font size=2 face=Tahoma>Biodata </font></a></p>
                    </div>
                </td>
                <td width=200 height=98 > 
                    <div align=center> 
                      <p><a href=View_Matakuliah_Beda_Warna.php><img border=0 src=images/CardfileSH.png width=70 height=70></a>
                      <a href=View_Matakuliah_Beda_Warna.php><br><font size=2 face=Tahoma>Mata Kuliah</font></a></p>
                    </div>
                </td>
                <td width=200 height=98 >                
                    <div align=center> 
                      <p><a href=View_Nilai_Beda_Warna.php><img border=0 src=images/langmanager.png width=70 height=70></a>
                      <a href=View_Nilai_Beda_Warna.php><br><font size=2 face=Tahoma>Penilaian </font></a></p>
                     </div> 
                </td>	 
            </tr>
            <tr>
                <td colspan=3>&nbsp;</td>
            </tr>
            <tr>
                <td colspan=3><center><font size=6 face=Tahoma color=blue><div id=output></div></font></center></td>
            </tr>
            <tr>
                <td colspan=3>&nbsp;</td>
            </tr>
		</table>

 	</td>
  </tr>
  <tr>
		<td colspan=3><div align=center><font color=red size=2 face=tahoma>Rekomendasi Web Browser : Mozilla Firefox, Resolusi : 1024 x 728 </font></div></td>
  </tr>
  <tr bgcolor=#0033CC> 
        <td height=30 colspan=3> 
          <center>
            <font color=white size=2 face=tahoma>.:: Copyright &copy; 2010 Developer by Bal Bal::. </font>
        </td>
   </tr>	
 </table>
</body>
</html>
