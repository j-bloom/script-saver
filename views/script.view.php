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
            <span class="d-flex justify-content-end">
                <a href="/edit?id=<?= $script['id'] ?>" class="btn btn-secondary mx-3">Edit</a>
                <form method="POST" action="/delete">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $script['id'] ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </span>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>