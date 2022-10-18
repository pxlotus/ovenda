            <!-- product area start -->
            <section class="product__area box-plr-75 pt-60 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5">
                            <div class="product__details-nav d-sm-flex align-items-start">
                                <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="thumb1-tab" data-bs-toggle="tab" data-bs-target="#thumb_1" type="button" role="tab" aria-controls="thumb_1" aria-selected="true">
                                          <img src="<?= $url ?>uploads/products/main/<?= $main_img ?>" alt="">
                                      </button>
                                    </li>
                                    <?php 
                                      $i = 2;
                                      foreach ($prodImages as $img):
                                    ?>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumb<?= $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#thumb_<?= $i; ?>" type="button" role="tab" aria-controls="thumb_<?= $i; ?>">
                                          <img src="<?= $url ?>uploads/products/others/<?= $img->file_name ?>" alt="">
                                      </button>
                                    </li>
                                    <?php $i++; endforeach; ?>                                                                                                                                                                                                                          
                                </ul>
                                <div class="product__details-thumb">
                                    <div class="tab-content" id="productThumbContent">
                                        <div class="tab-pane fade show active" id="thumb_1" role="tabpanel" aria-labelledby="thumb_1-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="<?= $url ?>uploads/products/main/<?= $main_img ?>" alt="">
                                            </div>
                                        </div>
                                        <?php  $i = 2; foreach ($prodImages as $img): ?>
                                          <div class="tab-pane fade" id="thumb_<?= $i; ?>" role="tabpanel" aria-labelledby="thumb<?= $i; ?>-tab">
                                              <div class="product__details-nav-thumb">
                                                  <img src="<?= $url ?>uploads/products/others/<?= $img->file_name ?>" alt="">
                                              </div>
                                          </div>
                                        <?php $i++; endforeach; ?> 
                                      </div>
                                </div>
                            </div>
                        </div>