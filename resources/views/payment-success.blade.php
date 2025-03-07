@extends('layouts.booking')

@section('styles')
    <style>
        .payment-section {
            min-height: 90vh;
            margin: 0;
            padding: 0;
        }

        .success-container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .success-icon {
            font-size: 4rem;
            color: #4CAF50;
        }
        .success-message {
            font-size: 1.2rem;
            margin-top: 15px;
        }
        .details {
            margin-top: 20px;
            color: #555;
        }
    </style>
@endsection

@section('container')
    <div class="landing-home payment-section section-py-space pb-0 mt-5 bg-gray">
        <div class="container">
            <div class="row demo-block demo-imgs justify-content-center">
                <div class="col-lg-8 col-md-10 slideInUp wow">
                    <div class="card bg-black">
                        <div class="card-body">
                            <div class="success-container">
                                <i class="fa fa-check-circle success-icon"></i>
                                <div class="success-message">
                                    Booking Successful!
                                </div>
                                <div class="details">
                                    Thank you for your booking. You will receive a confirmation email shortly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
