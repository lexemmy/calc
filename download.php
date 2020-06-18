<?PHP
  
  namespace Chirp;
  session_start();

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  if(!isset($_SESSION['package']) || !isset($_SESSION['capital']) || !isset($_SESSION['capital'])){
    echo "<script type='javascript'> alert('I am an alert box!');</script>";
  }
  $package = $_SESSION['package'];
  $capital = $_SESSION['capital'];
  $month = $_SESSION['month'];
  /*$interest = $_SESSION['interest'];
  $roi = $_SESSION['roi'];
  $expectroi = $_SESSION['expectedroi']; */

  $data = array(
    array("Package" => $package, "Capital" => $capital, "Duration" => $month)
    //"Interest" => $interest, "Gain" => $expectroi, "Expected Return" => $roi, )
  );

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "piggyvestROI" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\n";
  }

  exit;
?>