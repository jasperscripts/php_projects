<h1>Lets Shop Now</h1>
<div class="alert-success full-width text-center"><?=$this->message?></div>
<div class="feature">

    <?php foreach($this->items as $item): ?>
     <div class="card">
        <img src="<?=$item['image']?>" class="feature-image">
        <h3><?=$item['name']?></h3>
        <p><?=$item['details']?></p>
        <p><?=$item['price']?></p>

        <div class="btn btn-secondary">
            <a href="index.php?item=<?=$item['id']?>">
                <i class="bi bi-cart"></i> 
                Add To Cart
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script>
setTimeout(()=>{
    let message = document.querySelector('.alert-success');
    message.textContent='';
}, 2000);


</script>