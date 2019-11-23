<?php
include_once("config.php");
if(isset($_POST["Erase"]) && strlen($_POST["Erase"]) > 0 && is_numeric($_POST["Erase"])) {
  $RowId = filter_var($_POST["Erase"], FILTER_SANITIZE_NUMBER_INT);
  mysql_query('DELETE FROM users_info WHERE id ='.$RowId);
  mysql_close($connection);
}
elseif(isset($_POST["Insert"]) && strlen($_POST["Insert"]) > 0) {
  $arr = preg_split('[-]', $_POST["Insert"]);
  $Str = "(NULL,'".$arr[0]."', '".$arr[1]."','".$arr[2]."');";
  //$Str = "(NULL, ".$_POST["Insert"].");";
  mysql_query("INSERT INTO `users_info` (`id`, `username`, `password`, `email`) VALUES ".$Str);
  $ID = mysql_insert_id();
  echo '<tr onclick="SelectedRow('.$ID.')" class="data" id="row:'.$ID.'">';
  echo '<td>'.$ID.'</td>';
  echo '<td>'.$arr[2].'</td>';
  echo '<td>'.$arr[0].'</td>';
  echo '<td>'.$arr[1].'</td>';
  echo '</tr>';
  mysql_close($connection);
}
?>
