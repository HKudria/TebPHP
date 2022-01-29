<h1>Chat</h1>
<ul>
    <li><a href="./">Main page</a></li>
    <li><a href="?c=edit&id=<?php echo $id?>">Edit massage</a></li>
    <li><a href="?c=delete&id=<?php echo $id?>">Delete massage</a></li>
</ul>



    <div>
        <strong><?php echo $message['name']?></strong>&nbsp;<strong><?=$message['cat']?></strong>
        <em><?php echo $message['dt_add']?></em>
        <div>
            <?php echo $message['text']?>
        </div>
    </div>
