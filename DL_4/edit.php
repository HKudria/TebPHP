<?php
include_once('model/messages.php');
include_once('model/db.php');

$id = checkID($_GET['id']?? '');
if ($id){
    if($_GET['id']!=$id){
        header("Location: message.php?id=$id");
        exit();
    }
    $message = messagesOne($id);
} else {
    header("Location: index.php");
    exit();
}

$cats = categoryAll();
$fields = ['name' => '', 'text' => '', 'id_cat' => 0];
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields['id'] = $id;
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);
    $fields['id_cat'] = (int)$_POST['id_cat'];

    if($fields['name'] === '' || $fields['text'] === ''){
        $err = 'Заполните все поля!';
    }
    else{
        messagesEdit($fields);
        header("Location: message.php?id=$id");
        exit();
    }
}
//var_dump($message);
?>

<?php if(!empty($message)): ?>
    <div class="form">
        <form method="post">
            Category:
            <select name="id_cat">
                <?php foreach($cats as $cat): ?>
                    <option value="<?php echo $cat['id']?>"
                        <?php echo ($cat['id'] == $message['id_cat'] ? 'selected' : '')?>
                    >
                        <?php echo $cat['category']?>
                    </option>
                <?php endforeach; ?>
            </select><br>
            Name:<br>
            <input type="text" name="name" value="<?php echo $message['name']?>"><br>
            Text:<br>
            <textarea name="text"><?php echo $message['text']?></textarea><br>
            <button>Send</button>
            <p><?php echo $err?></p>
        </form>
    </div>
<?php else: header("Location: index.php"); endif?>


