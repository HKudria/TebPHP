
<h1>Blog</h1>
<ul>
    <li><a href="?c=add"">add</a></li>
</ul>


<div>
    <?php foreach($messages as $message): ?>
        <div>
            <strong><?php echo $message['name']?></strong><br>
            <strong><?=$message['category']?></strong>
            <em><?=$message['dt_add']?></em>
            <div>
                <?=$message['text']?>
            </div>
            <a href="?c=message&id=<?=$message['id_message']?>">Read more</a>
            <hr>
        </div>
    <?php endforeach; ?>

</div>
