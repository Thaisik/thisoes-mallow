<?php
if(!isset($_GET['mallow'])){header("location: index.php?null_from_detail");die;}else{

$title='码休详情 | Thisoe';$p='d';include_once '_h.php';
?>
  <div class="svgtotop" id='totop' onclick="t()" style="border-color:#555;display:none;"><svg enable-background="new 0 0 32 32" height="39px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="39px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18.221,7.206l9.585,9.585c0.879,0.879,0.879,2.317,0,3.195l-0.8,0.801c-0.877,0.878-2.316,0.878-3.194,0  l-7.315-7.315l-7.315,7.315c-0.878,0.878-2.317,0.878-3.194,0l-0.8-0.801c-0.879-0.878-0.879-2.316,0-3.195l9.587-9.585  c0.471-0.472,1.103-0.682,1.723-0.647C17.115,6.524,17.748,6.734,18.221,7.206z" fill="#515151"/></svg>
    <script> t = (function(){ document.body.scrollTop = 0; document.documentElement.scrollTop = 0;}); window.onscroll = (function(){document.getElementById('totop').style.display = "block";}); closetab = (function(){window.top.close();}); </script></div>

<?php include_once 'in.su.php';
$sqlm='SELECT * FROM `ordersmanager` WHERE `no`='.$_GET["mallow"].';';
$rt=mysqli_query($in_su,$sqlm);
if(mysqli_num_rows($rt)>0){
  while ($r=mysqli_fetch_assoc($rt)) {

  if($r['hidepost']){
    echo '<div class="detailbody"><article id="detail"><h1 style="margin:1rem auto;line-height:3">✖ 本条码休非公开 ✖</h1>';
  }else{
    $m=$r['mallowmode'];
    echo '<div class="detailbody typed'.$m.'"><article id="detail"><h1>';
    echo $r['titl'];echo '</h1><p class="namae">';
    if($r['ano']){echo "匿名发布";}
    else{echo "投递：";echo $r['customer'];}
    if (!$r['hidemail']){
      echo "<cite>✉ "; echo $r['cmail']; echo "</cite>";
    }
    echo "</p><p class='mode'>类别：";
    switch ($m) {
      case 0: echo "无分类码休"; break;
      case 1: echo "订单"; break;
      case 2: echo "留言"; break;
      case 3: echo "提问"; break;
    }
    echo "</p><p class='mdetail'>";
    echo nl2br($r['dscrb']);
    echo "</p><p class='time'>&nbsp;";
    echo gmdate('发布于 Y年m月d日 H:i:s',28800+$r['jikan'])."&nbsp;</p>";
  }

  }
}else{
  echo '<div class="detailbody"><article id="detail"><h1 style="margin:1rem auto;line-height:3">✖ 本条码休不存在 ✖</h1>';
}
?>
<div class="closewin" onclick="closetab()"><svg clip-rule="evenodd" fill-rule="evenodd" fill="rgba(0,0,0,0.7)" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero"/></svg></div>
</article></div>
<footer style="height:7rem"><p><a href="http://thisoe.com/thisoe/proj/thisoes-mallow/index.php">西索码休</a><br><a href="http://thisoe.com">Thisoe主页</a><br><a href="http://illiase.ltd">伊利亚斯</a><br><cite>津ICP备2022006275号</cite></p></footer>

<?php }
