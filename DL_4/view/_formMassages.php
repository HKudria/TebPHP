
<div class="form">
	<form method="post">
		Category:
		<select name="id_cat">
		<?php foreach($cats as $cat): ?>
			<option value="<?php echo $cat['id']?>"
					  <?php echo ($cat['id'] == $fields['id_cat'] ? 'selected' : '')?>
			>
				<?php echo $cat['category']?>
			</option>
		<?php endforeach; ?>
		</select><br>
		Name:<br>
		<input type="text" name="name" value="<?php echo $fields['name']?>"><br>
		Text:<br>
		<textarea name="text"><?php echo $fields['text']?></textarea><br>
		<button>Send</button>
		<p><?php echo $err?></p>
	</form>
    <a href="../index.php">Go to main page</a>
</div>