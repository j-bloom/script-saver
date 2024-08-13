<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script Saver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="p-5">
    <h1>Scripts</h1>

    <form method="POST" action="index.php">
        <div class="mb-3 mt-4">
            <div class="d-flex justify-content-center">
                <div class="mb-3 ms-5">
                    <label for="languageSelect" class="form-label">Language</label>
                    <select id="languageSelect" class="form-select">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="bash">Bash</option>
                        <option value="css">CSS</option>
                        <option value="html">HTML</option>
                        <option value="javascript">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="typescript">Typscript</option>
                    </select>
                </div>
                <div class="mb-3 ms-5">
                    <label for="developmentSelect" class="form-label">Development Type</label>
                    <select id="developmentSelect" class="form-select">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="api">API</option>
                        <option value="backend">Backend</option>
                        <option value="frontend">Frontend</option>
                        <option value="system">System</option>
                        <option value="system">SQL</option>
                    </select>
                </div>
                <div class="mb-3 ms-5">
                    <label for="taskSelect" class="form-label">Task Type</label>
                    <select id="taskSelect" class="form-select">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="automation">Automation</option>
                        <option value="color">Colour</option>
                        <option value="fontText">Font/Text</option>
                        <option value="queries">Queries</option>
                        <option value="cte">CTEs</option>
                        <option value="storedprocedure">Stored Procedures</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="border w-50 p-3">
                <div class="mx-5">
                    <label for="title" class="form-label">Description</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    <div class="mb-3">
                        <label for="script" class="form-label">Script</label>
                        <textarea type="text" class="form-control" rows="10" style="height:100%;"
                            id="script"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>