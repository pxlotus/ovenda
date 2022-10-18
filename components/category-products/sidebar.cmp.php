            <!-- product area start -->
            <section class="product__area box-plr-75 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-3 col-lg-4">
                            <div class="product__widget">
                                <!-- <div class="product__widget-item mb-15">
                                    <div class="accordion" id="productWidgetAccordion">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button product__widget-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Color
                                            </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                              <div class="product__widget-content">
                                                  <div class="product__color pt-10">
                                                        <ul>
                                                           <li>
                                                              <a href="#" class="black"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="blue"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="red"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="yellow"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="pink"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="brown"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="green"></a>
                                                           </li>
                                                           <li>
                                                              <a href="#" class="oragne"></a>
                                                           </li>
                                                        </ul>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div> -->
                                <div class="product__widget-item mb-15">
                                    <div class="accordion" id="productWidgetAccordion1">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button product__widget-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Price
                                            </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#productWidgetAccordion1">
                                            <div class="accordion-body">
                                              <div class="product__widget-content">
                                                <div class="product__price-slider">
                                                    <div>
                                                        <form action="#">
                                                            <input type="text" id="amount" readonly>
                                                        </form>
                                                    </div>
                                                    <div id="slider-range"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__widget-item mb-15">
                                    <div class="accordion" id="productWidgetAccordion2">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Price
                                            </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapses" aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                              <div class="product__widget-content">
                                               <div class="product__size pt-10">
                                                   <ul>
                                                       <li>
                                                           <a href="#">S</a>
                                                        </li>
                                                       <li>
                                                           <a href="#">M</a>
                                                        </li>
                                                       <li>
                                                           <a href="#">L</a>
                                                        </li>
                                                       <li>
                                                           <a href="#">XL</a>
                                                        </li>
                                                       <li>
                                                           <a href="#">XXL</a>
                                                        </li>
                                                   </ul>
                                               </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="product__widget-item mb-45">
                                    <div class="banner__item mb-20 w-img">
                                        <a href="product-details.html">
                                            <img src="<?= $url ?>static/siteassets/img/banner/banner-sm-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product__widget-item">
                                    <h3 class="product__widget-title mb-25">Top Rated</h3>
                                    <div class="product__sm">
                                        <ul> 
                                            <?php
                                             if($res != null):  foreach ($res as $item): ?>
                                            <li class="product__sm-item d-flex align-items-center">
                                                <div class="product__sm-thumb mr-20">
                                                    <a href="product-details.html">
                                                        <img src="<?= $url ?>uploads/products/main/<?= $item['main_pic'] ?>" width="50px" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__sm-content">
                                                    <h3 class="product__sm-title" style="font-weight: 600;">
                                                        <a href="#"><?= $item['pName'] ?></a>
                                                    </h3>
                                                    
                                                    <div class="product__sm-price">
                                                        <span class="price" style="color: #fdb722;">UGX <?= $item['price'] ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; else: echo 'No rated products';endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>