 <?
//membuat array multi dimensi
//multi_array.php
$buku=@array(array(Judul=>"Membuat Web Forum",
Pengarang=>"Erwin",
ISBN=>"112-09-3452",
),
array(Judul=>"menggunakan MySQL",
Pengarang=>"saputro",
ISBN=>"987-09-3421",),
array(Judul=>"menggunakan MySQL",
Pengarang=>"Nuning",
ISBN=>"987-09-3421",),
array(Judul=>"menggunakan ODBC",
Pengarang=>"Erwin",
ISBN=>"982-09-7633",));
echo"<b> Membuat Array Multidimensi </b><br><br>";
foreach($buku as $val)
{ 
foreach($val as $key=>$final_val) 
{   print "$key: $final_val<br>";  }
print"<br>";
}
?>