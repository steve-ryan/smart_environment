<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../frontend/css/client.css">
    <script src="./../../frontend/js/jq.js"></script>
    <script src="./../../frontend/js/admin.js"></script>
</head>

<body>

    <div class="header">
        <h6>Admin Panel</h6>
    </div>

    <form action="submit.php" method="POST">
        <!--<div class="form-group">-->
        <div class="input-group">
            <select name="categories" id="category">
                <option disabled class="dropdown-header">---Seedling Category---</option>
                <option value="Medicinal" name="Medicinal">Medicinal</option>
                <option value="Exotic" name="Exotic">Exotic</option>
                <option value="Fruit" name="Fruit">Fruit</option>
                <option value="Indiginous" name="Indiginous">Indiginous</option>
            </select>
        </div>
        <!--</div>-->
        <div class="input-group">

            <label>Name:</label>
            <input type="text" name="name" placeholder="name" required>
        </div>
        <div class="input-group">
            <label>Description:</label>
            <textarea class="form-contol" rows="3" cols="30" placeholder="write something..."></textarea>
        </div>
        <div class="input-group">
            <label>Price</label>
            <input type="text" name="price" placeholder="price" required>
        </div>
        <div class="input-group">
            <label>Path:</label>
            <input type="text" name="path" placeholder="image path" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Submit</button>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="reset" class="btn">Reset</button>
        </div>

        </div>
        </div>
        </div>
    </form>
    </fieldset>

    <script src="" async defer></script>
</body>

</html>