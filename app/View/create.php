
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>CREATE BOOK</h3>
        <div class="mb-3">
            <label for="first-name" class="form-label">Title</label>
            <input type="text" required class="form-control" id="first-name" name="title">
        </div>
        <div class="mb-3">
            <label for="last-name" class="form-label">Company</label>
            <input type="text" required class="form-control" name="company">
        </div>
        <div class="mb-3">
            <label for="PRICE" class="form-label">Price</label>
            <input type="text" required class="form-control"  name="price">
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">date</label>
            <input type="date" class="form-control" id="birthdate" name="date">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="birthdate" name="category">
        </div>
            <div class="mb-3">
                <label for="avt" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="avt" name="fileToUpload">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


