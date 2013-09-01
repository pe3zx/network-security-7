<?php
if(empty($_COOKIE['username']))
{
	setcookie('username', 'undefined', time() + 9600);
	setcookie('password', 'undefined', time() + 9600);
}
require_once '../../header.php';
?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 04</h1>
				<p>คุณที่ยังเป็นแฮกเกอร์มือฉมังที่กลับตัวมาเป็นคนดี และผันตัวไปเป็นคนชั่วอีกครั้งแล้ว!! และวันนี้คุณเกิดคลั่งอยู่ๆ ก็อยากดูหนังออนไลน์แบบไม่เสียงเงินสักบาทขึ้นมา คุณจึงเพียรพยายามอย่างมากในการหาเว็บดูหนังออนไลน์ฟรี แต่มันก็ดันไม่ฟรีซักเว็บ และด้วยความซวยของเจ้าของเว็บแห่งหนึ่งที่ดันทำหน้า Login Admin หลุดออกมาบวกกับความโชคดีของคุณที่บังเอิญไปเจอมันเข้าพอดี ภารกิจวันนี้ของคุณคือทะลวงผ่านหน้านี้เข้าไปให้ได้เพื่อหนังฟรีตลอดชีพ!! หรือจนกว่าเว็บมันจะปิดหนี ._.</p>
			</div>
			<br>
			<form id="web04" role="form" class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label for="username" class="col-lg-2 control-label">Username</label>
					<div class="col-lg-4">
						<input type="text" name="username" class="form-control" id="username" placeholder="Welcome back, Admin">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-4">
						<input type="password" name="password" class="form-control" id="password" placeholder="Your password.">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				</div>
			</form>
		</div>
<?php require_once '../../footer.php'; ?>