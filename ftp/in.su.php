<?php
// 1: server;  2: username;  3: Illi;  4: dbname;  P: port
$D1="";
$D2="";
$D3="";
$D4="";
$DP=3306;

$in_su = mysqli_connect($D1,$D2,$D3,$D4,$DP) or err();

function err(){header('location: post.error.php?err=db_initconn_die');die;}
