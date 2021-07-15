
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Company</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>

            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($books)) {
            foreach ($books as $book) :?>
                <tr>
                    <th scope="row"><?php echo $book->getId() ?></th>
                    <td><img width="150px"height="150px" src="<?php echo $book->getImg() ?>" alt=""></td>
                    <td><?php echo $book->getTitle() ?></td>
                    <td><?php echo $book->getCompany()?></td>
                    <td><?php echo $book->getPrice() ?></td>
                    <td><?php echo $book->getDate() ?></td>
                    <td><?php echo $book->getAuthorId()?></td>
                    <td><?php echo $book->getCategoryId() ?></td>

                    <td><a href="index.php?page=update-book&id=<?php echo $book->getId()?>" class="fas fa-pencil-alt">Edit</a></td>
                    <td><a href="index.php?page=delete-book&id=<?php echo $book->getId()?>" class="fas fa-shopping-cart">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>


`