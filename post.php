<html>
<head>
<meta charset="utf-8">
<title>アンケート調査</title>

<style>
	#gazou1{
		width:300px;
		length: 300px;
	}
	#gazou2{
		width:300px;
		length: 300px;
	}
	#container{
		margin: 0 auto;
		padding:20px;
	}
	#ga{
		text-align: center;
		justify-content: center;
	}
	#lin{
		display: inline-block;
	}
	ul {
list-style:none;
}

span.dan {
float:left;
}

span.dan2 {
display: block;
margin-left: 110px;
}


</style>

</head>
<body>
	<h1 style="font-size: 50px;text-align: center;font-weight: bold;padding-buttom:10px;">企業戦士あるあるアンケート</h1>
	<p style="font-size: 20px;text-align: center;font-weight: bold;">24時間戦う皆様、ぜひ回答よろしくお願いしまっする</p>
	<ul id="ga">
		<li id="lin"><img id="gazou1" src="inc/business_man_macho.png" alt=""></li>
		<li id="lin"><img id="gazou2" src="inc/business_woman_macho.png" alt=""></li>
	</ul>
<form action="write.php" method="post">
<div id="container">
	<ul>
		<li>お名前: <input type="text" name="name"></li>
		<li>EMAIL: <input type="text" name="mail"></li>
		<li>
			<label for="sex">性別:</label>
			<select name="sex">
				<option value="female">女性</option>
				<option value="male">男性</option>
				<option value="other">その他</option>
			</select>
		</li>
		<li>
			<label for="age">年齢:</label>
			<select name="age">
				<option value="age1">20-29歳まで</option>
				<option value="age2">30-39歳まで</option>
				<option value="age3">40歳-49歳まで</option>
				<option value="age4">50歳-59歳まで</option>
			</select>
		</li>
		<li>
			<label for="q1">仕事に関連してるけど厳密には仕事ではないっちゃあない割とストレスを感じるシーン:</label>
			<select name="q1">
				<option value="str1">社内飲み会の幹事役になった時</option>
				<option value="str2">歓送迎会の準備が大変な時</option>
				<option value="str3">上司や先輩に「さくっと一杯いこうか」と言われて全然一杯で終わらない時</option>
			</select>
		</li>
		<li>
		<label for="q2">新人社員だった時ストレスを感じるシーン:</label>
			<select name="q2">
				<option value="str4">上司・先輩「言われなくてもやっとけよ」＝＞後日「勝手なことするな！」</option>
				<option value="str5">上司・先輩「分からないことは聞いてね」＝＞後日「自分で考えろ！」</option>
				<option value="str6">上司・先輩「なんで失敗したんだ」＝＞理由述べる＝＞「言い訳するな！」</option>
			</select>
		</li>
		<li>
		<label for="q3">【番外編】関西人限定回答：ストレスめっちゃ感じてまう瞬間:</label>
			<select name="q3">
				<option value="str7">話がほんまにおもんない人と長時間一緒におらなあかん時</option>
				<option value="str8">横断歩道の信号がなかなか青にならへん時</option>
				<option value="str9">東京の人から「面白いこと言ってよ」と無茶振りされてすべった時</option>
				<option value="str10">関東人が関西弁を変なイントネーションで使ってる時</option>
				<option value="str11">関西人が東京に魂を売って標準語喋ってる時</option>
			</select>
		</li>	
	</ul>
</div>	
<input type="submit" value="送信">
</form>




</body>
</html>