<?php

$num=3;
$pageNum=40000;
$total=100000;
$startTime = time();
for($i=1;$i<=$num;$i++){
	$process = new swoole_process("aa");
	$process->start();
	$start=($i-1) * $pageNum;
	$end = $start+$pageNum;
	if($end >= $total){
		$end = $total;
	}
	$arr=array('start'=>$start,"end"=>$end);
	$str = serialize($arr);
	$process->write($str);
}
$endTime = time();
echo $endTime-$startTime;

function aa($worker){
	$info =  $worker->read();
	$arr = unserialize($info);
	$start = $arr['start'];
	$end = $arr['end'];
    $conn = mysqli_connect("127.0.0.1", "root", "123456", "ttt");
	$sql = "select * from user where id >$start and id <= $end";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        if ($id % 2 == 0) {
            $sql = "update user set `status`=2 where id= $id";
            mysqli_query($conn, $sql);
        }
    }
}

?>