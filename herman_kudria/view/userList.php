<table class="table table-striped userlist">
    <tr>
        <th>ID</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Misto</th>
        <th>Uprawnienia</th>
        <th>Haslo</th>
        <th>Email</th>
    </tr>
<?php foreach ($allUser as $user): ?>
    <tr>
        <td><?php echo $user->id ?></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->surname ?></td>
        <td><?php echo $user->city ?></td>
        <td><?php echo $user->role ?></td>
        <td><?php echo $user->pass ?></td>
        <td><?php echo $user->mail ?></td>
        <td><a href="?c=delete&id=<?php echo $user->id ?>">Usuń</a></td>
        <td><a href="?c=update&id=<?php echo $user->id ?>">Edytuj</a></td>
    </tr>
 <?php endforeach; ?>
</table>