<?php

include_once('model/messages.php');
$messages = messagesAll();

?>
<h1>Chat</h1>
<a href="add.php">add</a>
<div>
<?php foreach($messages as $message): ?>
	<div>
		<strong><?=$message['name']?></strong>
		<em><?=$message['dt_add']?></em>
		<div>
			<?=$message['text']?>
		</div>
		<a href="message.php?id=<?=$message['id_message']?>">Read more</a>
		<hr>
	</div>
<?php endforeach; ?>

</div>