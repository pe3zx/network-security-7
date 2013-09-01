<?php
require_once '../../header.php';
?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 06</h1>
				<p>ตอนนี้คุณที่เป็นแฮกเกอร์ระดับโลก (เป็นอยู่ได้ไม่เบื่อเหรอ) กำลังประสบปัญหาชีวิตอันยิ่งใหญ่มหาศาล ซึ่งปัญหาที่ว่านั่นก็คือ คุณกำลังจะได้เกรด F ในวิชาภาษาไทย และด้วยความโชคดีของคุณ (อีกแล้ว?) หน้าผู้ดูแลระบบของฝ่ายทะเบียนคณะคุณได้บังเอิญลอยมาเข้าหน้า Desktop คุณพอดี (<a href="admin.php">admin.php</a>) แล้วเมื่อนำมารวมกันหน้าเช็คคะแนนของนักศึกษา (<a href="show.php">show.php</a>) ทำให้คุณคิดแผนการอันชั่วร้ายในการเจาะเข้าหน้าผู้ดูแลระบบเพื่อเปลี่ยนเกรดของคุณ แล้วคุณจะรอช้าอยู่ทำไมหละ จัดการถล่มมันซะ!</p>
			</div>
			<?php if(empty($_POST['username'])): ?>

			<form id="web06" role="form" class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label for="username" class="col-lg-2 control-label">Username</label>
					<div class="col-lg-4">
						<input type="text" name="username" class="form-control" id="username" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-4">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</div>
			</form>
			<?php
			else:
				mysql_connect($host, $user, $pass);
				mysql_select_db($dbname);
				mysql_query("SET NAMES utf8");
				$username = mysql_real_escape_string($_POST['username']);
				$password = mysql_real_escape_string($_POST['password']);
				
				$res = mysql_query("SELECT * FROM `@dm1nja` WHERE `u23rn@m3` = '{$username}' AND `p@2sw0rd` = '{$password}'");
				if(mysql_num_rows($res) == 0){
					echo '<div class="alert alert-danger">Login incorrect</div>';
				}else{
					echo '<div class="alert alert-success"><b>Key</b>: just_th3_b4s1c_meh</div>';
				}
			endif;
			?>
<?php require_once '../../footer.php'; ?>