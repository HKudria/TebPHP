<?php
include_once('model/messages.php');
include_once('model/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: message.php?id=$id");
    }
    $message = messagesOne($id);
} else {
    header("Location: index.php");
    exit();
}
?>
<h1>Chat</h1>
<a href="index.php">index</a>

<?php if(isset($message)): ?>
<div>
    <strong><?=$message['name']?></strong>
    <em><?=$message['dt_add']?></em>
    <div>
        <?=$message['text']?>
    </div>
</div>
    <?php endif ?>

