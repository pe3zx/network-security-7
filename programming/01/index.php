<?php
function encrypt($txt){
	$set1 = 'abcdefghijklmnopqrstuvwxyz';
	$set2 = strtoupper('abcdefghijklmnopqrstuvwxyz');
	$arr1 = str_split($set1 );
	$arr2 = str_split($set2);
	$len = strlen($txt);
	
	$enc = '';
	for($i = 0;$i<$len;$i++){
		if(in_array($txt[$i],$arr1)){
			$pos = strpos($set1,$txt[$i]);
			$enc .= $arr1[($pos+$i)%26];
		}elseif(in_array($txt[$i],$arr2)){
			$pos = strpos($set2,$txt[$i]);
			$enc .= $arr2[($pos+$i)%26];
		}else{
			$enc.=$txt[$i];
		}
	}
	
	return $enc;
}
?>
<?php require_once '../../header.php'; ?>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Programming</h1>
				<p>เนื่องจากพี่ๆ แถโจทย์กันไม่ออกแล้ว เลยขอสั่งว่าเข้า <a href="task.php">หน้านี้</a> แล้วถอดรหัสให้ได้<br>ปล. น้องๆ สามารถใช้ tools ที่อยู่ข้างล่างในการช่วยถอดรหัสได้</p>
			</div>

			<form id="program" role="form" class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label for="test_enc" class="col-lg-4 control-label">Test Enc</label>
					<div class="col-lg-4">
						<div class="input-group">
							<input type="text" name="test_enc" class="form-control" id="test_enc" placeholder="">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
							</span>
						</div>
					</div>
				</div>
				<?php if(isset($_POST['test_enc'])): ?>
				<div class="form-group">
					<label for="test_enc" class="col-lg-4 control-label"><?php echo $_POST['test_enc']; ?> =></label>
					<div class="col-lg-4">
						<input type="text" name="test_enc" class="form-control" value="<?php echo encrypt($_POST['test_enc']); ?>" disabled="disabled">
					</div>
				</div>
				<?php endif; ?>
			</form>
		</div>
<?php require_once '../../footer.php'; ?>