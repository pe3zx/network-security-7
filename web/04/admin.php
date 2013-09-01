<?php
require_once '../../config.php';
$dbh = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
$res = $dbh->query("SELECT * FROM `users` WHERE `username` ='{$_COOKIE['username']}' AND `password`='{$_COOKIE['password']}'")->fetch();
if($res):
	require_once '../../header.php';
?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 04</h1>
				<p>คุณที่ยังเป็นแฮกเกอร์มือฉมังที่กลับตัวมาเป็นคนดี และผันตัวไปเป็นคนชั่วอีกครั้งแล้ว!! และวันนี้คุณเกิดคลั่งอยู่ๆ ก็อยากดูหนังออนไลน์แบบไม่เสียงเงินสักบาทขึ้นมา คุณจึงเพียรพยายามอย่างมากในการหาเว็บดูหนังออนไลน์ฟรี แต่มันก็ดันไม่ฟรีซักเว็บ และด้วยความซวยของเจ้าของเว็บแห่งหนึ่งที่ดันทำหน้า Login Admin หลุดออกมาบวกกับความโชคดีของคุณที่บังเอิญไปเจอมันเข้าพอดี ภารกิจวันนี้ของคุณคือทะลวงผ่านหน้านี้เข้าไปให้ได้เพื่อหนังฟรีตลอดชีพ!! หรือจนกว่าเว็บมันจะปิดหนี ._.</p>
			</div>
			<div class="alert alert-success"><b>Key</b>: h0w_fun_w1th_c00ki3z</div>
		</div>
<?php
	require_once '../../footer.php';
else:
	header('location: index.php');
endif;
?>