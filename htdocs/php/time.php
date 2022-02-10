<?php
$time=11;
if($time<12):
echo "good morning";
elseif($time<14 && $time >12):
echo "noon";
elseif($time<18 && $time >14):
echo "good evening";
elseif($time==12):
echo "midnight";
else:
echo "good night";
endif;
?>