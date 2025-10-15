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
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="d-flex justify-content-end p-0">
                    <a href="{{route('products.index')}}" class="btn btn-dark mt-3">Back</a>
                </div>

                <div class="card p-0 mt-3" style="width: 500px;">
                    <div class="card-header bg-dark text-white">
                        <h4 class="h4 ">Create Product</h4>
                    </div>
                    <div class="card-body shadow-lg">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <lable for="name" class="form-lable">Name :</lable>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <lable for="image" class="form-lable">Image :</lable>
                                <div class="d-flex align-items-center gap-3">
                                    <img id="preview-image" src="https://placehold.co/100x100?text=Preview" width="250" alt="Image Preview" class="rounded mt-2">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage(event)">
                                </div>
                                @error('image')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <lable for="sku" class="form-lable">SKU :</lable>
                                <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" value="{{old('sku')}}">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <lable for="price" class="form-lable">Price :</lable>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
                                @error('price')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <lable for="sku" class="form-lable">Status :</lable>
                                <select name="status" id="status" class="form-select">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('preview-image');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

</html>