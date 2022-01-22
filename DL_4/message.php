<?php
include_once('model/messages.php');
$strId = $_GET['id'] ?? ''; // isset(get)
$id = (int)$strId;
$message = messagesOne($id);


?>
<h1>Chat</h1>
<a href="index.php">index</a>

<?php if($message !== false): ?>
<div>
    <strong><?=$message['name']?></strong>
    <em><?=$message['dt_add']?></em>
    <div>
        <?=$message['text']?>
    </div>
</div>
    <?php endif ?>

