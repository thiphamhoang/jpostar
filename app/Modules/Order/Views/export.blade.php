<?PHP
  namespace Chirp;

  function map_colnames($input)
  {
    global $colnames;
    return isset($colnames[$input]) ? $colnames[$input] : $input;
  }

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }
 
  // file name for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
  $out = fopen("php://output", 'w+'); fwrite($out, "\xEF\xBB\xBF");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      $firstline = array_map(__NAMESPACE__ . '\map_colnames', array_keys($row));
      fputcsv($out, $firstline, ',', '"');
      $flag = true;
    }
    $firstline = array_map(__NAMESPACE__ . '\map_colnames',  array_values($row));
      fputcsv($out, $firstline, ',', '"');
  }

  exit;
?>