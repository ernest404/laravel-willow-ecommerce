@extends('layouts.auth')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 400px;
        margin: 50px auto;
        
        
    }
    form a{
		color:white;
		text-decoration: none;
	}	
    .login-form form {
    	margin-bottom: 15px;
        background: #222222;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        opacity: 0.7;
    }
    .login-form h2 {
        margin: 0 0 15px;
        color: white;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .form-control{
		height: 40px;
		box-shadow: none;
		color: black !important;
	}
	.form-control:focus{
		border-color: rgb(60%,30%,10%) !important;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
</style>
</head>
<body>
<div class="login-form">
        <form method="POST" action="{{ route('login') }}">
                @csrf
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
                <input  type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="newsletter_submit_btn  btn-lg btn-block" style="width:100% !important;color:white;background:rgb(60%,30%,10%); ">Log in</button>
        </div>
        <div class="clearfix">
                
            <label style="color:white;" class="pull-left checkbox-inline"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
            @if (Route::has('password.request'))
                                    <a class="pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
            @endif
        </div>        
    </form>
    <p class="text-center"><a style="color:rgb(60%,30%,10%);" href="{{ route('register') }}">Create an Account</a></p>
</div>
</body>
</html>                                		                            


