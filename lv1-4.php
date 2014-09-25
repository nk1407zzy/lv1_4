<?php
$txt=$_GET["id"];
$n=strlen($txt);
echo substr($txt,0,3);
echo substr($txt,$n-3,3);
//  LV 1
$k=0;
for($i=0;$i<$n;$i++)
{
  if(!( (substr($txt,$i,1)>='0') && (substr($txt,$i,1)<='9') ))
    $k=1;
}
if(($n!=18) || ($k))
{
  echo "FALSE";
  echo "<br>";
}
else
{
  echo substr($txt,($n+1)/2,2);    // LV 2
  $con = mysql_connect("localhost","peter","");
  mysql_query("CREATE DATABASE ID",$con);
  INSERT INTO ID
    VALUES ("$txt");    // LV 3
  echo SELECT column_name(s) FROM ID;  // LV 4
}
?>
