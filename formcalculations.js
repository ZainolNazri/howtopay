var package_prices = new Array();
package_prices["package1"] = 3;
package_prices["package2"] = 5;
package_prices["package3"] = 15;


var quantity_prices = new Array();
quantity_prices["None"] = 0;
quantity_prices["q1"] = 1;
quantity_prices["q2"] = 5;
quantity_prices["q3"] = 3;
quantity_prices["q4"] = 4;
quantity_prices["q5"] = 5;
quantity_prices["q6"] = 6;
quantity_prices["q7"] = 7;
quantity_prices["q8"] = 8;
quantity_prices["q9"] = 9;
quantity_prices["q10"] = 10;

var weight_prices = new Array();
weight_prices["None"] = 0;
weight_prices["w1"] = 1;
weight_prices["w2"] = 5;
weight_prices["w3"] = 3;
weight_prices["w4"] = 4;
weight_prices["w5"] = 5;
weight_prices["w6"] = 6;
weight_prices["w7"] = 7;
weight_prices["w8"] = 8;
weight_prices["w9"] = 9;
weight_prices["w10"] = 10;


function getPackagePrices() {
    var packagePrice = 0;
    var theForm = document.forms["paypal"];
    var selectedPackage = theForm.elements["selectedpackage"];
    for (var i = 0; i < selectedPackage.length; i++) {
        if (selectedPackage[i].checked) {
            packagePrice = package_prices[selectedPackage[i].value];
            break;
        }
    }

    return packagePrice;
}


function getQuantityPrices() {
    var quantityPrices = 0;

    var theForm = document.forms["paypal"];

    var selectedQuantity = theForm.elements["quantity"];

    quantityPrices = quantity_prices[selectedQuantity.value];

    return quantityPrices;
}

function getWeightPrices() {
    var weightPrices = 0;

    var theForm = document.forms["paypal"];

    var selectedWeight = theForm.elements["weight"];

    weightPrices = weight_prices[selectedWeight.value];

    return weightPrices;
}



function calculateTotal() {

    var paymentPrice = getPackagePrices() + getQuantityPrices() + getWeightPrices();

    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'block';
    divobj.innerHTML = "Total Payment $ " + paymentPrice * 0.73 + " BND";

}

function hideTotal() {
    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'none';
}