<?php
$fuiyoh="<aside>已加载所有码休</aside>";
if(!isset($_POST['nthmallow'])){header("location: index.php");die;}
else{

$mode=array('无分类码休','订单码休','留言码休','提问码休');
include_once 'in.su.php'; $n=$_POST['nthmallow'];
$sqli='SELECT * FROM `ordersmanager` WHERE `hidepost`= 0 order by `no` desc LIMIT '.$n.';';
$rslt=mysqli_query($in_su,$sqli);
$rslt1=mysqli_num_rows($rslt);
if($rslt1>0){
  while ($r=mysqli_fetch_assoc($rslt)) {
    $m=$r['mallowmode'];
    $contnt=$r['dscrb'];
// print
    echo "<article class='type".$m."' onclick='detail(".$r['no'].")'>";
    echo '<hgroup><h1>';
    if($r['ano']){
      echo "***";
    }else{
      echo $r['customer'];
    }
    echo '</h1><h2>'.$mode[$m].'</h2><h3>&nbsp;';
    echo gmdate('Y/m/d',28800+$r['jikan']);
    echo '&nbsp;</h3></hgroup><hr><h4>';
    echo $r['titl'];
    echo '</h4><p>';
    if(strlen($contnt)<=570){
      echo nl2br($contnt);
    }else{
      echo nl2br(substr($contnt,0,570)).'...';
    }
    echo '</p></article>';
  }

// 添加尾
  $sqli2='SELECT * FROM `ordersmanager` WHERE `hidepost`= 0 order by `no` desc LIMIT ' . ($n+9) . ';';
  $rslt2=mysqli_query($in_su,$sqli2);
  if(mysqli_num_rows($rslt2) === $rslt1){
    echo $fuiyoh;
  }else{
    echo '<button type="button" id="sendm" style="width:77vw">加载更多码休</button>';
  }
}else{
  echo $fuiyoh;
}


}
