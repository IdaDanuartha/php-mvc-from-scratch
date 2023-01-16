<?php foreach($data['posts'] as $blog) : ?>
    <div>
        <ul>
            <li><?= $blog['title']; ?></li>
            <li><?= $blog['content']; ?></li>
            <li><?= date_format(date_create($blog['created_at']), "d M Y"); ?></li>
        </ul>
    </div>
<?php endforeach; ?>
