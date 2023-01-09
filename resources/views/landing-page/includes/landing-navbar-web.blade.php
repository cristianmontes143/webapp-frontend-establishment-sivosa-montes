<!-- main navbar Start -->
<div class="navbar-wrapper">
    <div class="container-lg">
        <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
            <!-- desktop logo Start -->
            <div class="desktop-logo d-none d-lg-block">
                <a href="index.html"><img src="{{asset('landing-page-asset/Logo_L_vector.png')}}" alt="Logo"></a>
            </div>
            <!-- desktop logo Ends -->
            <!-- navbar menu Start -->
            <div class="navbar-menu">
                <ul class="main-menu">
                    <li class="position-static menu-item-has-children">
                        <a href="#">Category</a>
                        <!-- sub mega dropdown Start -->
                        <ul class="sub-mega-dropdown">
                            <li>
                                <div class="mega-dropdown-menu">
                                    <ul class="container mega-dropdown d-flex flex-wrap">
                                        <h4 class="heading-4 font-weight-500 mega-title dropdown-title pd-4">Products
                                        </h4>

                                        <li class="mega-dropdown-list menu-item-has-children menu-item-mobile">
                                            <ul>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-laptop"></i>
                                                        Laptop</a>
                                                </li>
                                                <li>
                                                    <a href="category.html  my-auto">
                                                        <i class="bi bi-pc-display"></i>
                                                        Computer</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-motherboard"></i>
                                                        PC Components</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-person-workspace"></i>    
                                                        Gaming Chair</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-keyboard"></i>
                                                        Peripherals</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-microsoft"></i>
                                                        Software</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega-dropdown-list menu-item-has-children">
                                            <ul>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-phone"></i>
                                                        Smarthphone</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-tablet-landscape"></i>
                                                        Tablet</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-earbuds"></i>
                                                        Phone Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-router"></i>
                                                        Networking</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega-dropdown-list menu-item-has-children">
                                            <ul>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-printer"></i>
                                                        Printers</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-droplet-half"></i>
                                                        Inks & Toners</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-usb-mini"></i>
                                                        Laminator</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-usb-drive"></i>
                                                        Storage</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-trash"></i>
                                                        Cleaning Kit</a>
                                                </li>
                                                <li>
                                                    <a href="category.html">
                                                        <i class="bi bi-webcam"></i>
                                                        Security & Survillance</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega-dropdown-list">
                                            <img src="assets/images/menu-slider-1.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- sub mega dropdown Ends -->

                    </li>
                    <li><a href="category.html">Home</a></li>
                    <li><a href="category.html">Promotions</a></li>
                    <li><a href="category.html">Support</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <!-- sub menu Start -->
                        <ul class="sub-menu">
                            <li><a href="about-page.html">About Page</a></li>
                            <li><a href="contact-page.html">Contact Page</a></li>
                            <li><a href="product-details-page.html">Product Details Page</a></li>
                            <li><a href="signup-page.html">Shop Page</a></li>
                        </ul>
                        <!-- sub menu Ends -->
                    </li>
                </ul>
            </div>
            <!-- navbar menu Ends -->
            <div class="navbar-search-cart d-none d-lg-flex">
                <!-- navbar search start -->
                <div class="navbar-search search-style-5">
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
                        <input type="text" placeholder="Search Here!!">
                    </div>
                    <div class="search-btn">
                        <button><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- navbar search Ends -->

                <!-- navbar cart start -->
                {{-- <div class="navbar-cart">
                    <a class="icon-btn primary-icon-text icon-text-btn" href="javascript:void(0)">
                        <i class="bi bi-cart3"></i>
                        <span class="icon-text text-style-1">3</span>
                    </a>

                    <div class="navbar-cart-dropdown">
                        <div class="checkout-style-2">
                            <div class="checkout-header d-flex justify-content-between">
                                <h6 class="title">Shopping Cart</h6>
                            </div>

                            <div class="checkout-table">
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
                                                            <a href="product-details-page.html">Circular Sienna</a>
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
                                    </tbody>
                                </table>
                            </div>

                            <div class="checkout-footer">
                                <div class="checkout-sub-total d-flex justify-content-between">
                                    <p class="value">Subtotal Price:</p>
                                    <p class="price">$144</p>
                                </div>
                                <div class="checkout-btn">
                                    <a href="cart-page.html" class="main-btn primary-btn-border">View
                                        Cart</a>
                                    <a href="checkout-page.html" class="main-btn primary-btn">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- navbar cart Ends -->

            </div>
        </nav>
    </div>
</div>
<!-- main navbar Ends -->