<?php $title='西索码休 | Thisoe';$p=2;include_once '_h.php'; ?>
<script>$(document).ready(function(){

  let cc=3;
  const morems = (function() {
    cc=cc+9;
    $("#allmallows").load("_newrow.inc.php", {nthmallow:cc}); console.log("TSK New_Mallows = "+cc+" loaded");
  });
  morems();
  $(document).on('click','#sendm',function() {
    console.log("TSK Loading New_Mallows...");
    morems();
  });

  detail=(function(mallow){
    window.open('detail.php?mallow='+mallow, '_blank');
  });
  t = (function(){ document.body.scrollTop = 0; document.documentElement.scrollTop = 0;});

});</script>
<div class="svgtotop" onclick="t()"><svg enable-background="new 0 0 32 32" height="39px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="39px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18.221,7.206l9.585,9.585c0.879,0.879,0.879,2.317,0,3.195l-0.8,0.801c-0.877,0.878-2.316,0.878-3.194,0  l-7.315-7.315l-7.315,7.315c-0.878,0.878-2.317,0.878-3.194,0l-0.8-0.801c-0.879-0.878-0.879-2.316,0-3.195l9.587-9.585  c0.471-0.472,1.103-0.682,1.723-0.647C17.115,6.524,17.748,6.734,18.221,7.206z" fill="#515151"/></svg></div>

  <div id='allmallows'>

    <article class="type2">
      <hgroup>
        <h1>TSK</h1><h2>留言码休</h2><h3>2022年11月1日</h3>
      </hgroup>
      <hr><h4>这是一篇假码休的标题</h4>
      <p>
        一段一句话长的留言码休内容。
      </p>
    </article>
    <article class="type1">
      <hgroup>
        <h1>TSK的超长名字溢出显示测试进行中所以要写非常长的名字测试效果</h1><h2>订单码休</h2><h3>2022年11月2日</h3>
      </hgroup>
      <hr><h4>这是一篇假的订单的标题：溢出测试进行中！超长超长的标题</h4>
      <p>
        多行溢出ellipsis测试中，放篇劳伦伊松里伊利亚斯罢<br><br>“无人爱苦，亦无人寻之欲之，乃因其苦……”
<br>　　劳伦伊松里伊利亚斯，向西索之果绽放。其浆味万千，也不键入高峰，以为体乏却将弧形容和杯匙分载，甘溪汩下。客机于嵌珖纸筒，如霓型，就陷入伊松奈柏杨。时端灵器适时用紫麻加粽、混在极度凌钢，同一碎砂南极化，并倾杯匙。轻塑线被UB勾芡但久久未平。劳伦瓮，即以兹容和白砾。逢此八报可扳副甲，遂很有齿数繁猖，由得鸥镜鸢铭，实乃技掌宛材夹版焉。顾后足，肇情没灭，彼氏乐方望渗皱粗裳下西索纲。收主误派士到东洲，仪毁，隋匠郭昊书长案与黔匠，漂筏皂旗执北信。
<br>　　刻卷岩诉，坐粗裳英汽边。三箭无次汽纶边。席永愧，产给事号，多番乱。无施。核个精班。生跃触者，数虚秽啮敏而速，名电啮，把尔邦稀矿发壹皇。前塞等情倒原王绅官。整内理过藕莴，饿友应罐及返。本落为译劳伦矣。
      </p>
    </article>
    <article class="type3">
      <hgroup>
        <h1>TSK</h1><h2>无分类码休</h2><h3>2022年11月1日</h3>
      </hgroup>
      <hr><h4>忘选分类时的码休显示</h4>
      <p>
        前端颜色测试
      </p>
    </article>
    <hr style='margin-top:18pt;border-color:#999' id='aside'><aside>已加载所有码休</aside>
  </div>
<?php include_once '_f.php'; ?>
