<?php foreach($data['categories'] as $blog) : ?>
    <div>
        <ul>
            <li><?= $blog['name']; ?></li>
            <li><?= date_format(date_create($blog['created_at']), "d M Y"); ?></li>
        </ul>
    </div>
<?php endforeach; ?>