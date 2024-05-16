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
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="{{route('products.create')}}" class='btn btn-dark'>CREATE</a>
                </div>
            </div>
            <div class="text-white text-center mt-4">
                @if(Session::has('success')))
                <div class='col-md-10 mt-4'>
                    <div class='alert alert-success'>
                        {{ Session::get('success') }}
                    </div>
                </div>  
                @endif
                <div class="col-md-10">
                    <div class="card borde-0 shadow-lg my-4">
                        <div class="card-header bg-dark">
                            <h3 class="text-white"> Products </h3>
                        </div>
                        <div class="card-body">
                            <table class='table'>
                                <tr>
                                    <th>ID</th>
                                    <th>IMAGE</th>
                                    <th>NAME</th>
                                    <th>SKU</th>
                                    <th>PRICE</th>
                                    <th>CREATED</th>
                                    <th>ACTION</th>
                                </tr> 
                                @if($products->isNotEmpty())
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>
                                        @if ($product->image!='')
<img width='80' height='40' src="{{asset('uploads/products/'.$product->image) }}" alt="">
                                        @endif

                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>${{$product->price}}</td>
                                    <td>{{\Carbon\Carbon::parse($product->created_at)->format('d M, Y')}}</td>
                                    <td>
                                        <a href="{{route('products.edit', $product->id)}}" class='btn btn-dark'>EDIT</a>
                                        <a href="#" class='btn btn-danger'>DELETE</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>