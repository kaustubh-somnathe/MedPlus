@extends('layouts.udash')

@section('content')
<div class="card block-header form-head">
    <h2>Dashboard</h2>
</div>
<div class="container-fluid">
    <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>type</th>
                                                        <th>description</th>
                                                        <th>status</th>
                                                        <th>price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ckabd</td>
                                                        <td>Mobile</td>
                                                        <td>iPhone X 64Gb Grey</td>
                                                        <td class="process">Processed</td>
                                                        <td>$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>dvbsk</td>
                                                        <td>Mobile</td>
                                                        <td>Samsung S8 Black</td>
                                                        <td class="process">Processed</td>
                                                        <td>$756.00</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Meds
      </div>

      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="item-1.png" alt="" />
        </div>

        <div class="description">
          <span>Common Projects</span>
          <span>Bball High</span>
          <span>White</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price">$549</div>
      </div>

      <!-- Product #2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="item-2.png" alt=""/>
        </div>

        <div class="description">
          <span>Maison Margiela</span>
          <span>Future Sneakers</span>
          <span>White</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price">$870</div>
      </div>

      <!-- Product #3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="item-3.png" alt="" />
        </div>

        <div class="description">
          <span>Our Legacy</span>
          <span>Brushed Scarf</span>
          <span>Brown</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price">$349</div>
      </div>
    </div>

    <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>











<!--                                         <div class="owl-item" style="width: 240px;"><div class="item product product-item product-item-wd"><div class="product-item-info" data-container="product-grid"> <a href="https://www.netmeds.com/non-prescriptions/pristine-1st-bites-stage1-rice-300gm" class="product photo product-item-photo" tabindex="-1"> <span class="cat-img"> <span class="product-image-container" style="width:240px;"> <span class="product-image-wrapper" style="padding-bottom: 100%;"> <img class="product-image-photo" src="https://www.netmeds.com/pub/media/catalog/product/cache/small_image/240x240/5ae1b9f2dc49b6d07020441c43c91523/4/1/412259.jpg" width="240" height="240" alt="1st Bites - Rice (6-24 Months) Stage-1 Baby Food 300 gm"></span> </span> </span> </a><div class="product details product-item-details"> <strong class="product name product-item-name"> <a class="product-item-link" href="https://www.netmeds.com/non-prescriptions/pristine-1st-bites-stage1-rice-300gm">1st Bites - Rice (6-24 Months) Stag..</a> </strong><div class="price-box price-final_price" data-role="priceBox"> <span class="price-container price-final_price tax weee"> <strike id="price">Rs.240.00</strike> <span id="final_price" class="bolder">Rs.228.00</span> </span></div><div class="product-item-inner-old"><div class="product actions product-item-actions"><div class="addcartbox"><form data-role="tocart-form" action="https://www.netmeds.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cubmV0bWVkcy5jb20v/product/9202/" method="post"> <input type="hidden" name="cart_product_name" id="cart_product_name" value="1st Bites - Rice (6-24 Months) Stage-1 Baby Food 300 gm"> <input type="hidden" name="product" value="9202"> <input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cubmV0bWVkcy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OTNkM2N1Ym1WMGJXVmtjeTVqYjIwdi9wcm9kdWN0LzkyMDIv"> <input name="form_key" type="hidden" value="nXClhEE7C9bKD9nI"> <input type="hidden" name="itemprice" id="itemprice" value="228.00"> <input type="hidden" name="productid" id="productid" value="9202"> <input type="hidden" name="qty" id="qty" value="1"> <button type="submit" title="Add to Cart" class="action tocart primary"> Add to Cart </button></form></div></div></div></div></div></div></div> -->





<!--                                        <h1>Shopping Cart</h1>

<div class="shopping-cart">

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
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Dingo Dog Bones</div>
      <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
    </div>
    <div class="product-price">12.99</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
      <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>
</div> -->

@endsection
            