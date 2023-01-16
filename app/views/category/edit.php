<div class="w-75">
    <form action="<?= BASE_URL ?>/category/update/<?= $data['category']['id'] ?>" method="post">
        <div class="form-group mb-3">
            <label for="category" class="form-label">Category Name</label>
            <input type="text" placeholder="Input category name..." class="form-control" value="<?= $data['category']['name'] ?>" name="name" required>
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
    </form>
</div>