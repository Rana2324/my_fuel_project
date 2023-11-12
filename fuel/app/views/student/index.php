<?php
$query = $_GET['search'] ?? null;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="
https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css
" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="
https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js
" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body class=" d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="d-flex flex-column w-50 p-5 border" style="gap : 20px">
        <form action="student/create" method="POST" class="row g-3">
            <div class="col-8">
                <input type="text" class="form-control" name="name" id="inputPassword2" placeholder="Name" required>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-success mb-3 w-100">Save</button>
            </div>
        </form>
        <form action="/" method="GET" class="row g-3">
            <div class="col-8">
                <input type="text" class="form-control" id="inputPassword2" name="search" placeholder="Search by name" required value="<?= $query ?>">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-info mb-3 <?= $query ? 'w-50' : 'w-100' ?>">Search</button>
                <?php if (isset($query)) : ?>
                    <a href="/" class="btn btn-danger mb-3 w-25">Reset</a>
                <?php endif ?>
            </div>
        </form>


        <div>
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>
                <?php foreach ($Students  as $Student) : ?>
                    <tr>
                        <td><?= $Student->id;  ?> </td>
                        <td><?= $Student->name; ?> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>