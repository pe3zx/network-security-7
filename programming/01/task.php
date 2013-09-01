<?php
session_start();
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

$set1 = '_ abcdefghijklmnopqrstuvwxyz'.strtoupper('abcdefghijklmnopqrstuvwxyz');
$randTXT = '';
if(!empty($_POST['decrypted']) && time() - $_SESSION['start_time'] <= 60){

	if(trim($_POST['decrypted']) == $_SESSION['txt']){
		$error = "<b>Key</b>: att4ck1ng_th3_c1ph3rz";
		$fin = true;
	}else{
		$error = "Decrypted Not Correct";
	}

	
}elseif(!empty($_POST['decrypted']) && time() - $_SESSION['start_time'] > 60){
	$error = "Timeout";
}else{
	$len = rand(2000,2500);
	$slen = strlen($set1);
	for($i = 0;$i<$len;$i++){
		$randTXT .= $set1[rand(0,$slen)];
	}
	$_SESSION['txt']=$randTXT;
	$_SESSION['start_time'] = time();
}
?>

<?php require_once '../../header.php'; ?>
		<div class="container">
			<?php if(isset($error)):
				if(isset($fin))
					echo '<div class="alert alert-success">'.$error.'</div>';
				else
					echo '<div class="alert alert-danger">'.$error.'</div>';
			else:
			?>
			<h4>Encoded</h4>
			<textarea class="form-control" row="10" readonly="readonly" style="height: 300px;"><?php echo encrypt($randTXT); ?></textarea>
			<br>
			<h4>Decrypted</h4>
			<form method="POST">
				<textarea class="form-control" row="10" name="decrypted" style="height: 300px;"></textarea>
				<br>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
			<br>
			<br>
			<br>
			<?php endif; ?>
		</div>
<?php require_once '../../footer.php'; ?>
