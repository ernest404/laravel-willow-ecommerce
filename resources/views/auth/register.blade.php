@extends('layouts.auth')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		
		font-family: 'Roboto', sans-serif;
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
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: white;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #222222;
		position: relative;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: white;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: black;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #222222;
        opacity: 0.7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color:rgb(60%,30%,10%);
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
    <form method="POST" action="{{ route('register') }}">
            @csrf
		<h2>Register</h2>
		<p class="hint-text">Create your account. It only takes a minute.</p>
        <div class="form-group">
			<div class="row">
                    <div class="col-xs-6"><input  type="text" placeholder="First Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror</div>
                    <div class="col-xs-6"><input  type="text" placeholder="Last Name" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" required autocomplete="sname" autofocus>
                        @error('sname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror</div>                
        
			</div>        	
        </div>
        <div class="form-group">
                <input  type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required="required" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                    <input  type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group ">
                    
                        <input  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    
            </div>
		        
        
		<div class="form-group">
                <button type="submit" class="newsletter_submit_btn  btn-lg btn-block" style="width:100% !important; background:rgb(60%,30%,10%);">
                        {{ __('Register') }}
                </button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a  style="color:rgb(60%,30%,10%);" href="{{ route('login') }}">Sign in</a></div>
</div>
</body>
</html>                            




