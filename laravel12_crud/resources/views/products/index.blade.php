<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
      <div class="bg-dark text-center text-white py-3">
        <h1 class="h2">Laravel-12-Crud!</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-end p-0">
                <a href="{{route('products.create')}}" class="btn btn-dark mt-3">Create</a>
            </div>

            <div class="mt-2">
                @if(Session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(Session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>

            <div class="card p-0 mt-3">
                <div class="card-header bg-dark text-white">
                    <h4 class="h4 ">Products</h4>
                </div>
                <div class="card-body shadow-lg">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Price</th>
                                <th width="100">Status</th>
                                <th width="120" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($products->isNotEmpty())
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>
                                            @if(!empty($product->image))
                                                <img src="{{asset('uploads/products/'.$product->image)}}" width="50" alt="" class="rounded">
                                            @else
                                                <img src="https://placehold.co/600x700" width="50" alt="" class="rounded">
                                            @endif
                                            
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->sku}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            @if($product->status == 'Active')
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-dark btn-sm">Edit</a>
                                            <form action="{{route('products.destroy',$product->id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete product?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            <!-- <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                                        </td>
                                    </tr> 
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No Products Found</td>
                                  </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
