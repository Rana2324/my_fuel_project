<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body class=" d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="d-flex flex-column w-50 p-5 border" style="gap : 20px">
        <div class="row">
            <div class="col-8">
                <input type="text" name="" id="" class="w-100">
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-primary w-100">Save</button>
            </div>
        </div>
        <div class="row">
            <form action="student/index" method="GET">
                <div class="col-8">
                    <input type="text" name="search" id="" class="w-100">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </form>
        </div>


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