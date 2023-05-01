<?php
if(!(isset($_POST['ikz']) && isset($_POST['mmasked']))){header('location: post.error.php?err=w3_katte_visit');die;}else{
$mode=$_POST['mode'];
$c=$_POST['namae'];
$m=$_POST['mail'];
$p=$_POST['phn'];
$t=$_POST['mstitle'];
$d=$_POST['msml'];
if(isset($_POST['isano'])){$a=1;}else{$a=0;}
if(isset($_POST['hideemail'])){$h=1;}else{$h=0;}
if(isset($_POST['mask'])){$po=1;}else{$po=0;}

include_once 'in.su.php'; // err=db_initconn_die
  $sqlc="INSERT INTO `ordersmanager`(`mallowmode`,`customer`,`cmail`,`cphonen`,`titl`,`dscrb`,`ano`,`hidemail`,`hidepost`,`jikan`) VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? );";
  $typ='isssssiiii';
$stmt=mysqli_stmt_init($in_su);
if(!mysqli_stmt_prepare($stmt,$sqlc)){ //失败时返回 0
  mysqli_stmt_close();header('location: post.error.php?err=db_prep_die');die;
}
mysqli_stmt_bind_param($stmt,$typ, $mode,$c,$m,$p,$t,$d,$a,$h,$po,time());
$rslt = mysqli_stmt_execute($stmt);
if($rslt===false){
  header('location: post.error.php?err=db_exec_die');die;
}else{
  header('location: suc.php?cess&sent='.$mode);exit;
}

}
