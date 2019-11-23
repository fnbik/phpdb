<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css?<?echo time();?>">
  <script type="text/javascript" src="js/script.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


	<div class="DB_DATA">
    <table>
      <tr class="addUser">
        <td>Email:<input id="Email" type="text"></td>
        <td>Username:<input  id="Username" type="text"></td>
        <td>Password:<input id="Password" type="text"></td>
        <td ><button id="AddButton">Add</button></td>
      </tr>
     </table>
		<table id="Table">
			<thead>
				<tr>
					<td>Id</td>
					<td>Email</td>
					<td>Username</td>
					<td>Password</td>
				</tr>
			</thead>
      <tbody>

            <?php
            include_once("config.php");
            $result = mysql_query('SELECT * FROM users_info');
            while ($row = mysql_fetch_array($result)) {
              echo '<tr onclick="SelectedRow('.$row["id"].')" class="data" id="row:'.$row["id"].'">';
              echo '<td>'.$row["id"].'</td>';
              echo '<td>'.$row["email"].'</td>';
              echo '<td>'.$row["username"].'</td>';
              echo '<td>'.$row["password"].'</td>';
              echo '</tr>';
            }
            mysql_close($connection);
            ?>



      </tbody>
		</table>



	</div>

	<form id="form1" style="display: none;">
        <label>Delete row?</label>
        <br/><button id="yes" onclick="Close()">yes</button>
        <button id="no" onclick="Close()">no</button>
    </form>

</body>
</html>
