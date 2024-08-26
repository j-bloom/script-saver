<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="p-5">
    <h1>Update</h1>
    <form method="POST" action="">
        <div class="mb-3 mt-4">
            <div class="d-flex justify-content-center">
                <div class="mb-3 ms-5">
                    <label for="languageSelect" class="form-label">Language</label>
                    <select id="languageSelect" name="languageSelect" class="form-select" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Bash" <?= $script['language'] === 'Bash' ? 'selected' : '' ?>>
                            Bash</option>
                        <option value="CSS" <?= $script['language'] === 'CSS' ? 'selected' : '' ?>>
                            CSS</option>
                        <option value="HTML" <?= $script['language'] === 'HTML' ? 'selected' : '' ?>>
                            HTML</option>
                        <option value="Javascript" <?= $script['language'] === 'Javascript' ? 'selected' : '' ?>>
                            JavaScript</option>
                        <option value="PHP" <?= $script['language'] === 'PHP' ? 'selected' : '' ?>>
                            PHP</option>
                        <option value="Python" <?= $script['language'] === 'Python' ? 'selected' : '' ?>>
                            Python</option>
                        <option value="Typescript" <?= $script['language'] === 'Typescript' ? 'selected' : '' ?>>
                            Typescript</option>
                    </select>
                    <?php if (isset($errors['languageSelect'])) : ?>
                    <p class="text-danger"><?= $errors['languageSelect'] ?></p>
                    <?php endif; ?>

                </div>

                <div class="mb-3 ms-5">
                    <label for="developmentSelect" class="form-label">Development Type</label>
                    <select id="developmentSelect" name="developmentSelect" class="form-select" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Api" <?= $script['development_type'] === 'API' ? 'selected' : '' ?>>
                            API</option>
                        <option value="Backend" <?= $script['development_type'] === 'Backend' ? 'selected' : '' ?>>
                            Backend</option>
                        <option value="Frontend" <?= $script['development_type'] === 'Frontend' ? 'selected' : '' ?>>
                            Frontend</option>
                        <option value="System" <?= $script['development_type'] === 'System' ? 'selected' : '' ?>>
                            System</option>
                        <option value="SQL" <?= $script['development_type'] === 'SQL' ? 'selected' : '' ?>>
                            SQL</option>
                    </select>
                    <?php if (isset($errors['developmentSelect'])) : ?>
                    <p class="text-danger"><?= $errors['developmentSelect'] ?></p>
                    <?php endif; ?>

                </div>

                <div class="mb-3 ms-5">
                    <label for="taskSelect" class="form-label">Task Type</label>
                    <select id="taskSelect" name="taskSelect" class="form-select" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Automation" <?= $script['task_type'] === 'Automation' ? 'selected' : '' ?>>
                            Automation</option>
                        <option value="Color" <?= $script['task_type'] === 'Color' ? 'selected' : '' ?>>
                            Colour</option>
                        <option value="Font" <?= $script['task_type'] === 'Font' ? 'selected' : '' ?>>
                            Font/Text</option>
                        <option value="Queries" <?= $script['task_type'] === 'Queries' ? 'selected' : '' ?>>
                            Queries</option>
                        <option value="CTE" <?= $script['task_type'] === 'CTE' ? 'selected' : '' ?>>CTEs
                        </option>
                        <option value="Stored Procedure"
                            <?= $script['task_type'] === 'Stored Procedure' ? 'selected' : '' ?>>
                            Stored Procedures</option>
                    </select>

                    <?php if (isset($errors['taskSelect'])) : ?>
                    <p class="text-danger"><?= $errors['taskSelect'] ?></p>
                    <?php endif; ?>


                </div>

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="border w-50 p-3">
                <div class="mx-5">

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="short description of what the script does" required
                            value="<?= htmlspecialchars($script['description']) ?>">

                        <?php if (isset($errors['description'])) : ?>
                        <p class="text-danger"><?= $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="script" class="form-label">Script</label>
                        <textarea type="text" class="form-control" name="script" rows="10" style="height:100%;"
                            id="script" required><?= htmlspecialchars($script['script']) ?></textarea>

                        <?php if (isset($errors['script'])) : ?>
                        <p class="text-danger"><?= $errors['script'] ?></p>
                        <?php endif; ?>

                    </div>
                    <span class="d-flex justify-content-end">
                        <a href="/scripts" class="btn btn-secondary mx-3">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>

<?php require('partials/footer.php') ?>