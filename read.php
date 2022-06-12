<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

?>
 
 <table border="2" cellpadding="6" cellspacing="5">
 <caption>回答結果</caption>
<th>日付</th>
<th>名前</th>
<th>メールアドレス</th>
<th>性別</th>
<th>年齢</th>
<th>質問1</th>
<th>質問2</th>
<th>質問3</th>


<?php
$fp = fopen('data/data.txt',"r");        
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($nichi,$namae,$mail,$seib,$nenrei,$ques1,$ques2,$ques3) = explode(",",$line);
?>




<tr>
<td><?php print $nichi ?></td>
<td><?php print $namae ?></td>
<td><?php print $mail ?></td>
<td><?php print $seib ?></td>
<td><?php print $nenrei ?></td>
<td><?php print $ques1 ?></td>
<td><?php print $ques2 ?></td>
<td><?php print $ques3 ?></td>
</tr>


<?php 
    }
}

fclose($fp);
?>

<?php
$filename = 'data/data.txt';
// ファイルを読み込み変数に格納
$content = file_get_contents($filename);
 
// ファイルの中身を出力
 $word = "female";
 $female = substr_count( $content, $word );
 $cjson = json_encode($female); 

 $word = "male";
 $male = substr_count( $content, $word );
 $bjson = json_encode($male); 

 $word = "other";
 $other = substr_count( $content, $word );
 $ajson = json_encode($other); 

 $word = "age1";
 $ageone = substr_count( $content, $word );
 $djson = json_encode($ageone); 

 $word = "age2";
 $agetwo = substr_count( $content, $word );
 $ejson = json_encode($agetwo); 

 $word = "age3";
 $agethree = substr_count( $content, $word );
 $fjson = json_encode($agethree); 

 $word = "age4";
 $agefour = substr_count( $content, $word );
 $gjson = json_encode($agefour); 

 $word = "str1";
 $strone = substr_count( $content, $word );
 $hjson = json_encode($strone);

 $word = "str2";
 $strtwo = substr_count( $content, $word );
 $ijson = json_encode($strtwo); 

 $word = "str3";
 $strthree = substr_count( $content, $word );
 $jjson = json_encode($strthree); 

 $word = "str4";
 $strfour = substr_count( $content, $word );
 $kjson = json_encode($strfour); 

 $word = "str5";
 $strfive = substr_count( $content, $word );
 $ljson = json_encode($strfive); 

 $word = "str6";
 $strsix = substr_count( $content, $word );
 $mjson = json_encode($strsix); 

 $word = "str7";
 $strseven = substr_count( $content, $word );
 $njson = json_encode($strseven); 

 $word = "str8";
 $streight = substr_count( $content, $word );
 $ojson = json_encode($streight); 

 $word = "str9";
 $strnine = substr_count( $content, $word );
 $pjson = json_encode($strnine); 

 $word = "str10";
 $strten = substr_count( $content, $word );
 $qjson = json_encode($strten); 

 $word = "str11";
 $streleven = substr_count( $content, $word );
 $rjson = json_encode($streleven); 

?>


</table>


<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>

<h1>回答グラフ</h1>
<canvas id="myChart"></canvas>
<canvas id="myChart1"></canvas>
<canvas id="myChart2"></canvas>
<canvas id="myChart3"></canvas>
<canvas id="myChart4"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<script>

var a = JSON.parse('<?php echo $ajson; ?>'); //JSONデコード
var b = JSON.parse('<?php echo $bjson; ?>'); //JSONデコード
var c = JSON.parse('<?php echo $cjson; ?>'); //JSONデコード


var ctx = document.getElementById("myChart");

var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["女性", "男性", "その他"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [c,b,a]
      }]
    },
    options: {
      title: {
        display: true,
        text: '回答者性別'
      }
    }
  });
</script>

<script>

var d = JSON.parse('<?php echo $djson; ?>'); //JSONデコード
var e = JSON.parse('<?php echo $ejson; ?>'); //JSONデコード
var f = JSON.parse('<?php echo $fjson; ?>'); //JSONデコード
var g = JSON.parse('<?php echo $gjson; ?>'); //JSONデコード

var ctx = document.getElementById("myChart1");

var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["20-29歳まで", "30-39歳まで", "40-49歳まで","50歳-59歳まで"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [d,e,f,g]
      }]
    },
    options: {
      title: {
        display: true,
        text: '回答者年齢'
      }
    }
  });
       
       
</script>

<script>

var h = JSON.parse('<?php echo $hjson; ?>'); //JSONデコード
var i = JSON.parse('<?php echo $ijson; ?>'); //JSONデコード
var j = JSON.parse('<?php echo $jjson; ?>'); //JSONデコード


var ctx = document.getElementById("myChart2");

var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["社内飲み会の幹事役になった時", "歓送迎会の準備が大変な時", "上司や先輩に「さくっと一杯いこうか」と言われて全然一杯で終わらない時"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [h,i,j]
      }]
    },
    options: {
      title: {
        display: true,
        text: '仕事に関連してるけど厳密には仕事ではないっちゃあない割とストレスを感じるシーン'
      }
    }
  });
       
       
</script>

<script>

var k = JSON.parse('<?php echo $kjson; ?>'); //JSONデコード
var l = JSON.parse('<?php echo $ljson; ?>'); //JSONデコード
var m = JSON.parse('<?php echo $mjson; ?>'); //JSONデコード


var ctx = document.getElementById("myChart3");

var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["上司・先輩「言われなくてもやっとけよ」＝＞後日「勝手なことするな！」", "上司・先輩「分からないことは聞いてね」＝＞後日「自分で考えろ！」", "上司・先輩「なんで失敗したんだ」＝＞理由述べる＝＞「言い訳するな！」"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [k,l,m]
      }]
    },
    options: {
      title: {
        display: true,
        text: '新人社員だった時ストレスを感じるシーン'
      }
    }
  });
       
       
</script>

<script>

var n = JSON.parse('<?php echo $njson; ?>'); //JSONデコード
var o = JSON.parse('<?php echo $ojson; ?>'); //JSONデコード
var p = JSON.parse('<?php echo $pjson; ?>'); //JSONデコード
var q = JSON.parse('<?php echo $qjson; ?>'); //JSONデコード
var r = JSON.parse('<?php echo $rjson; ?>'); //JSONデコード

var ctx = document.getElementById("myChart4");

var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["話がほんまにおもんない人と長時間一緒におらなあかん時", "横断歩道の信号がなかなか青にならへん時", "東京の人から「面白いこと言ってよ」と無茶振りされてすべった時","関東人が関西弁を変なイントネーションで使ってる時","関西人が東京に魂を売って標準語喋ってる時"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [n,o,p,q,r]
      }]
    },
    options: {
      title: {
        display: true,
        text: '【番外編】関西人限定回答：ストレスめっちゃ感じてまう瞬間'
      }
    }
  });
       
       
</script>

</body>
</html>
