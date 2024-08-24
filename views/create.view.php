<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="p-5">
    <h1>Scripts</h1>
    <form method="POST" action="">
        <div class="mb-3 mt-4">
            <div class="d-flex justify-content-center">
                <div class="mb-3 ms-5">
                    <label for="languageSelect" class="form-label">Language</label>
                    <select id="languageSelect" name="languageSelect" class="form-select" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Bash"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'Bash') ? 'selected' : '' ?>>
                            Bash</option>
                        <option value="CSS"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'CSS') ? 'selected' : '' ?>>
                            CSS</option>
                        <option value="HTML"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'HTML') ? 'selected' : '' ?>>
                            HTML</option>
                        <option value="Javascript"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'Javascript') ? 'selected' : '' ?>>
                            JavaScript</option>
                        <option value="PHP"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'PHP') ? 'selected' : '' ?>>
                            PHP</option>
                        <option value="Python"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'Python') ? 'selected' : '' ?>>
                            Python</option>
                        <option value="Typescript"
                            <?= (isset($_POST['languageSelect']) && $_POST['languageSelect'] == 'Typescript') ? 'selected' : '' ?>>
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
                        <option value="Api"
                            <?= (isset($_POST['developmentSelect']) && $_POST['developmentSelect'] == 'Api') ? 'selected' : '' ?>>
                            API</option>
                        <option value="Backend"
                            <?= (isset($_POST['developmentSelect']) && $_POST['developmentSelect'] == 'Backend') ? 'selected' : '' ?>>
                            Backend</option>
                        <option value="Frontend"
                            <?= (isset($_POST['developmentSelect']) && $_POST['developmentSelect'] == 'Frontend') ? 'selected' : '' ?>>
                            Frontend</option>
                        <option value="System"
                            <?= (isset($_POST['developmentSelect']) && $_POST['developmentSelect'] == 'System') ? 'selected' : '' ?>>
                            System</option>
                        <option value="SQL"
                            <?= (isset($_POST['developmentSelect']) && $_POST['developmentSelect'] == 'SQL') ? 'selected' : '' ?>>
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
                        <option value="Automation"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'Automation') ? 'selected' : '' ?>>
                            Automation</option>
                        <option value="Color"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'Color') ? 'selected' : '' ?>>
                            Colour</option>
                        <option value="Font"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'Font') ? 'selected' : '' ?>>
                            Font/Text</option>
                        <option value="Queries"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'Queries') ? 'selected' : '' ?>>
                            Queries</option>
                        <option value="CTE"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'CTE') ? 'selected' : '' ?>>CTEs
                        </option>
                        <option value="Stored Procedure"
                            <?= (isset($_POST['taskSelect']) && $_POST['taskSelect'] == 'Stored Procedure') ? 'selected' : '' ?>>
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
                            value="<?= $_POST['description'] ?? '' ?>">

                        <?php if (isset($errors['description'])) : ?>
                        <p class="text-danger"><?= $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="script" class="form-label">Script</label>
                        <textarea type="text" class="form-control" name="script" rows="10" style="height:100%;"
                            id="script" required><?= $_POST['script'] ?? '' ?></textarea>

                        <?php if (isset($errors['script'])) : ?>
                        <p class="text-danger"><?= $errors['script'] ?></p>
                        <?php endif; ?>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php require('partials/footer.php') ?>