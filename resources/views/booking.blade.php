@extends('layouts.booking')

@section('styles')
    <style>
        /*.landing-page {*/
        /*    min-height: 100vh;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    margin-top: -48px;*/
        /*}*/
        /*.landing-home {*/
        /*    padding-top: 110px !important;*/
        /*}*/

        .session-time-section li, .experience-section li {
            height: 100px;
            overflow: hidden;
            width: 150px;
            max-width: 150px !important;
            padding: 0;
            margin: 0;
        }
        .session-time-section li .timer {
            font-weight: bolder;
            font-size: 28px !important;
        }

        .session-time-section li .time-format {

        }

        ::-moz-selection { /* Code for Firefox */
            background: yellow;
        }

        ::selection {
            background: yellow;
        }
        footer {
            bottom: 0;
            width: 100%;
            height: 95px;
        }
        .checkbox-wrapper li .form-check-input[type=radio], .radio-wrapper li .form-check-input[type=radio] {
            cursor: pointer;
        }

        .checkout-summery .card-body h3 {
            font-size: 20px !important;
        }
        .checkout-summery .card-body h5 {
            font-size: 14px !important;
        }

        ::-moz-selection { /* Code for Firefox */
            background: yellow;
        }

        ::selection {
            background: yellow;
        }
</style>
@endsection

@section('container')
    <livewire:booking.index />
@endsection
