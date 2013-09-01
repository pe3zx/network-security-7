<?php
if(empty($_POST))
	exit();

require_once '../header.php';
require_once 'configscore.php';
?>
<div class="container">
	<?php
	if(empty($_POST['key']))
		echo '<div class="alert alert-danger">กรุณาใส่ key</div>';
	else if(empty($_POST['name']))
		echo '<div class="alert alert-danger">กรุณาใส่ชื่อ</div>';
	else
	{
		$dbh = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
		$sth = $dbh->prepare('SELECT `point` FROM `keystore` WHERE `key` = ? LIMIT 1');
		$sth->execute(array($_POST['key']));
		$res = $sth->fetch();
		if(isset($res['point']))
		{
			$point = $res['point'];
			$sth = $dbh->prepare('SELECT `id`, `score` FROM `scoreboard` WHERE `name` = ? LIMIT 1');
			$sth->execute(array($_POST['name']));
			$res = $sth->fetch();
			if(isset($res['id']))
			{
				$id = $res['id'];
				$score = $res['score'];
				$sth = $dbh->prepare('SELECT COUNT(*) AS `count` FROM `userlog` WHERE `name` = ? AND `key` = ? LIMIT 1');
				$sth->execute(array($_POST['name'], $_POST['key']));
				$res = $sth->fetch();
				if((int)$res['count'] == 0)
				{
					$sth = $dbh->prepare('UPDATE `scoreboard` SET `score` = ? WHERE `id` = ?');
					$sth->execute(array($point + $score, $id));
					$sth = $dbh->prepare('INSERT INTO `userlog` (`name` , `key`, `note`) VALUES (?, ?, ?)');
					$sth->execute(array($_POST['name'], $_POST['key'], $_POST['note']));
					echo '<div class="alert alert-success">คะแนนของคุณเพิ่มขึ้นแล้ว</div>';
				}
				else
					echo '<div class="alert alert-danger">คุณเคยใช้ key นี้ไปแล้ว</div>';
			}
			else
			{
				$sth = $dbh->prepare('INSERT INTO `scoreboard` (`name` , `score`) VALUES (?, ?)');
				$sth->execute(array($_POST['name'], $point));
				$sth = $dbh->prepare('INSERT INTO `userlog` (`name` , `key`, `note`) VALUES (?, ?, ?)');
				$sth->execute(array($_POST['name'], $_POST['key'], $_POST['note']));
				echo '<div class="alert alert-success">คะแนนของคุณเพิ่มขึ้นแล้ว</div>';
			}
		}
		else
			echo '<div class="alert alert-danger">Key ไม่ถูกต้อง</div>';
	}
	?>
</div>
<?php require_once '../footer.php'; ?>