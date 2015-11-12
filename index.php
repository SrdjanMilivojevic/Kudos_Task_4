<?php

$msgs_json = file_get_contents('public/js/data.json');
$msgs_array = json_decode($msgs_json, true);

?>
<!DOCTYPE html>
<html>
    <head>
	<title>Task Four</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
    </head>
    <body>

	<div class="container">
<?php foreach ($msgs_array['data'] as $msg) {?>
		<div class="row">
			<div class="col-sm-12">
				<div class="well clearfix">
					<h4><?=$msg['from']['name']?></h4><span class="pull-right"><?=$msg['date_sent_formatted']['formatted']?></span>
					<br>
					<div class="well inner">
						<h3><?=$msg['subject'];?></h3>
						<hr>
						<p>
							<?=$msg['message']?>
						</p>
					</div>

					<hr>
					<div class="clearfix">
						<button class="pull-right" onclick="reply_message(<?=$msg['id']?>, <?=$msg['from']['id']?>)">Replay</button> &nbsp; <button class="pull-right" onclick="delete_message(<?=$msg['id']?>)">Delete</button>
					</div>
				</div>
			</div>
		</div>
<?php }
?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/custom.js"></script>
    </body>
</html>
