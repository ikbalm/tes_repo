<?
include "Koneksi.PHP";

$hasil = mysql_query("insert into nilai (npm, kode, nilai, tanggal, keterangan) 
				VALUES( 	'" . $_REQUEST[T_NPM] . "',
 							'" . $_REQUEST[T_NAMA] . "',
							'" . $_REQUEST[T_NILAI] . "',
							'" . format_tgl($_REQUEST["T_Tanggal"]) . "', 
							'" . $_REQUEST[T_Keterangan] . "')");

if ($hasil)
{
	header('location:View_Nilai_Beda_Warna.PHP');
}
else
{
	echo "Proses Simpan Gagal";
}	


function format_tgl($input)
	{
		$part = split("/", $input);
		return $part[2] . "-" . $part[1] . "-" . $part[0];
	}

?>
