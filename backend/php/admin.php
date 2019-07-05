<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../../bootstrap/css/bootstrap.min.css">
    <script src="./../../frontend/js/jq.js"></script>
    <script src="./../../frontend/js/admin.js"></script>
</head>

<body>
<?php 
    require('connection.php');
    ?>
    <form action="admin_submit.php" method="POST">
    <h3>Admin Panel</h3>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Category</label>
                <select name="categories" class="form-control">
                    <option disabled>Choose..</option>
                    <option value="Medicinal" name="Medicinal">Medicinal</option>
                    <option value="Exotic" name="Exotic">Exotic</option>
                    <option value="Fruit" name="Fruit">Fruit</option>
                    <option value="Indiginous" name="Indiginous">Indiginous</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group col-md-4">
                <label>Path</label>
                <input type="text" class="form-control" name="path" required>
            </div>
            <div class="form-group col-md-2">
                <label>Price</label>
                <input type="text" name="price" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" placeholder="write something..." name="description" required></textarea>
        </div>
        <div class="col-auto ">
            <button type="submit" class="btn btn-primary mb-2 btn-block">Submit</button>
        </div>
    </form>
    <table class="table table-sm ">
        <thead class="table-success">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php

$query = mysqli_query($conn, "SELECT * FROM seedlings")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
  "<tr>
       <td>{$row['seedling_id']}</td>
       <td>{$row['category']}</td>
       <td>{$row['path']}</td>
       <td>{$row['s_name']}</td>
       <td>{$row['description']}</td>
       <td>{$row['price']}</td>
       <td><a href='delete.php?id=".$row['seedling_id']."'>X</a></td>
   </tr>\n";
}

?>
    
    <script src="" async defer></script>
</body>

</html>