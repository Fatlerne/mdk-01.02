<?php
function getTable($cols=9,$rows=9,$color="blue")
{
    echo "Таблица умножения";
    echo "<table bordercolor=\"$color\" border=\"1\">";
        for($i=1;$i<=$rows;$i++)
            {
            echo "<tr>";
                for($j=1;$j<=$cols;$j++)
                    {
                    echo "<td>".$i*$j."</td>";
                    }
                        echo "</tr>";
            }
            echo "</table>";
}
getTable(6,7);
getTable();
getTable(10,10,"orange");
