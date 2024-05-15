<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <body>
        <div class="bg-dark py-3">
            <h3 class='text-white text-center'>LARAVEL 11 CRUD</h3>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 shadow-lg my-3">
                        <div class="card-header">
                            <h3>Create Product</h3>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class='form-lable'>Name</label>
                                    <input type="text" class='form-control-lg' placeholder="Name" name='name'>
                                </div>
                                <div class="mb-3">
                                    <label for="" class='form-label'>Sku</label>
                                    <input type="text" class='form-control-lg' placeholder="Name" name='name'>
                                </div>
                                <div class="mb-3">
                                    <label for="" class='form-label'>Price</label>
                                    <input type="text" class='form-control-lg' placeholder="Name" name='price'>
                                </div>
                                <div class="mb-3">
                                    <label for="" class='form-label'>Description</label>
                                    <input type="text" class='form-control-lg' placeholder="Name" name='description'>
                                </div>
                                <div class="mb-3">
                                    <label for="" class='form-label'>Image</label>
                                    <input type="file" class='form-control-lg' placeholder="Name" name='name'>
                                </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
