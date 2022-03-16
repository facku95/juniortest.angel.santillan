<?php include("templates/header.php");?>



    <div class="container cont">
        <div class="row mt-4">
            <form  method="POST" enctype="multipart/form-data">
                
                <div class="d-flex mb-3">

                <h4>Product Add</h4>
                <div class="top">    
                <button class="btn btn-outline-primary mb-2" name="action" value="save" type="submit">Save</button>
                <button class="btn btn-outline-primary mb-2" name="action" value="delete" type="submit">Mass delete</button>
                </div>

                </div>
            

            <hr>
            <div class="col-md-4 mb-5">
                
                    <div class="form-group mb-3 d-flex">
                        <label for="exampleInputEmail1">SKU: </label>
                        <input type="text" class="form-control add" name="id" placeholder="Ingrese nombre del producto">
                    </div>

                    <div class="form-group mb-3 d-flex">
                        <label for="exampleInputEmail1">Name: </label>
                        <input type="text" class="form-control add" name="nombre" placeholder="Ingrese nombre del producto">
                    </div>

                    <div class="form-group mb-3 d-flex">
                        <label for="exampleInputEmail1"> <h7>Price:</h7> </label>
                        <input type="text" class="form-control add" name="precio" placeholder="Ingrese precio">
                    </div>

                    <div class="form-group mb-3 d-flex">
                    <label for="categoria">Type Switcher:</label>
                                <select class="form-select add" name="categoria" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">DVD</option>
                                <option value="2">Book</option>
                                <option value="3">Furniture</option>
                                </select>

                               
                    </div>




                </form>
        

            </div>
            
        
        
        </div>


    </div>

    <div class="footer">
        <hr>
            <h7>Scandiweb Test Assigment</h7>
    </div>
    
</body>



</html>