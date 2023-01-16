<div class="shadow-lg px-4 py-3 rounded">
    <div class="d-flex justify-content-between mb-3">
        <h4>Table User</h4>        
    </div>
    <table class="table">
    <thead class="table-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Level</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($data['users']) > 0) : ?>
            <?php foreach($data['users'] as $index => $user) : ?>
            <tr>
                <td><?= ++$index ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['level'] ?></td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7" class="text-center">Data user not found</td>
            </tr>
        <?php endif; ?>
    </tbody>
    </table>
</div>