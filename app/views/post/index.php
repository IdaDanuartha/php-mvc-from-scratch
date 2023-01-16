<div class="shadow-lg px-4 py-3 rounded">
    <div class="d-flex justify-content-between mb-3">
        <h4>Table Posts</h4>
        <a href="<?= BASE_URL ?>/post/create" class="btn btn-primary">Add Post</a>
    </div>
    <table class="table">
    <thead class="table-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Published at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['posts'] as $index => $post) : ?>
            <tr>
                <td><?= ++$index ?></td>
                <td><?= $post['title'] ?></td>
                <td><?= $post['category_name'] ?></td>
                <td><?= $post['author'] ?></td>
                <td><?= date_format(date_create($post['created_at']), "d M Y"); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
