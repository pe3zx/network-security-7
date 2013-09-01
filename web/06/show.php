<?php
require_once '../../header.php';
?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 06</h1>
				<p>ตอนนี้คุณที่เป็นแฮกเกอร์ระดับโลก (เป็นอยู่ได้ไม่เบื่อเหรอ) กำลังประสบปัญหาชีวิตอันยิ่งใหญ่มหาศาล ซึ่งปัญหาที่ว่านั่นก็คือ คุณกำลังจะได้เกรด F ในวิชาภาษาไทย และด้วยความโชคดีของคุณ (อีกแล้ว?) หน้าผู้ดูแลระบบของฝ่ายทะเบียนคณะคุณได้บังเอิญลอยมาเข้าหน้า Desktop คุณพอดี (<a href="admin.php">admin.php</a>) แล้วเมื่อนำมารวมกันหน้าเช็คคะแนนของนักศึกษา (<a href="show.php">show.php</a>) ทำให้คุณคิดแผนการอันชั่วร้ายในการเจาะเข้าหน้าผู้ดูแลระบบเพื่อเปลี่ยนเกรดของคุณ แล้วคุณจะรอช้าอยู่ทำไมหละ จัดการถล่มมันซะ!</p>
			</div>
			<?php if(empty($_GET['name'])): ?>
			<form id="web06" role="form" class="form-horizontal" action="" method="get">
				<div class="form-group">
					<label for="username" class="col-lg-2 control-label">Name</label>
					<div class="col-lg-4">
						<div class="input-group">
							<input type="text" name="name" class="form-control" id="username" placeholder="Search everything.">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</div>
					</div>
				</div>
			</form>
			<?php
			else:
				mysql_connect($host, $user, $pass);
				mysql_select_db($dbname);
				mysql_query("SET NAMES utf8");
				$res = mysql_query("SELECT * FROM `score` WHERE `fullname` = '{$_GET['name']}'");
				if(mysql_num_rows($res) == 0):
				?>
				<div class="alert alert-danger">User not found.</div>
				<?php else:
				$row = mysql_fetch_assoc($res);
				?>
				<table class="table table-bordered">
					<tr>
						<td>ID</td>
						<td><?php echo $row['id']; ?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php echo $row['fullname']; ?></td>
					</tr>
					<tr>
						<td>Score</td>
						<td><?php echo $row['score']; ?></td>
					</tr>
				</table>
				<?php endif; ?>
			<?php endif; ?>
		</div>
<?php require_once '../../footer.php'; ?>