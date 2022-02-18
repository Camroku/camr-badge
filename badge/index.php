<!DOCTYPE html>
<html>
<head>
<style>
body, h1 {
  font-family: monospace;
  background: #262626;
  color: #bcbcbc;
  max-width: 53rem;
  margin: auto;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #444444;
  text-align: left;
  padding: 8px;
}

th {
	background-color: #303030;
}

tr:nth-child(even) {
  background-color: #1C1C1C;
}
</style>
<title>Camroku.TECH Badges</title>
</head>
<body>
<center>
<br/>
<h1>Camroku.TECH Badges</h1>
<br/>
<table>
<thead>
<tr>
<th>URL</th>
<th>Badge</th>
</tr>
</thead>
<tbody>
<?php
$images = glob("*.svg", GLOB_BRACE);
foreach ($images as $i) {
  echo "<tr><td><code>https://camroku.tech/badge/$i</code></td><td><img src='$i'/></td></tr>";
}
?>
</tbody>
</table>
<br/>
</center>
</body>
</html>