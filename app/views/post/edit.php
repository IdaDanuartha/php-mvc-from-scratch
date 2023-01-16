<div class="w-75">
    <form action="<?= BASE_URL ?>/post/update/<?= $data['post']['id'] ?>" method="post">
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" placeholder="Input title post..." class="form-control" name="title" value="<?= $data['post']['title'] ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select">
                <?php foreach($data['categories'] as $category) : ?>
                    <?php if($data['post']['category_id'] === $category['id']) : ?>
                        <option value="<?= $category['id'] ?>" selected><?= $category['name'] ?></option>
                    <?php else : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="10" class="form-control" placeholder="Write content here..." required><?= $data['post']['content'] ?></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
    </form>
</div>