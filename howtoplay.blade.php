<link href="{{ asset('css/howtopay.css') }}" rel="stylesheet">

@extends('layouts.customerapp')

@section('content')

    <div class="columns">
        <ul class="price">
        <li class="header">Cash on Delivery</li>

        <br>
        <form>
        <h3>Step 1</h3>
            <p>
                Click on the Package tab on the website
            </p>

        <h3>Step 2</h3>
            <p>
                Click on the desired package available
            </p>

        <h3>Step 3</h3>
            <p>
                Complete the form listed in the next page and at the bottom click on the "Cash on Delivery" box then click on "Save" button.
            </p>

        </form>
        </ul>
    </div>



    <div class="columns">
        <ul class="price">
         <li class="header">PayPal</li>
         <form>
        <h3>Step 1</h3>
            <p>
                Click on the Package tab on the website
            </p>

        <h3>Step 2</h3>
            <p>
                Click on the desired package available
            </p>

        <h3>Step 3</h3>
            <p>
                Complete the form listed in the next page and at the bottom click on the "PayPal" box then click on "Save" button.
            </p>

        <h3>Step 4</h3>
            <p>
                Login to your PayPal account
            </p>

        </form>
        </ul>
    </div>


@endsection
