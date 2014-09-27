<?php
$con = mysql_connect("localhost","peter","");
mysql_select_db("id",$con);
$txt=$_GET[id];
$n=strlen($txt);
echo substr($txt,0,3),"<br>";
echo substr($txt,$n-3,3),"<br>";
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
  echo substr($txt,($n+1)/2,2),"<br>";  
  mysql_query("INSERT INTO ids(id) VALUES($_GET[id])");
}
?>
