<?php
$DB_USER='DB_USER';
$DB_PASSWD='PASSWORD';
$DB_NAME='DATABASE';
$DB_SERVER='localhost';
$TABLE='TABLE_NAME';


$datum = date("Y-m-d");  // datum[CZ] = date[EN]
$cas = date("H:i:s");    // cas[CZ] = time[EN]

# 10.10.2.107 is Wattrouter IP
$url='http://10.10.2.107/stat_day.xml';

$xml = simplexml_load_file($url) or die("feed not loading");
# Alternatives:
# $xml = simplexml_load_string(file_get_contents('http://10.10.2.107/stat_day.xml'));
# $xml = simplexml_load_file('http://10.10.2.107/stat_day.xml');

$date=$xml->SDD0; #Aktualni Dnesni Datum [CZ] = Today's Date [EN]
$date_minus_1=$xml->SDD1; #Vcerejsi den[CZ] // Yesterday[EN]
$SDS1=$xml->SDS1; #L1 prebytek[CZ] / surplus[EN] (oranzova[CZ] / orange[EN])
$SDH1=$xml->SDH1; #L1 spotreba[CZ] / consumption[EN] VT (cervena[CZ] / red[EN])
$SDL1=$xml->SDL1; #L1 spotreba[CZ] / consumption[EN] NT (modra[CZ] / blue[EN])
$SDP1=$xml->SDP1; #L1 vyroba[CZ] / produced[EN] (fialova[CZ] / purple[EN])
$SDS2=$xml->SDS2; #L2 prebytek[CZ] / surplus[EN] (oranzova[CZ] / orange[EN])
$SDH2=$xml->SDH2; #L2 spotreba[CZ] / consumption[EN] VT (cervena[CZ] / red[EN])
$SDL2=$xml->SDL2; #L2 spotreba[CZ] / consumption[EN] NT (modra[CZ] / blue[EN])
$SDP2=$xml->SDP2; #L2 vyroba[CZ] / produced[EN] (fialova[CZ] / purple[EN])
$SDS3=$xml->SDS3; #L3 prebytek[CZ] / surplus[EN] (oranzova[CZ] / orange[EN])
$SDH3=$xml->SDH3; #L3 spotreba[CZ] / consumption[EN] VT (cervena[CZ] / red[EN])
$SDL3=$xml->SDL3; #L3 spotreba[CZ] / consumption[EN] NT (modra[CZ] / blue[EN])
$SDP3=$xml->SDP3; #L3 vyroba[CZ] / produced[EN] (fialova[CZ] / purple[EN])
$SDS4=$xml->SDS4; #CELKEM prebytek[CZ] / surplus[EN] (oranzova[CZ] / orange[EN])
$SDH4=$xml->SDH4; #CELKEM spotreba[CZ] / consumption[EN] VT (cervena[CZ] / red[EN])
$SDL4=$xml->SDL4; #CELKEM spotreba[CZ] / consumption[EN] NT (modra[CZ] / blue[EN])
$SDP4=$xml->SDP4; #CELKEM vyroba[CZ] / produced[EN] (fialova[CZ] / purple[EN])
$SDO1=$xml->SDO1; #SSR1 (Bojler[CZ] // boiler[EN] L1)
$SDO2=$xml->SDO2; #SSR2 (Bojler[CZ] // boiler[EN] L2)
$SDO3=$xml->SDO3; #SSR3 (Bojler[CZ] // boiler[EN] L3)
$SDO4=$xml->SDO4;
$SDO5=$xml->SDO5;
$SDO6=$xml->SDO6;
$SDO7=$xml->SDO7;
$SDO8=$xml->SDO8;
$SDO9=$xml->SDO9;
$SDO10=$xml->SDO10;
$SDO11=$xml->SDO11;
$SDO12=$xml->SDO12;
$SDO13=$xml->SDO13;
$SDO14=$xml->SDO14;
$SDI1=$xml->SDI1; #ANDI1 vyroba[CZ] / produced[EN] L1
$SDI2=$xml->SDI2; #ANDI2 vyroba[CZ] / produced[EN] L2
$SDI3=$xml->SDI3; #ANDI3 vyroba[CZ] / produced[EN] L3
$SDI4=$xml->SDI4; #ANDI4 vyroba[CZ] / produced[EN] 

 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = new mysqli("web05.int.dc5.cz","fve","L-zeCeWcOIIS8m2T","fve");

global $mysqli;
$sql="INSERT INTO `wattrouter_stat_day` (`datum`,`cas`,`sds1`, `sdh1`, `sdl1`, `sdp1`, `sds2`, `sdh2`, `sdl2`, `sdp2`, `sds3`, `sdh3`, `sdl3`, `sdp3`, `sds4`, `sdh4`, `sdl4`, `sdp4`, `sdo1`, `sdo2`, `sdo3`, `sdo4`, `sdo5`, `sdo6`, `sdo7`, `sdo8`, `sdo9`, `sdo10`, `sdo11`, `sdo12`, `sdo13`, `sdo14`, `sdi1`, `sdi2`, `sdi3`, `sdi4`)VALUES ('$datum','$cas','$SDS1','$SDH1','$SDL1','$SDP1','$SDS2','$SDH2','$SDL2','$SDP2','$SDS3','$SDH3','$SDL3','$SDP3','$SDS4','$SDH4','$SDL4','$SDP4','$SDO1','$SDO2','$SDO3','$SDO4','$SDO5','$SDO6','$SDO7','$SDO8','$SDO9','$SDO10','$SDO11','$SDO12','$SDO13','$SDO14','$SDI1','$SDI2','$SDI3','$SDI4')";


  if (mysqli_query($db, $sql)) {
      echo "Vlozeni dat do DB proběhlo vpořádku [CZ] <br> Data were inserted into DB successfully.[EN]";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
