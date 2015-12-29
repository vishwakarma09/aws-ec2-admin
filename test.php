
<?php

class ooo{

public function test(){
$cmd = 'bash controller.sh ec2-describe-regions';
$output = array();
exec($cmd, $output, $returnval);
print_r($output);
echo $returnval;
}

}

$obj = new ooo();
$obj->test();

?>
