<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
$yourArr = [];
$yourArrl = [];
$zArr =[];
	$a = array(
"Africa" => array("Panthera pardus", "Loxodonta africana", "Elephantidae"),
"Russia" => array("Ursus arctos", "Canis lupus", "Lepus"),
"Australia" => array("Macropus", "Phascolarctos cinereus"),
"Amerika" => array("Vulpes velox", "Procyon")
);
PRINT_R ($a);
echo "</br></br>Двойные названия:</br>";
foreach ($a as $key => $value) 
{
  foreach ($value as $v) 
  {
    if (count(explode(" ", $v)) > 1)
    {
      $yourArr[]=$v;
    }
  }
}
print_r($yourArr);
echo "</br></br>Перемешанные двойные названия:</br>";
foreach( $yourArr as $key => $value)
{
    $arr = explode(" ",$value);
    $yourArr1[]=$arr[0];
}

shuffle($yourArr1);

foreach( $yourArr as $key => $value)
{
    $arr = explode(" ",$value);
      $yourArr2[]=$arr[1];
}

shuffle($yourArr2);

foreach( $yourArr as $key => $value)
{
  $segments[0] = $yourArr1[$key];
  $segments[1] = $yourArr2[$key];
  $yourArrl[] = implode(' ', $segments);
}
print_r($yourArrl);

?>
</body>
</html>