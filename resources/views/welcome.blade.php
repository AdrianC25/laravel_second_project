@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.appViews.banner')
    @include('layouts.appViews.about')
    @include('layouts.appViews.courses')
@endsection

@section('css')
@parent
    <style>
        /* Main Styling */
        body, html{
            color: #3c3456 !important;
        }

        .img-style{
            height: 50px;
            width: 50px;
        }

        /* Bootstrap Styling */
        .text-primary{
            color: #4c6fe1 !important;
        }

        .text-secondary{
            color: #3c3456 !important;
        }

        .btn-primary{
            background: #4c6fe1 !important;
            border: 0;
        }

        .btn-primary:hover{
            background: #3c3456 !important;
            border: 0;
        }

        .bg-warning{
            background: #f9f9f9 !important;
        }

        .bg-primary{
            background: #4c6fe1 !important;
        }

        /* Utility Classes */
        .py-6{
            padding: 120px 0;
        }

        .py-7{
            padding: 80px 0;
        }

        /* Header */
        .header{
            background: url('img/background.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* courses */
        .smaller{
            font-size: 12px;
        }

        .time{
            margin-top: -30px;
        }
        
        .user{
            width: 40px;
            height: 40px;
        }
        
        /* Mobile */
        @media (max-width:768px;){
            .showcase{
                text-align: center;
            }

            .py-6{
                padding: 50px 0;
            }
        }
    </style>
@endsection