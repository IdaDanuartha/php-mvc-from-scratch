<div>
    <?php foreach($data['blogs'] as $blog) : ?>
        <div>
            <ul>
                <li><?= $blog['title']; ?></li>
                <li><?= $blog['author']; ?></li>
                <li><?= $blog['description']; ?></li>
                <li><?= date_format(date_create($blog['created_at']), "d M Y"); ?></li>
            </ul>
        </div>
    <?php endforeach; ?>
</div>