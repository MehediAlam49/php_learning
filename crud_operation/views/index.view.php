<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h1>Student Management</h1>
                            <a href="insert.php" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students_data as $key => $data) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $data['name'] ?></td>
                                        <td><?= $data['age'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['status'] == 1 ? 'active' : 'inactive' ?></td>
                                        <td><?= date('d M Y, h:i:s A', strtotime($data['created_at'])) ?></td>
                                        <td><?= $data['updated_at']? date('d M Y, h:i:s A', strtotime($data['updated_at'])): 'null' ?></td>
                                        <td>
                                            <div class="btn-group roles" role="group">
                                                <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>