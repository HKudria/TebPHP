<h1>Rejestracja użytkownika</h1>
<div class="form-group">
    <form method="post">

        Imię:<br>
        <input type="text" name="name" class="form-control" value="<?php echo $fields['name']??''?>"><br>
        Nazwisko:<br>
        <input type="text" name="surname" class="form-control" value="<?php echo $fields['surname']??''?>"><br>
        Mail:<br>
        <input type="email" name="mail" class="form-control" value="<?php echo $fields['mail']??''?>"><br>
        Haslo:<br>
        <input type="password" name="pass" class="form-control"><br>
        Miasto:<br>
        <input type="text" name="city" class="form-control" value="<?php echo $fields['city']??''?>"><br>
        Uprawniena:
        <select class="form-select" name="role">
            <?php foreach($allRole as $role): ?>
                <option value="<?php echo $role->id?>"
                    <?php echo ($role->id == ($fields['id']??'') ? 'selected' : '')?>
                >
                    <?php echo $role->role?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <button class="btn btn-success">Send</button>

        <p>
            <?php
            if(!empty($err)):
                foreach ($err as $error):
                    echo $error . '<br>';
                endforeach;
            endif;?>
        </p>

    </form>
    <a href="./">Go to main page</a>
</div>