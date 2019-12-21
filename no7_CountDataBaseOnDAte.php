<?php 

$Query =" SELECT id,
         COUNT(IF(YEAR(order_placed_date)=2019)) AS jumlah_Data,
         SUM(IF(YEAR(order_placed_date)=2019))  AS jumlah_Data) 
         FROM 
         GROUP BY email";
 ?>