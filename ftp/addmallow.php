<?php $title='西索码休 | Thisoe';$p=3;include_once '_h.php'; ?>
<div class="bacolor" id='bacolor'></div>

<form action="_post.php" method="post">
<div class="addmallow mm">
  <button type="button" onclick="mmode(1)" id='m1'>下订单</button>
  <button type="button" onclick="mmode(2)" id='m2'>发留言</button>
  <input id="modepost" style="visibility:hidden;width:0;height:0;" type="number" name="mode" value="0" maxlength="2">
</div><div class="addmallow">
  <label for="namae" class="inplabel" title="限39字"><span>*</span>您的<span id='namaspan'></span>昵称&nbsp;</label>
  <input id="namae" type="text" name="namae" required="required" maxlength="39" title="限39字">
  <div class="mallowcb">
    <input id="anony" type="checkbox" name="isano" value=1>
    <label for="anony" class="chklabel">不公开，仅TSK可见</label>
  </div>
</div><div class="addmallow">
  <label for="mail" class="inplabel"><span id='mailreq'>*</span>邮箱&nbsp;</label>
  <input id="mail" type="email" name="mail" required="required" maxlength="198">
  <div class="mallowcb">
    <input id="hidemail" type="checkbox" name="hideemail" value=1>
    <label for="hidemail" class="chklabel">不公开，仅TSK可见</label>
  </div>
</div><div class="addmallow">
  <label for="tel" class="inplabel">手机号（保密）</label>
  <input id="tel" type="tel" name="phn" placeholder="（可空）" title="“少于15位的纯数字”" maxlength="15" pattern="[0-9]+">
</div>

<div class="addmallow">
  <label for="title" class="inplabel" title="限98字"><span>*</span>码休标题&nbsp;</label>
  <input id="title" type="text" name="mstitle" required="required" maxlength="98" title="限98字" style="width:98%;padding:5pt 9pt;border-radius:3pt;border:1pt solid #333;background:#fffa;font-size:1.2rem">
</div><div class="addmallow">
  <label for="ms" class="inplabel" title="限5万字">码休正文</label>
  <textarea id="ms" name="msml" maxlength="50000" title="限5万字"></textarea>
</div><div class="addmallow"><div class="mallowcb">
  <input id="mask" type="checkbox" name="mask" value=1>
  <label for="mask" class="chklabel">不在“码休一览”公开此贴</label>
</div></div>
<div class="mallowcb">
  <input id="mmasked" type="checkbox" name="mmasked" value=1>
  <label class="chklabel" for="mmasked">同意<a href="about.php?d#declare" target="_blank" style="color:blue">码休使用条款及声明</a></label>
</div>
<button type="submit" name="ikz" class="sendm" id='ss' disabled>发送<span id='sendspan'></span>码休</button>


<script defer>
  mmode = (function(modeno){
    document.getElementById('modepost').value = modeno;
    let bc = document.getElementById('bacolor').style;
    let m1 = document.getElementById('m1').style; let m2 = document.getElementById('m2').style;
    let email = document.getElementById('mail'); let mailr = document.getElementById('mailreq').style;
    let nm = document.getElementById('namaspan'); let ssp =  document.getElementById('sendspan');
    switch (modeno) {
      case 1: ssp.innerHTML = "订单";
        bc.backgroundColor = "#F7BE87"; m1.borderStyle = "inset"; m2.borderStyle = "outset";
        email.required = true; mailr.visibility = "visible"; email.placeholder = ""; nm.innerHTML = "姓名或";
        break;
      case 2: ssp.innerHTML = "留言";
        bc.backgroundColor = "#C7B7EC"; m2.borderStyle = "inset"; m1.borderStyle = "outset";
        email.required = false; mailr.visibility = "hidden"; email.placeholder = "（可空）"; nm.innerHTML = "";
        break;
      }
  })
  document.getElementById('mmasked').addEventListener('change', function() { if (this.checked) { document.getElementById('ss').disabled = false; } else { document.getElementById('ss').disabled = true; }
});
</script>

</form>

<?php include_once '_f.php'; ?>
