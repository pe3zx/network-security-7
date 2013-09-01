<?php
require_once '../header.php';
require_once 'configscore.php';
?>
	<div class="container">
		<a data-toggle="modal" href="#submitscore" class="btn btn-success">Submit your key</a>
		<div class="modal fade" id="submitscore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<form class="form-horizontal" role="form" action="submit.php" method="post">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="glyphicon glyphicon-transfer"></i> Submit key</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="col-lg-4 control-label" for="key">Key</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="key" name="key">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-4 control-label" for="name">Name</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="name" name="name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-4 control-label" for="note">How to solve</label>
								<div class="col-lg-6">
									<textarea class="form-control" rows="3" id="note" name="note"></textarea>

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		<br>
		<table class="table table-bordered table-hover">
			<tr>
				<th style="width:42px;">No.</th>
				<th>Name</th>
				<th>Score</th>
			</tr>
		<?php
		$dbh = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
		$sth = $dbh->prepare('SELECT `name`, `score` FROM `scoreboard` ORDER BY `score` DESC LIMIT 15');
		$sth->execute();
		$i = 1;
		while($res = $sth->fetch()):
		?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $res['name'] ?></td>
				<td><?php echo $res['score'] ?></td>
			</tr>
		<?php
		$i++;
		endwhile;
		?>
		</table>
	</div>
<?php require_once '../footer.php'; ?>