<?php
	$clima=$_POST['clima'];
	$dias=$_POST['dias'];
	$pregunta="clima([".$clima.",".$dias."]).";
    $output = `swipl -s prolog.pl -g $pregunta -t halt.`;
    echo ($output);
?>