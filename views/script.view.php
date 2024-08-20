<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="p-5">
    <h1>Scripts</h1>

    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($script['description']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($script['script']) ?></p>
            <hr />
            <p class="card-text">Language: <?= htmlspecialchars($script['language']) ?></p>
            <p class="card-text">Development Type: <?= htmlspecialchars($script['development_type']) ?></p>
            <p class="card-text">Task: <?= htmlspecialchars($script['task_type']) ?></p>
            <a href="/scripts" class="btn btn-primary">Back to Scripts</a>
        </div>
    </div>
</div>

<?php require('partials/footer.php') ?>