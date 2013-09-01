<?php require_once '../../header.php'; ?>
		<noscript>
			<meta http-equiv="refresh" content="0;url=noscript.php">
		</noscript>
		<div class="container">
			<div id="question" class="jumbotron">
				<h1>Web - 02</h1>
				<p>คุณคือแฮกเกอร์มือฉมัง แต่คุณได้กลับตัวกลับใจเป็นคนดี คุณได้ลงทุนในธุรกิจไก่ทอดด้วยเงินของตัวเองไปเป็นจำนวนหลายร้อยล้านบาท ซึ่งเป็นเงินก้อนสุดท้ายที่คุณเหลืออยู่ คุณได้สั่งเนื้อไก่วากิวมาจากต่างประเทศ แต่ทว่าเรือประสบพายุเฮอร์ริเคน BASSOR หนัก จนเรือเกือบล่มและเนื่องจากเรือเป็นรุ่นพิเศษจึงสามารถหักหลบพายุได้อย่างฉิวเฉียด แต่กัปตันกากจึงบังคับเรือพลาดไปชนหินโสโครก ทำให้เรือล่ม และไก่ทั้งหมดได้จมดิ่งลงสู่ก้นมหาสมุทรแอตแลนติกเหนือ คุณจึงต้องสูญเงินไปทั้งหมดฟรีๆ คุณไม่ยอมเสียเงินก้อนสุดท้ายไปง่ายๆ คุณจึงคิดหาวิธีที่จะหาเงินให้ได้เร็วที่สุด ณ วินาทีนั้น ความคิดอันชั่วร้ายที่หลับไหลอยู่ในตัวคุณก็ได้ตื่นขึ้นมาอีกครั้ง คุณจึงใช้ความรู้เก่าที่มีอยู่ไปแฮคเงินในบัญชีของมหาเศรษฐีคนหนึ่งที่ดูไบ ซึ่งฝากอยู่ในธนาคารที่มีระบบรักษาความปลอดภัยสูงที่สุดในโลก แต่ถึงกระนั้น คุณก็เป็นแฮคเกอร์ที่เก่งที่สุดในโลกเช่นกัน คุณจึงสามารถเจาะระบบธนาคารได้อยู่ดี แต่คุณต้องการให้เกิด Traffic ในระบบน้อยที่สุด เพราะกลัวจะมีคนจับได้ คุณจึงจะโอนเงินออกมาทั้งหมดภายในครั้งเดียวและคุณต้องโอนออกมาให้หมดทุกบาททุกสตางค์ไม่ให้พลาดแม้แต่เสี้ยวเดียว ดังนั้น.... คิดไม่ออกแล้วครับจบเถอะ :3</p>
			</div>
			<form id="web02" role="form" class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label for="backacc" class="col-lg-4 control-label">บัญชีธนาคารคุณ</label>
					<div class="col-lg-4">
						<input type="text" name="backacc" class="form-control" id="backacc" placeholder="1234567890" value="1234567890" disabled="disabled">
					</div>
				</div>
				<div class="form-group">
					<label for="backacc" class="col-lg-4 control-label">ยอดเงินคงเหลือของมหาเศรษฐีคนหนึ่งที่ดูไบ</label>
					<div class="col-lg-4">
						<div class="input-group">
							<input type="text" name="backacc" class="form-control" id="backacc" placeholder="9581309" value="9581309" disabled="disabled">
							<span class="input-group-addon">฿</span>
						</div>			
					</div>
				</div>
				<div class="form-group">
					<label for="money" class="col-lg-4 control-label">จำนวนเงินที่ต้องการโอน</label>
					<div class="col-lg-4">
						<div class="input-group">
							<input type="text" name="money" class="form-control" id="money" placeholder="0" maxlength="6">
							<span class="input-group-btn">
								<input type="hidden" name="secret" value="" id="secret">
								<button class="btn btn-primary" type="submit">Transfer!</button>
							</span>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script src="../../assets/js/jquery.js"></script>
		<script src="../../assets/js/bootstrap.min.js"></script>
		<script>
			(function($) {
				$(function(){
					$('#web02').attr('action','transfer.php');
					$('#web02').submit(function(){
						if(parseInt($('#money').attr('maxlength'),10) != 6){
							$('#question').after('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>ระวัง!</b> คุณกำลังใช้ช่องทางที่ไม่ปลอดภัยสำหรับคุณเองและผู้ดูแลระบบอาจไหวตัวทัน!.</div>');
							return false;
						}
					});
				});
			})(jQuery);
		</script>
	</body>
</html>