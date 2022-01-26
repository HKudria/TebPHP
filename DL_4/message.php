<?php
include_once('model/messages.php');
include_once('model/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: edit.php?id=$id");
        exit();
    }
    $message = messagesOne($id);
} else {
    header("Location: index.php");
    exit();
}
?>
<h1>Chat</h1>
<ul>
    <li><a href="index.php">Main page</a></li>
    <li><a href="edit.php?id=<?php echo $id?>">Edit massage</a></li>
    <li><a href="delete.php?id=<?php echo $id?>">Delete massage</a></li>
</ul>


<?php if(isset($message)): ?>
<div>
    <strong><?php echo $message['name']?></strong>&nbsp;<strong><?=$message['cat']?></strong>
    <em><?php echo $message['dt_add']?></em>
    <div>
        <?php echo $message['text']?>
    </div>
</div>
    <?php endif ?>

