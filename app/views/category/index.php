<div class="shadow-lg px-4 py-3 rounded">
    <div class="d-flex justify-content-between mb-3">
        <h4>Table Category</h4>
        <a href="<?= BASE_URL ?>/category/create" class="btn btn-primary">Add Category</a>
    </div>
    <table class="table">
    <thead class="table-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Category Name</th>
        <th scope="col">Last updated</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($data['categories']) > 0) : ?>
            <?php foreach($data['categories'] as $index => $category) : ?>
            <tr>
                <td><?= ++$index ?></td>
                <td><?= $category['name'] ?></td>
                <td><?= date_format(date_create($category['updated_at']), "d M Y H:i:s"); ?></td>
                <td>
                    <a href="<?= BASE_URL ?>/category/edit/<?= $category['id'] ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                    <a href="<?= BASE_URL ?>/category/destroy/<?= $category['id'] ?>" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7" class="text-center">Data category not found</td>
            </tr>
        <?php endif; ?>
    </tbody>
    </table>
</div>