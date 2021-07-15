
<div class="container">
    <form method="post"enctype="multipart/form-data" >
        <h3>UPDATE BOOK</h3>
        <?php if(isset($book)):?>
            <div class="mb-3">
                <label for="first-name" class="form-label">Title</label>
                <input type="text" required class="form-control" name="title" value="<?php echo $book->getTitle()?>">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Company</label>
                <input type="text" required class="form-control"  name="company" value="<?php echo $book->getCompany()?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" required class="form-control" name="price" value="<?php echo $book->getPrice()?>">
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Date</label>
                <input type="date" class="form-control" id="birthdate" name="date" value="<?php echo $book->getDate()?>">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="birthdate" name="author" value="<?php echo $book->getAuthorId()?>">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="birthdate" name="category" value="<?php echo $book->getCategoryId()?>">
            </div>
            <div class="mb-3">
                <label for="avt" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="avt" name="fileToUpload">
            </div>
            <div class="mb-3">
                <img width="50px" src="<?php echo $book->getImg()?>" alt="<?php echo $book->getImg()?>">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

