<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ispis svih proizvoda</h4>
                    </div>
                    <div class="card-body">
                    <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Naziv proizvoda</th>
                                <th>Količina</th>
                                <th>Cijena</th>
                                <th>Aktivan</th>
                                <th>Status</th>
                                <th>ID brenda</th>
                                <th>ID kategorije</th>
                                <th>Uredi</th>
                                <th>Obrisi</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->rate}}</td>
                                    <td>{{$product->active}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>{{$product->brand_id}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td><a href="{{route('product.edit',['product' =>$product])}}" class="btn btn-warning">Uredi</a></td>
                                   <td>
                                    <form action ="{{route('product.destroy',['product' => $product ])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Izbrisi</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>