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

        <form method="POST" action="create.php">
            <div class="mb-3 mt-4">
                <div class="d-flex justify-content-center">
                    <div class="mb-3 ms-5">
                        <label for="languageSelect" class="form-label">Language</label>
                        <select id="languageSelect" name="languageSelect" class="form-select">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="Bash">Bash</option>
                            <option value="CSS">CSS</option>
                            <option value="HTML">HTML</option>
                            <option value="Javascript">JavaScript</option>
                            <option value="PHP">PHP</option>
                            <option value="Python">Python</option>
                            <option value="Typescript">Typscript</option>
                        </select>
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="developmentSelect" class="form-label">Development Type</label>
                        <select id="developmentSelect" name="developmentSelect" class="form-select">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="Api">API</option>
                            <option value="Backend">Backend</option>
                            <option value="Frontend">Frontend</option>
                            <option value="System">System</option>
                            <option value="SQL">SQL</option>
                        </select>
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="taskSelect" class="form-label">Task Type</label>
                        <select id="taskSelect" name="taskSelect" class="form-select">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="Automation">Automation</option>
                            <option value="Color">Colour</option>
                            <option value="Font">Font/Text</option>
                            <option value="Queries">Queries</option>
                            <option value="CTE">CTEs</option>
                            <option value="Stored Procedure">Stored Procedures</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="border w-50 p-3">
                    <div class="mx-5">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="short description of what the script does">
                        <div class="mb-3">
                            <label for="script" class="form-label">Script</label>
                            <textarea type="text" class="form-control" name="script" rows="10" style="height:100%;"
                                id="script"></textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>