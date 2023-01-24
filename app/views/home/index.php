<form action="<?= BASE_URL ?>/home/index" class="d-flex mb-3" method="post">
    <input type="text" class="form-control" name="q" placeholder="Search post here...">
    <button class="btn btn-dark ms-3" type="submit">Search</button>
</form>

<div class="row g-4">
    <?php if(count($data['posts']) > 0) : ?>
    <?php foreach($data['posts'] as $post) : ?>
        <div class="col-4">
            <a href="<?= BASE_URL ?>/home/post/<?= $post['id'] ?>" class="text-decoration-none text-dark">
                <div class="card p-3 border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Created by <a href="#"><?= $post['author'] ?></a> in <a href="#"><?= $post['category_name'] ?></a></h6>
                        <p class="card-text mt-3">
                            <?php if(strlen($post['content']) > 70) : ?>
                                <?= substr($post['content'], 0, 70) . '...' ?>
                            <?php else : ?>
                                <?= $post['content'] ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <div class="d-flex justify-content-center">
            <p>Post with keyword <span class="text-danger">"<?= $_POST['q'] ?>"</span> not found</p>
        </div>
    <?php endif; ?>
</div>