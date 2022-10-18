            <!-- banner area start -->
            <section class="banner__area pt-20 pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item w-img mb-30">
                                <a href="categories/M-62f3a5a452a5d"><img src="<?= $url ?>static/siteassets/img/banner/1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="categories/M-62fa211032741"><img src="<?= $url ?>static/siteassets/img/banner/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="categories/M-62f39a617b0c4"><img src="<?= $url ?>static/siteassets/img/banner/electronics.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- onsale product area start -->
            <section class="onsell__area pt-15 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>All available<span> Products</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php fetchAllProducts() ?>   
                    
                    </div>
                </div>
            </section>
            <div id='product-component-1661251604375'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'ovendaug.myshopify.com',
      storefrontAccessToken: '982734d222a8cf0c517b32da5c2fc115',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '7090043814028',
        node: document.getElementById('product-component-1661251604375'),
        moneyFormat: 'Ush%20%7B%7Bamount_no_decimals%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "title": {
        "color": "#7c490c"
      },
      "price": {
        "color": "#0a0a0a",
        "font-family": "Lato, sans-serif",
        "font-weight": "bold"
      },
      "compareAt": {
        "color": "#0a0a0a",
        "font-family": "Lato, sans-serif",
        "font-weight": "bold"
      },
      "unitPrice": {
        "color": "#0a0a0a",
        "font-family": "Lato, sans-serif",
        "font-weight": "bold"
      },
      "button": {
        "background-color": "#ca7f00",
        ":hover": {
          "background-color": "#b67200"
        },
        ":focus": {
          "background-color": "#b67200"
        },
        "padding-left": "62px",
        "padding-right": "62px",
        "border-radius": "7px",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      },
      "quantityInput": {
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      }
    },
    "googleFonts": [
      "Lato"
    ],
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#ca7f00",
        ":hover": {
          "background-color": "#b67200"
        },
        ":focus": {
          "background-color": "#b67200"
        },
        "padding-left": "62px",
        "padding-right": "62px",
        "border-radius": "7px",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      },
      "quantityInput": {
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      }
    }
  },
  "option": {
    "styles": {
      "label": {
        "font-family": "Lato, sans-serif",
        "font-weight": "bold"
      },
      "select": {
        "font-family": "Lato, sans-serif",
        "font-weight": "bold"
      }
    },
    "googleFonts": [
      "Lato"
    ]
  },
  "cart": {
    "styles": {
      "button": {
        "background-color": "#ca7f00",
        ":hover": {
          "background-color": "#b67200"
        },
        ":focus": {
          "background-color": "#b67200"
        },
        "border-radius": "7px",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#ca7f00",
        ":hover": {
          "background-color": "#b67200"
        },
        ":focus": {
          "background-color": "#b67200"
        }
      },
      "count": {
        "font-size": "14px"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>
            <!-- onsale product area end -->