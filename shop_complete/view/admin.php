<h1>Item Administration Page</h1>

<div class="admin-container">
    <div>
        <form action="admin.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Item Name">
            <input type="text" name="details" placeholder="Item Description">
            <input type="number" name="price" placeholder="Item Price">

            <select name="category">
                <?php foreach($this->categories as $cat): ?>
                <option value='<?=$cat['id']?>'><?=$cat['name']?></option>
                <?php endforeach; ?>
            </select>

            <input type="file" name="item_image">

            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>

    <div>
        <table class="item-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->items as $item): ?>
                <tr>
                    <td><img src="<?=$item['image']?>" alt=""></td>
                    <td><?=$item['name']?></td>
                    <td><?=$item['details']?></td>
                    <td><?=$item['price']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>