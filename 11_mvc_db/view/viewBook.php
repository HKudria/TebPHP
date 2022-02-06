<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
    </tr>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book->title ?></td>
            <td><?php echo $book->author ?></td>
            <td><?php echo $book->description ?></td>
        </tr>
    <?php endforeach; ?>
</table>
