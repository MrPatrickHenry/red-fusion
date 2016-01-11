@extends('layouts.app-nocharts')


@section('content')
<div class="container">



<div class="steps" id="steps">  <span class="step_nb"></span>

        <p class="form_title">Please Fill The field Bellow</p>
        <form autocomplete="off" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}
<ul>
                <li class="current_step">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ old('name') }}"><br>
                    <input type="text" class="form-control" name="Business_name" placeholder="Business Name"  value="{{ old('Business_name') }}"><br>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}">
                <li>
                    <input type="password" class="form-control" placeholder="Your Password"  name="password"><br>
                    <input type="password" class="form-control" placeholder="Confirmation Password"  name="password_confirmation">
                </li>
                <li>
                 <input type="text" class="form-control" name="Facebook_api" value="{{ old('Facebook_api') }}">
                 <input type="text" class="form-control" name="Twitter_api" value="{{ old('Twitter_api') }}">
                                <input type="text" class="form-control" name="Googleplus_api" value="{{ old('Googleplus_api') }}">
                                <input type="text" class="form-control" name="linkedin_api" value="{{ old('linkedin_api') }}">
                                <input type="text" class="form-control" name="SnapChat_api" value="{{ old('SnapChat_api') }}">
                                <input type="text" class="form-control" name="Pinterest_api" value="{{ old('Pinterest_api') }}">
                                <input type="text" class="form-control" name="Email_api" value="{{ old('Email_api') }}">
                                <input type="text" class="form-control" name="Affiliate_api" value="{{ old('Affiliate_api') }}">
                                <input type="text" class="form-control" name="PaidSearch_api" value="{{ old('PaidSearch_api') }}">
                                <input type="text" class="form-control" name="Youtube_api" value="{{ old('Youtube_api') }}">
                                <input type="text" class="form-control" name="Deals_api" value="{{ old('Deals_api') }}">
                                <input type="text" class="form-control" name="GA_api" value="{{ old('GA_api') }}">



                </li>











                <li>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-user"></i>Register</button>
                </li>
            </ul>


        </form>
         <span class="note">Note : you can hit "Enter" to move to next step</span>

    </div>


                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
