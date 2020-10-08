@extends('layouts.app')

@section('content')

<div class="container-fluid bread_crumps">
    <div class="container">
        <p>
            <a href="/" style="text-decoration:none; color:#909090;"> Home/</a>
            <a href="" style="text-decoration:none; color:#000000;"> Refund & Cancellation Policy /</a>
    </div>
</div>

<div class="container d-flex justify-content-center privacy_policy_head">
    <div class="row">
        <p>Refund & Cancellation Policy</p>
    </div>
</div>

<div class="container  privacy_policy p-5">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h5>How can i cancel my order?</h5>
                    <ul align="justify">
                        <li>
                            A cancellation of your order is generally possible only when the order is not processed for
                            production.
                        </li>

                        <li>
                            Cancellation is possible only when the order status is 'Under design review' or 'Kept on
                            Hold.
                        </li>

                        <li>
                            You have to raise a request to cancel the order. Our team will confirm whether we can help
                            you or not.
                        </li>
                    </ul>
                    <p><a href=""> Email Us <span class="fa fa-external-link"></span> </a></p>

                    <hr>
                    <h5>How can i get refund if my order got cancelled for any reason ?</h5>

                    <ul align="justify">
                        <li>If you are booking an order on our website and your payment gets deducted but your order
                            gets cancelled by any reason we will refund your money in 7-10 working days.
                        </li>

                        <li>But if you are cancelling your order by calling us inorder to re-order, we will transfer
                            your money to your bank account.
                        </li>

                    </ul>

                </div>
                <div class="col-sm-12 col-md-6">
                    <h5>Can i return my product?</h5>
                    <ul align="justify">
                        <li>Only if the package is being damaged/Incorrect product being sent return is acceptable.</li>
                    </ul>

                    <hr>
                    <h5>What is your refund policy if i receive a damaged product?</h5>
                    <ul align="justify">
                        <li>After understanding the issue further, we would decide to refund or reprint the order for
                            you.
                        </li>
                    </ul>

                    <hr>
                    <h5>What is your refund policy if my order is delayed?</h5>
                    <ul align="justify">
                        <li>The order will be delivered as per the delivery timeline mentioned while you checkout. We
                            are sticking towards the same timeline only. If there is any delay due to bad weather or
                            carrier delay due to any reason there might be a delay. But if your order is facing any
                            issue in getting the package on delivery kindly reach us we can make it right on time.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
