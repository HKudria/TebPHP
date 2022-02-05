<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

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
