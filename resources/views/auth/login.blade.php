<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    *{
        cursor: pointer;
    }
.remember{
    margin-left: 200px;
	margin-top: 25px;
    transition: .2s ease-in;
}
.remember:hover{
    color: #38d39f;
}
@media(max-width:1001px){
    .remember{
        margin-left: 150px;
    }
}
@media(max-width:340px){
    .remember{
        margin-left: 100px;
    }
}
</style>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
		
			<img src="img/bg.svg">
		</div>
		
		<div class="login-content">
           

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
		
			<form  method="POST" action="{{ route('login') }}">
                @csrf
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<label for="email" value="{{ __('Email') }}"></label>
           		   		<input type="text" id="email" placeholder=" Email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<label for="password" value="{{ __('Password') }}"></label>
           		    	<input type="password" placeholder="Password"  id="password" name="password" required autocomplete="current-password" class="input">
            	   </div>
            	</div>
                <div class="block mt-4 remember" >
                       <a href="{{ route('register') }}">SignUp Here</a>
                </div>
            	<button type="submit" class="btn" value="Login">Submit</button>
				<CENTER>
		<x-validation-errors class="mb-4 W-100" style="color:red;"/>
		</CENTER>
            </form>
			
        </div>
	
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
