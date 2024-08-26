<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="p-5">
    <span class="d-flex align-items-center justify-content-between">
        <h1>Scripts</h1>
        <a href="/scripts" class="btn btn-primary">Back to Scripts</a>
    </span>

    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($script['description']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($script['script']) ?></p>
            <hr />
            <p class="card-text">Language: <?= htmlspecialchars($script['language']) ?></p>
            <p class="card-text">Development Type: <?= htmlspecialchars($script['development_type']) ?></p>
            <p class="card-text">Task: <?= htmlspecialchars($script['task_type']) ?></p>
            <div class="d-flex justify-content-end">
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $project['id'] ?>">
                    <a href="/project/edit?id=<?= $project['id'] ?>" class="btn btn-secondary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>