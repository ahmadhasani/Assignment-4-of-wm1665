<?php require_once 'header.php' ?>
    <!-- Base-Area-Start -->
    <section class="base-image prl">
        <div class="container-fluid">
            <div class="col-sm-4 hidden-xs">
                <div class="single-base">
                    <div class="base-photo"> <img src="images/base-image-1.jpg" alt="ecommer"> </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="single-base">
                    <div class="base-photo"> <img src="images/base-image-2.jpg" alt="ecommer"> </div>
                    <div class="base-text">
                        <h2>Mobiles</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-xs ">
                <div class="single-base">
                    <div class="base-photo fifty"> <img src="images/base-image-3.jpg" alt="ecommer"> </div>
                    <div class="base-photo"> <img src="images/base-image-4.jpg" alt="ecommer"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base-Area-End -->
    <section class="shop-area prl">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <div class="sidebar">
                        <div class="searching-box">
                            <form method="get">
                                <input type="text" name="search" placeholder="Search here...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar cetagory">
                            <h3>Cetagory</h3>
                            <ul>



                                <li><a href="tablet.html">Tablets</a></li>
                                <li><a href="acc.php">Accessories</a></li>
                                <li><a href="watch.html">Andriod Watch</a></li>
                            </ul>
                        </div>
                        <div class="single-sidebar rance-slider">
                            <h3>Price Rance</h3>
                            <div id="slider"></div>
                            <div id="slider-range">Price : <span id="range-value"></span></div>
                        </div>
                        <div class="single-sidebar fill_color">
                            <h3>Color</h3>
                            <ul>
                                <li class="blue"><a href="#">Blue</a></li>
                                <li class="cyan"><a href="#">Cyan</a></li>
                                <li class="yello"><a href="#">Yellow</a></li>
                                <li class="pink"><a href="#">Pink</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-bar fix">
                                <div class="grid-list-button alignleft">
                                    <button type="button" class="active grid-battn"><i class="fa fa-th"></i></button>
                                    <button type="button" class="list-battn"><i class="fa fa-list"></i></button>
                                </div>
                                <div class="sidebar-select alignright"> <span>Sort By : </span>
                                    <select name="name" class="selectpicker" id="filter-sort">
                                        <option value="">Popularity</option>
                                        <option value="">New</option>
                                        <option value="">Feature</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shopitems grid">
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-1.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-2.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-3.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-4.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-5.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-6.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-1.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-2.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-3.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-4.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-5.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 full-width">
                            <div class="single-popular-product">
                                <div class="populer-product-photo">
                                    <div class="shop-photo">
                                        <a href="#"><img src="images/access/accessories-6.png" alt="shop"></a>
                                    </div>
                                    <div class="add-cart"> <a href="#"><i class="fa fa-heart-o"></i></a> <a href="checkout.html">Add to cart</a> <a href="#"><i class="fa fa-random"></i></a> </div>
                                </div>
                                <h5>Night Dress</h5> <span class="rate">&#36;120</span>
                                <div class="shop-list-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate accusamus ex a vel magnam reiciendis placeat aliquid temporibus, quas, quaerat provident amet soluta delectus harum non cupiditate praesentium pariatur nemo distinctio! Repudiandae molestias, saepe aperiam distinctio eligendi tenetur, quo autem illo ea at soluta earum. Nesciunt vel sunt, numquam!</p>
                                    <div class="stock-status">
                                        <p><i class="fa fa-check"></i> In Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="shop-pagination alignright">
                                <ul id="pagination-demo" class="pagination-sm pagination">
                                    <li class="page-item first"><a href="#" class="page-link">First</a></li>
                                    <li class="page-item prev"><a href="#" class="page-link">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                                    <li class="page-item"><a href="#" class="page-link">7</a></li>
                                    <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    <li class="page-item last"><a href="#" class="page-link">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter-Area-Start -->
    <section class="newsletter-area prl">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-offset-1 col-md-3">
                    <div class="alignleft">
                        <h2>Newslatter</h2> </div>
                </div>
                <div class="col-xs-12 col-sm-offset-1 col-sm-6">
                    <form id="mc-form" class="subscribe-form alignright">
                        <label class="mt10" for="mc-email"></label>
                        <input type="email" id="mc-email" placeholder="Enter email address...">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
  <?php require_once 'footer.php'?>