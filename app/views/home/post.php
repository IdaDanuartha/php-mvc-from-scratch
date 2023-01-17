<div class="mx-auto">
    <h2><?= $data['post']['title'] ?></h2>
    <p>Created by <a href="#"><?= $data['post']['author'] ?></a> in <a href="#"><?= $data['post']['category_name'] ?></a></p>

    <div class="mt-5">
        <?= $data['post']['content'] ?>
    </div>
</div>