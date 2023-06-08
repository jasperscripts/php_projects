
<div class="feature">
<table class="item-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Count</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $total=0 ?>
        <?php foreach($this->orders as $orders): ?>
        <?php if($orders['status']==0) { continue; } ?>
        <?php $total += $orders['price'] * $orders['count']; ?>
        <tr>
            <td><img src="<?=$orders['image']?>" alt=""></td>
            <td><?=$orders['name']?></td>
            <td><?=$orders['count']?></td>
            <td>₱<?=number_format($orders['price'],2)?></td>
            <td>₱<?=number_format($orders['price'] * $orders['count'],2)?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">Total</td>
            <td>₱<?=number_format($total,2)?></td>
        </tr>
    </tbody>
</table>

<div class="btn btn-primary">
    <a href="billing.php">
        <i class="bi bi-cart-check"></i>
        Checkout
    </a>
</div>
</div>