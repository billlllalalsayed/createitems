<!DOCTYPE html>
<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Display Records</title>
    <style>
        .custab .custab {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }

        .custab:hover {
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row->Name . "</td>";
                    echo "<td>" . $row->Email . "</td>";
                    echo "<td>" . $row->Phone . "</td>";
                    echo  " <td><a href='deletedata?id=" . $row->ID . "'class='btn btn-danger'>Delete</a></td>";
                    echo "<td><a href='updatedata?id=" . $row->ID . "'class='btn btn-info'>Update</a></td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </table>
            <br>
            <tr><a href="http://127.0.0.1:8012/createitems/index.php/Item/savedata" class="btn btn-primary btn-xs pull-right"><b></b> Register</a></tr>
</body>

</html>