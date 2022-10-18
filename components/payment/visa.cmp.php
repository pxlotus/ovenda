<link rel="stylesheet" href="<?=$url?>static/siteassets/css/visa.css">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12 m-auto">
        <div id="root">
        
        <div id="card">
            <div id="card-bottom"></div>
            <div id="card-top">
            <div class="logo">
            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="72px" height="72px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;" fill="white">
                <g>
                <g>
                    <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                            c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                            c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                            M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                            c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                            c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                            l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                            C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                            C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                            c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                            h-3.888L19.153,16.8z"/>
                </g>
                </g>
            </svg>
            </div>
            <div class="card-number">
                XXXX XXXX XXXX XXXX
            </div>
            <div class="row-container">
                <div class="card-holder">
                <span>Card Holder</span>
                <span></span>
                </div>
                <div class="expiry">
                <span>Expires</span>
                <span>
                    <span class="expiry-month">00</span> 
                    / 
                    <span class="expiry-year">00</span>
                </span>
                </div>
                <div class="cvc">
                <span>CVC</span>
                <span>___</span>
                </div>
            </div>
            </div>  
        </div>
        <form id="form" autocomplete="off">
            <header>
            </header>
            <fieldset class="card-number">
            <legend>Card Number</legend>
            <span>
                <input id="card-number" required name="card_name" maxlength="19" placeholder="1234 5678 9123 4567"/>
            </span>
            </fieldset>
            <fieldset class="card-holder">
            <legend>Card holder</legend>
            <input type="text" id="card-holder" name="name" required placeholder="John Doe"/>
            </fieldset>
            <div class="row-container">
            <fieldset class="expiry-month">
                <legend>Expiray Month</legend>
                <select class="card-select" class="month" required>
                    <option value="" disabled selected hidden>01</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </fieldset>
            <fieldset class="expiry-year">
                <legend>Expiry Year</legend>
                <select id="card-expiration-year" name="exipry_year" class="card-select" required> 
                <option value="" disabled selected hidden>2022</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
                </select>
            </fieldset>
            <fieldset class="cvc">
                <legend>CVC</legend>
                <input class="cvc" name="cvc" required type="text" maxlength="3" />
            </fieldset>
            </div>
            <!-- <div class="payment-details">
                <div class="subtotal">
                    <span class="category">Sub-Total:</span> 
                    <span class="price">$35.59 CAD</span>
                </div>
            </div> -->
            <button type="submit" name="visa-pay">Pay Now</button>
            
        </form>  
    </div>
        </div>
    </div>
    
    
</div>
<script>
    document.addEventListener("DOMContentLoaded", e => {
  let card_number_input = document.querySelector("form fieldset.card-number input"),
      card_number_display = document.querySelector("div#card .card-number");
  
  let card_holder_input = document.querySelector("form fieldset.card-holder input"),
      card_holder_display = document.querySelector("div#card .card-holder > span:nth-child(2)");

  let expiry_month_select = document.querySelector("form fieldset.expiry-month > select"),
      expiry_month_display = document.querySelector("div#card .expiry span.expiry-month");
  
  let expiry_year_select = document.querySelector("form fieldset.expiry-year > select"),
      expiry_year_display = document.querySelector("div#card .expiry span.expiry-year");
  
  let cvc_input = document.querySelector("form fieldset.cvc input"),
      cvc_display = document.querySelector("div#card .cvc > span:nth-child(2)");

  let form = document.querySelector("form");
  
  card_number_input.onkeydown = e => { 
    let key = e.keyCode || e.charCode;
    
    let is_digit = (key >= 48 && key <= 57) || (key >= 96 && key <= 105);
    let is_delete = key == 8 || key == 46;
    
    if (is_digit || is_delete) { 
      let text = e.target.value;
      let len = text.length;
      
      if(is_digit && (len==4 || len==9 || len==14))
        card_number_input.value = text + " ";
    }      
    else return false;
  }
  
  card_number_input.onkeyup = e => { 
    let key = e.keyCode || e.charCode;
    
    let is_digit = (key >= 48 && key <= 57) || (key >= 96 && key <= 105);
    let is_delete = key == 8 || key == 46;
    
    if (is_digit || is_delete) { 
      let text = e.target.value;
      let len = text.length;
      let digits = "XXXX XXXX XXXX XXXX".split('');
      
      if(is_digit && (len==4 || len==9 || len==14))
        digits[len] = " ";

      for(let i=0;i<len;i++)
        digits[i] = text.charAt(i);

      card_number_display.innerText = digits.join('');
    }      
    else return false;
  }
  
  card_holder_input.onkeyup = e => {
    card_holder_display.innerText = e.target.value;
  }
  
  expiry_month_select.onchange = e => {
    if(!e.target.value) expiry_month_display.innerText = "00";
    expiry_month_display.innerText = e.target.value;
  }
  
  expiry_year_select.onchange = e => {
    if(!e.target.value) expiry_year_display.innerText = "00";
    expiry_year_display.innerText = e.target.value;
  }
  
  cvc_input.onkeyup = e => {
    let text = e.target.value;
    let digits = ['_','_','_'];

    for(let i=0;i<text.length;i++)
      digits[i] = text.charAt(i);

    cvc_display.innerText = digits.join('');
  }
  
  form.onsubmit = e => {
    e.preventDefault();
  }
});


</script>