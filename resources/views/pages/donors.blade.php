@extends('layouts.app')
@section('content')
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }

        .loader {
            display: none;
            width: 69px;
            height: 89px;
            position: absolute;
            top: 25%;
            left: 50%;
            padding: 2px;
            z-index: 1;
        }

        .loader .fa {
            color: #e74c3c;
            font-size: 52px !important;
        }

        .form-group {
            text-align: left;
        }

        h1 {
            color: white;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }

        span {
            display: block;
        }

        .wtb {
            color: #e74c3c;
            font-size: 22px;
            font-weight: 700;
        }

        .donors_data {
            background-color: white;
            border-radius: 5px;
            margin: 20px 5px 0px 5px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            padding: 20px;
        }
    </style>
    <div class="container-fluid red-background size">
        
            <a href="{{route('donors.create')  }}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Donate Blood</a>
            <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Donors</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>


    {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Are you delete this record?</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <form target="" method="post">
            <br>
            <input type="hidden" name="delId" value="">
            <button type="submit" name="delete" class="btn btn-danger">Yes</button>

            <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
            </button>
        </form>
    </div> --}}

    <br>

    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}
    @foreach ($donors as $donor)
        <div class="container" style="padding: 60px 0;">
            <div class="row data">
                <div class="col-md-3 col-sm-12 col-lg-3 donors_data">



                    <span>{{ $donor->name }}</span>
                    <span>{{ $donor->city }} </span>
                    <span>{{ $donor->blood_group }} </span>
                    <span>{{ $donor->gender }} </span>
                    <span>{{ $donor->email }} </span>
                    <span>{{ $donor->contact_no }} </span>

                </div>


            </div>
        </div>
    @endforeach
@endsection
