<?php require_once '../../header.php'; ?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 07</h1>
				<p>วันนี้คุณที่เป็นแฮกเกอร์มือฉมังที่กลับตัวมาเป็นคนดี และผันตัวไปเป็นคนชั่วอีกครั้งแล้ว ยังเป็นนักโหลดบิทตัวยง ชอบ<b style="color:red">โหลดบิทในที่สาธารณะ</b>เป็นชีวิตจิตใจ แต่เน็ตของคุณกลับอัพโหลดได้ช้ามาก ตัวคุณเองก็มีเวลาน้อย จึงไม่ค่อยมีเวลาปล่อยไฟล์ต่อ คุณจึงมีค่าดาวน์โหลดสูงลิ่ว แต่ค่าอัพโหลดกลับต่ำติดดิน เวลาผ่านไปหลายวัน ระบบแจ้งเตือนว่าจะแบนไอดีของคุณ ภายใน 6 ชั่วโมง หากค่า Ratio ยังต่ำกว่า 1 x 10 ^ -23879846 ดังนั้น คุณจึงต้องพึ่งพาศาสตร์มืดที่คุณได้ร่ำเรียนมาจนช่ำชองและสามารถบรรลุไปถึงจุดสุดของของศาสตร์มืดในการแก้ไขปัญหานี้ แล้วโชคชะตะก็เล่นตลกอีกครั้งเมื่อคุณพบว่ารหัสของ Admin ถูกเก็บไว้ที่ไฟล์ซักไฟล์แถวๆนี้ แต่คุณไม่รู้ว่าไฟล์นี้อยู่ที่ไหนกันแน่ ดังนั้น หน้าที่ของคุณคือหาไฟล์นั้นให้เจอ แล้วตบรหัส Admin มาเพื่อเข้าระบบในนาม Admin ไปแก้ค่า Ratio ให้จงได้</p>
			</div>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<b>คำเตือน!</b> คุณกำลังจะถูกแบนในอีก 6 ชั่วโมงเนื่องจาก Ratio คุณต่ำกว่า 1 x 10 ^ -23879846 
			</div>
			<h4><b>Welcome,</b> แฮกเกอร์มือฉมัง</h4>
			<p><span class="label label-danger">Ratio 1 x 10 ^ -92384023875</span></p>
			<ol class="breadcrumb">
				<li><a href="./">Home</a></li>
				<li class="active"><a href="?page=profile.php">Profile</a></li>
				<li><a href="?page=download.php">Download</a></li>
				<li><a href="?page=upload.php">Upload</a></li>
			</ol>
			<?php
			if(!empty($_GET['page']))
			{
				echo '<div class="well">';
				include($_GET['page']);
				echo '</div>';
			}
			?>
		</div>
<?php require_once '../../footer.php'; ?>