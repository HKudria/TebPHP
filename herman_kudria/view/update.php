<h1>Rejestracja użytkownika</h1>
<div class="form-group">
    ID : <?php echo $user->id?>
    <form method="post">
        Mail:<br>
        <input type="email" name="mail" class="form-control" value="<?php echo $fields['mail']??''?>"><br>
        Haslo:<br>
        <input type="text" name="pass" class="form-control" value="<?php echo $fields['pass']??''?>" ><br>
        Miasto:<br>
        <input type="text" name="city" class="form-control" value="<?php echo $fields['city']??''?>"><br>
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