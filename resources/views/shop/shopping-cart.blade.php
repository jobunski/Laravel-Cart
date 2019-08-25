@if(Session::has('cart'))
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 offset-lg-2 offset-md-3 offset-sm-3">
        <ul class="list-group-item">
            <div class="shopping-cart">
                @foreach($products as $product)
                <div class="column-labels">
                    <label class="product-image">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>
                <div class="product">
                    <div class="product-image">
                        <img src="{{ $product['item']['imagePath'] }}">
                    </div>
                    <div class="product-details">
                        <div class="product-title">{{ $product['item']['title'] }}</div>
                        <p class="product-description">{{ $product['item']['description'] }}</p>
                    </div>
                    <div class="product-price">{{ $product['item']['price'] }}</div>
                    <div class="product-quantity">{{ $product['qty']}}</div>
                    <div class="dropdown-menu">
                        <a href="#" type=" button" >Reduce</a>
                        <hr>
                        <a href="#" type=" button" >Remove</a>
                    </div>
                    <div class="product-line-price">{{$product['price']}}</div>
                </div>
                @endforeach
                <div class="totals">
                    <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal">{{$totalPrice}}</div>
                    </div>
                </div>
                <a href="{{ route('product.index') }}" class="contshopping" type="button">Continue Shopping</a>
                <a href="#" class="checkout" type="button">Checkout</a>
            </div>
        </ul>
    </div>
<@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md -offset-3 col-sm-offset-3">
        <h2>No Items in Cart</h2>
    </div>
</div>
@endif

