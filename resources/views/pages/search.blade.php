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

        .name {
            color: #e74c3c;
            font-size: 22px;
            font-weight: 700;
        }

        .donors_data {
            background-color: white;
            border-radius: 5px;
            margin: 25px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            padding: 20px 10px 20px 30px;
        }
    </style>
    <div class="container-fluid red-background size">
        <div class="row">
            <div class="ccol-md-6 offset-md-3">
                <h1 class="text-center">Search Donors</h1>
                <hr class="white-bar">
                <br>
              
                <form action="{{ route('search.data') }}" method="post" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                    @csrf
                    <div class="form-group text-center justify-content-center">

                        <select style="width: 220px; height: 45px;" name="city" id="city"
                            class="form-control demo-default" value="" required>
                            <option value="">-- Select --</option>
                            <optgroup title="Rupandehi(province Lumbini)" label="&raquo; Rupandehi (Province Lumbini)">
                            </optgroup>
                            <option value="Bhairahawa">Bhairahawa</option>
                            <option value="Butwal">Butwal</option>
                            <option value="Lumbini">Lumbini</option>
                            <option value="Parasi">Parasi</option>
                            <optgroup title="Nawalparasi (Province Lumbini)" label="&raquo;Nawalparasi (Province Lumbini) ">
                            </optgroup>
                            <option value="Bajaur Agency">...........</option>
                            <option value="Khyber Agency">...........</option>


                        </select>
                    </div>
                    <div class="form-group center-aligned">
                        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
                            class="form-control demo-default text-center margin10px"value="">

                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>

                        </select>
                    </div>
                    <div class="form-group center-aligned">
                        <button type="submit" class="btn btn-lg btn-danger">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 60px 0 60px 0;">
        <div class="row " id="data">

            <!-- Display The Search Result -->
            @foreach ($donors as $donor)
            <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                <span >{{ $donor->name }}</span>
                <span>{{ $donor->city }} </span>
                <span>{{ $donor->blood_group }} </span>
                <span>{{ $donor->gender }} </span>
                <span>{{ $donor->email }} </span>
                <span>{{ $donor->contact_no }} </span>
                
            </div>
            @endforeach
        </div>
    </div>
    <div class="loader" id="wait">
        <i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
    </div>
@endsection
