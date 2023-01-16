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
        <th scope="col">Last updated</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['posts'] as $index => $post) : ?>
            <tr>
                <td><?= ++$index ?></td>
                <td><?= $post['title'] ?></td>
                <td><?= $post['category_name'] ?></td>
                <td><?= $post['author'] ?></td>
                <td><?= date_format(date_create($post['created_at']), "d M Y H:i:s"); ?></td>
                <td><?= date_format(date_create($post['updated_at']), "d M Y H:i:s"); ?></td>
                <td>
                    <a href="<?= BASE_URL ?>/post/edit/<?= $post['id'] ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                    <a href="<?= BASE_URL ?>/post/destroy/<?= $post['id'] ?>" onclick="return confirm('Are you sure you want to delete this post?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

<!-- Delete post modal -->
<!-- <div class="modal fade" id="deletePostModal" tabindex="-1" aria-labelledby="deletePostModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deletePostModalLabel">Delete Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="text-center">Are you sure you want to delete this post?</h6>
        <div class="d-flex justify-content-center mt-5">
            <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
            <a href="<?= BASE_URL ?>/post/destroy" class="btn btn-danger">Yes, delete it</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
