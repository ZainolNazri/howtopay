<html>
<head>
    <!-- Style -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/paypal.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/formcalculations.js') }}" defer></script>

</head>
<body >
    <div class="w3-container">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif

    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
    	  <div class="w3-container w3-blue w3-padding-16">Pay with Paypal</div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Payment Details</h2>


          <div class="invoice-box">
        <table cellpadding="0" cellspacing="-2">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>

                            <td>
                                <tr>
                                Invoice No: 1
                            <br>
                            <tr>
                            <!-- Automated date -->
                            <p>Created : <span id="datetime"></span></p>
                            <script>
                            var dt = new Date();
                            document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
                            </script>

                            <br>

                            <tr>
                            GBN-Unit, Inc.<br>
                            Block 2E Ong Sum Ping Condominium,<br>
                            Bandar Seri Begawan BA1311


                            <br><br>

                            <td>
                            Organization.inc<br>
                            test<br>
                            test@example.com
                            </td>

                    </table>

    <br>

<div id='gcw_mainF7D4FShRM' class='gcw_mainF7D4FShRM'></div>
<a id='gcw_siteF7D4FShRM' href='https://freecurrencyrates.com/en/'></a>
<script>function reloadF7D4FShRM(){ var sc = document.getElementById('scF7D4FShRM');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scF7D4FShRM';sc.src = 'https://freecurrencyrates.com/en/widget-horizontal?iso=BND-USD&df=1&p=F7D4FShRM&v=fits&source=fcr&width=500&width_title=225&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-480';var div = document.getElementById('gcw_mainF7D4FShRM');div.parentNode.insertBefore(sc, div);} reloadF7D4FShRM(); </script>
<!-- put custom styles here: .gcw_mainF7D4FShRM{}, .gcw_headerF7D4FShRM{}, .gcw_ratesF7D4FShRM{}, .gcw_sourceF7D4FShRM{} -->
<br><br>
<div id="wrap">
        <form action="" id="paypal" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Payment Calculation</legend>
                <label >Select Package</label>
                <br>
                <label class='radiolabel'><input type="radio"  name="selectedpackage" value="package1" onclick="calculateTotal()"/> Package 1</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedpackage" value="package2" onclick="calculateTotal()"/> Package 2</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedpackage" value="package3" onclick="calculateTotal()"/> Package 3</label><br/>
                <br>

                <label>Select Quantity</label>
                <br>
                <select id="quantity" name='quantity' onchange="calculateTotal()">
                <option value="None">Select Quantity</option>
                <option value="q1">1</option>
                <option value="q2">2</option>
                <option value="q3">3</option>
                <option value="q4">4</option>
                <option value="q5">5</option>
                <option value="q6">6</option>
                <option value="q7">7</option>
                <option value="q8">8</option>
                <option value="q9">9</option>
                <option value="q10">10</option>
               </select>

                <br><br><br>

                <label >Select Weight</label>
                <br>
                <select id="weight" name='weight' onchange="calculateTotal()">
                <option value="None">Select Weight</option>
                <option value="w1">1 KG</option>
                <option value="w2">2 KG</option>
                <option value="w3">3 KG</option>
                <option value="w4">4 KG</option>
                <option value="w5">5 KG</option>
                <option value="w6">6 KG</option>
                <option value="w7">7 KG</option>
                <option value="w8">8 KG</option>
                <option value="w9">9 KG</option>
                <option value="w10">10 KG</option>
               </select>
                <br/>
                <p>

                <div id="totalPrice"></div>

                </fieldset>
            </div>
       </form>
    </div><!--End of wrap-->

    	 <br> <label class="w3-text-blue"><b>  Enter Amount: $BND </b></label>
    	  <input class="w3-input w3-border" id="amount" type="number" name="amount" required placeholder="Enter a valid amount"></p>
    	  <button class="w3-btn w3-blue">Pay with PayPal</button>
        <a class="w3-btn w3-red" href="/orders">Cancel</a>
    	</form>
    </div>
</body>
</html>
