<div>
    <div class="row">
        @foreach ($product as $product)

            <div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Agregar al carrito</a>
                       
                    </div>
                </div>

            </div>
        
            

        @endforeach
    </div>
</div>
