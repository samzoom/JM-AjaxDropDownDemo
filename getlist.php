<?php
/*
Copyright (C) 2012  Jeremy Morgan

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


$link = mysql_connect('localhost', 'root', 'password');
mysql_select_db('test', $link);

$sql = "SELECT itemname FROM item WHERE customerfk=" . $_REQUEST['idcustomer'];

$result = mysql_query($sql);

echo "<ul>";

while ($ary = mysql_fetch_array($result)){
	echo "<li>" . $ary['itemname'] . "</li>";
}

echo "</ul>";

?>