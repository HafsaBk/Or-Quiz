@extends('layouts.app')

@section('content')



<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      <img src="
      https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/sign_in_e6hj.svg"
          class="img-fluid" alt="Phone image">
         
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

      <!--form-->
      
      <form method="POST" action="{{ route('register') }}">
		@csrf
        <!--Name input-->
        <input type="text" id="form1Example13" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label class="form-label" for="form1Example23">{{ __('Name') }}</label>
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label class="form-label" for="form1Example23">{{ __('Email Address') }}</label>

          </div>
<div>


                        			  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            <label class="form-label" for="form1Example23">{{ __('Password') }}</</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">


          <!--confirm pass-->
        
                

        <div class="form-outline mb-4">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <label for="password-confirm" class="form-label ">{{ __('Confirm Password') }}</label>

        </div>
</div>




          
       

          <!-- Submit button -->
        
          <button type="submit" class="btn btn-primary btn-lg "> {{ __('Register') }}</button>
 

          
         

        </form>
      </div>
    </div>
  </div>
</section>

@endsection