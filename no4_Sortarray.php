<?php 

$data1=[
	['d','c','e','b','a'],
	['k','i','j']
      ];

$data2=[
		['g','h','i','j'],
		['a','c','b','e','d'],
		['g','e','f']
	   ];
array_multisort($data1[0],SORT_ASC,SORT_STRING,$data1[1],SORT_DESC,SORT_STRING);
var_dump($data1);

//note :I can't do that cause array size $data[0] !=$data[1] so that when using function array_multisort will appear Array sizes are inconsistent in 