<?php  include("templates/header.php") ?>

<div class="container cont">
    <div class="row mt-4">
    <form  method="POST" enctype="multipart/form-data">

        <div class="d-flex mb-3">
            <h4>Product list</h4>

            <div class="top">
            <a href="<?php echo $url;?>/addproduct.php"><button class="btn btn-outline-success">Add</button></a>
            <button class="btn btn-outline-success" >Mass delete</button>
            </div>

        </div>

        <hr>
        <?php foreach($list as $product){  ?>
        <div class="col-md-3 mb-5 cards">
            
            <div class="card mb-3 products" style="width: 18rem;">
                <div class="card-body">
                <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="delete-checkbox" name="delete[]" value="<?php echo $product['id']?>">
                        
                      </label>

                </div>
                    <div class="items">
                        <h6 class="card-title"><?php echo $product['sku'];?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['name'];?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['price'];?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['type'];?></h6>
                    </div>

                </div>
            </div>
        </div>
        <?php }?>
        <form action=""></form>

        <hr>
        <footer>Scandiweb Test Assigment</footer>
    </div>
</div>

</body>
</html>