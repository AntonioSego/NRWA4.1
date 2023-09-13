<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narudzba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Unos narudzbe</h4>
                <form action="{{route('order.store')}}"  method ="POST">
                    @csrf
                    @method('post')
                 <div class="mt-3">
                    <label for="order_date">Datum narudzbe </label>
                    <input type="date" name="order_date" class="form-controll">
                 </div>
                <div class="mt-3">
                    <label for="client_name">Naziv klijenta </label>
                    <input type="text" name="client_name" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="client_contact">Kontakt</label>
                    <input type="text" name="client_contact" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="product_name">Naziv proizvoda</label>
                    <input type="text" name="product_name" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="noOfProducts">noOfProducts</label>
                    <input type="text" name="noOfProducts" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="sub_total">Sub_total</label>
                    <input type="text" name="sub_total" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="vat">PDV</label>
                    <input type="text" name="vat" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="discount">Popust</label>
                    <input type="text" name="discount" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="total_amount">Ukupan iznos</label>
                    <input type="text" name="total_amount" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="paid">Plaćanje</label>
                    <input type="text" name="paid" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="due">DUE</label>
                    <input type="text" name="due" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="payment_type">Tip placanja</label>
                    <input type="text" name="payment_type" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="payment_status">Status placanja</label>
                    <input type="text" name="payment_status" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="product_id">ID proizvoda</label>
                    <input type="text" name="product_id" class="form-controll">
                </div>
                <div class="mt-3">
                    <label for="user_id">ID korisnika</label>
                    <input type="text" name="user_id" class="form-controll">
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