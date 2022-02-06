<h1>Logowanie</h1>
<div class="form-group">
    <form method="post">

        Mail:<br>
        <input type="email" name="mail" class="form-control"><br>
        Haslo:<br>
        <input type="password" name="pass" class="form-control"><br>
        <input type="hidden" name="name" value="thisistest"><br>
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