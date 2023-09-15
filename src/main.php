<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u1 = new Usuario("Huginho", 12, "Nenhuma");

echo('<table>');
echo('<tr>');
echo('<td>');echo($u1->getname());echo('</td>'); echo ('<td>'); echo ($u1->getAge());echo('</td>'); echo ('<td>'); echo ($u1->getFunc());echo('</td>');
echo('</tr>');
echo('</table>');


?>