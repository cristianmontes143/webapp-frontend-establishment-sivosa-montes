<!-- navbar mobile Start -->
<div class="navbar-mobile d-lg-none">
    <div class="row align-items-center">
        <div class="col-3">
            <!-- navbar cart start -->
            <div class="navbar-toggle icon-text-btn">
                <a class="icon-btn primary-icon-text mobile-menu-open-7" href="javascript:void(0)">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- navbar cart Ends -->
        </div>
        <div class="col-6">
            <!-- desktop logo Start -->
            <div class="mobile-logo text-center">
                <a href="default.html"><img src="{{asset('landing-page-asset/Logo_L_vector.png')}}" alt="Logo"></a>
            </div>
            <!-- desktop logo Ends -->
        </div>

        {{-- <div class="col-3">
            <!-- navbar cart start -->
            <div class="navbar-cart">
                <a class="icon-btn primary-icon-text icon-text-btn" href="javascript:void(0)">
                    <i class="bi bi-cart3"></i>
                    <span class="icon-text text-style-1">3</span>
                </a>

                <div class="navbar-cart-dropdown">
                    <div class="checkout-style-2">
                        <div class="checkout-header d-flex justify-content-between">
                            <h6 class="title">Shops</h6>
                        </div>

                        <div class="checkout-table table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="checkout-product">
                                            <div class="product-cart d-flex">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product-cart/product-1.png"
                                                        alt="Product">
                                                </div>
                                                <div class="product-content media-body">
                                                    <h5 class="title">
                                                        <a href="product-details-page.html">Hollow Port</a>
                                                    </h5>
                                                    <ul>
                                                        <li><span>Brown</span></li>
                                                        <li><span>XL</span></li>
                                                        <li>
                                                            <a class="delete" href="javascript:void(0)">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="checkout-quantity">
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" id="sub" class="sub">
                                                    <i class="mdi mdi-minus"></i>
                                                </button>
                                                <input type="text" value="1">
                                                <button type="button" id="add" class="add">
                                                    <i class="mdi mdi-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">$36.00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-product">
                                            <div class="product-cart d-flex">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product-cart/product-2.png"
                                                        alt="Product">
                                                </div>
                                                <div class="product-content media-body">
                                                    <h5 class="title">
                                                        <a href="product-details-page.html">Mist Black Triblend</a>
                                                    </h5>
                                                    <ul>
                                                        <li><span>Brown</span></li>
                                                        <li><span>XL</span></li>
                                                        <li>
                                                            <a class="delete" href="javascript:void(0)">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="checkout-quantity">
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" id="sub" class="sub">
                                                    <i class="mdi mdi-minus"></i>
                                                </button>
                                                <input type="text" value="1">
                                                <button type="button" id="add" class="add">
                                                    <i class="mdi mdi-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">$36.00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-product">
                                            <div class="product-cart d-flex">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product-cart/product-3.png"
                                                        alt="Product">
                                                </div>
                                                <div class="product-content media-body">
                                                    <h5 class="title">
                                                        <a href="product-details-page.html">Realm Bone</a>
                                                    </h5>
                                                    <ul>
                                                        <li><span>Brown</span></li>
                                                        <li><span>XL</span></li>
                                                        <li>
                                                            <a class="delete" href="javascript:void(0)">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="checkout-quantity">
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" id="sub" class="sub">
                                                    <i class="mdi mdi-minus"></i>
                                                </button>
                                                <input type="text" value="1">
                                                <button type="button" id="add" class="add">
                                                    <i class="mdi mdi-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">$36.00</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-product">
                                            <div class="product-cart d-flex">
                                                <div class="product-thumb">
                                                    <img src="assets/images/product-cart/product-4.png"
                                                        alt="Product">
                                                </div>
                                                <div class="product-content media-body">
                                                    <h5 class="title">
                                                        <a href="product-details-page.html">Circular Sienna</a></h5>
                                                    <ul>
                                                        <li><span>Brown</span></li>
                                                        <li><span>XL</span></li>
                                                        <li>
                                                            <a class="delete" href="javascript:void(0)">
                                                                <i class="mdi mdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="checkout-quantity">
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" id="sub" class="sub">
                                                    <i class="mdi mdi-minus"></i>
                                                </button>
                                                <input type="text" value="1">
                                                <button type="button" id="add" class="add">
                                                    <i class="mdi mdi-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="checkout-price">
                                            <p class="price">$36.00</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="checkout-footer">
                            <div class="checkout-sub-total d-flex justify-content-between">
                                <p class="value">Subtotal Price:</p>
                                <p class="price">$144</p>
                            </div>
                            <div class="checkout-btn">
                                <a href="cart-page.html" class="main-btn primary-btn-border">View Cart</a>
                                <a href="checkout-page.html" class="main-btn primary-btn">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- navbar cart Ends -->
        </div> --}}

    </div>
    <!-- navbar search start -->
    <div class="navbar-search mt-15 search-style-5">
        <div class="search-select">
            <select>
                <option value="">All</option>
                <option value="1">Latest Products</option>
                <option value="2">On sale!</option>
                <option value="3">Smartphones</option>
                <option value="4">Gaming</option>
                <option value="5">DIY Components</option>
            </select>
        </div>
        <div class="search-input">
            <input type="text" placeholder="Search Here!">
        </div>
        <div class="search-btn">
            <button><i class="bi bi-search"></i></button>
        </div>
    </div>
    <!-- navbar search Ends -->
</div>
<!-- navbar mobile Start -->