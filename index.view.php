<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script Saver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="p-5">
        <h1>Scripts</h1>

        <a href="/create.php" class="btn btn-secondary mt-2 mb-2">Create new Script</a>
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
                            <a href="#" class="btn btn-success">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>