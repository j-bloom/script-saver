<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="p-5">
    <h1>Scripts</h1>

    <a href="/create" class="btn btn-secondary mt-2 mb-2">Create new Script</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">What the scripte does</th>
                <th scope="col">Language</th>
                <th scope="col">Affected Area</th>
                <th scope="col">Task</th>
                <th scope="col">See More</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scripts as $i => $script) : ?>
            <tr>
                <th scope="row"><?= $i + 1 ?></th>
                <td><?= htmlspecialchars($script['description']) ?></td>
                <td><?= htmlspecialchars($script['language']) ?></td>
                <td><?= htmlspecialchars($script['development_type']) ?></td>
                <td><?= htmlspecialchars($script['task_type']) ?></td>
                <td>
                    <a href="/script?id=<?= $script['id'] ?>" class="btn btn-success">View</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php require('partials/footer.php') ?>