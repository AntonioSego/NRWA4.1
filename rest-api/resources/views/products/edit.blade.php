<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Uredjivanje proizvoda</h4>
                <form action="{{route('product.update',['product'=>$product])}}"  method ="POST">
                    @csrf
                    @method('put')
                    <div class="mt-3">
                    <label for="product_name">Naziv proizvoda </label>
                    <input type="text" name="product_name" class="form-controll" value="{{$product->product_name}}">
                 </div>
                <div class="mt-3">
                    <label for="quantitiy">Količina </label>
                    <input type="text" name="quantity" class="form-controll" value="{{$product->quantity}}">
                </div>
                <div class="mt-3">
                    <label for="rate">Cijena proizvoda </label>
                    <input type="text" name="rate" class="form-controll" value="{{$product->rate}}">
                </div>
                <div class="mt-3">
                    <label for="active">Aktivnost proizvoda </label>
                    <input type="text" name="active" class="form-controll" value="{{$product->active}}">
                </div>
                <div class="mt-3">
                    <label for="status">Status proizvoda </label>
                    <input type="text" name="status" class="form-controll" value="{{$product->status}}">
                </div>
                <div class="mt-3">
                    <label for="brand_id">ID brenda </label>
                    <input type="text" name="brand_id" class="form-controll" value="{{$product->brand_id}}">
                </div>
                <div class="mt-3">
                    <label for="category_id">ID kategorije </label>
                    <input type="text" name="category_id" class="form-controll" value="{{$product->category_id}}">
                </div>
                <div class="mt3">
                    <input type="submit" name="submit" class="btn btn-primary" value="Unesi">
                </div>
                    


            </form>

            </div>
        </div>
    </div>

    
                      
                   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>