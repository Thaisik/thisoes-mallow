<?php if(!isset($_GET['cess'])){header('location: index.php');die;}
$title='码休发送成功 | Thisoe';$p=0;include_once '_h.php'; ?>
<main style="margin:9vh 0 0;">
<p style="font-size:2rem;font-weight:bold">
您的<?php switch ($_GET['sent']) {
  case '1': echo '订单';break;
  case '2': echo '留言';break;}
?>码休发送成功</p><p style="font-size:1.2rem;margin-top:9pt">TSK会抽空查看的！</p>
<img src="http://thisoe.com/-1c.square.jpg" width='99px' alt="mumei reading" style="margin-top:18pt;border-radius:999pt">
</main>
<?php include_once '_f.php'; ?>
