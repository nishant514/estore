<!DOCTYPE html>
<html lang="en">
     @include('frontend.header')
    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
    
          @include('frontend.navbar')
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="estore/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="estore/img/product-1.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="estore/img/product-2.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="estore/img/product-3.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="estore/img/product-4.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="estore/img/product-5.jpg" alt="Image"></a>
                                                    <p>Product Name</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>$99</span></p>
                                            <p>Shipping Cost<span>$1</span></p>
                                            <h2>Grand Total<span>$100</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button>Update Cart</button>
                                            <button>Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="estore/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="estore/img/godaddy.svg" alt="Payment Security" />
                            <img src="estore/img/norton.svg" alt="Payment Security" />
                            <img src="estore/img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        @include('frontend.footer')
    </body>
</html>
