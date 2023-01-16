<div class="w-75">
    <form action="<?= BASE_URL ?>/post/store" method="post">
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" placeholder="Input title post..." class="form-control" name="title">
        </div>
        <div class="form-group mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="">Select Category</option>
                <?php foreach($data['categories'] as $category) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="10" class="form-control" placeholder="Write content here..."></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Create new post</button>
        </div>
    </form>
</div>