<?php
if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
              header("Content-type: application/xhtml+xml;charset=utf-8"); 
} else {
          header("Content-type: text/xml;charset=utf-8");
}
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<rows>";
echo "<page>".$page."</page>";
echo "<total>".$total_pages."</total>";
echo "<records>".$count."</records>";
  
// be sure to put text data in CDATA



for($i=0;$i<sizeof($result);$i++){
echo "<row id='".$result[$i]['Apple']['id']."'>";            
echo "<cell>". $result[$i]['Apple']['id']."</cell>";
echo "<cell>". $result[$i]['Apple']['name']."</cell>";
echo "</row>";
}
echo "</rows>"; 


?>