<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Reset Password</title>
		<meta charset="utf-8" />
		<meta name="description" content="Reset Password" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

        <style>
            body, body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Prompt', sans-serif !important;
                }
                span, p , li ,strong, option , label, input, a, b {
                font-family: 'Prompt', sans-serif !important;
                }
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body class="app-blank app-blank">
		
            <div >

                <img src="{{ url('img/logo_head.png') }}" style="height:80px; width:148px">
                <h2 style="color:#01071D; margin: 0px; margin-top:10px">Reset your password</h2>
                
               
                <p style="font-size:16px; ">You told us you forgot your password. If you really did,
                    click here to choose a new one:
                    CHOOSE A NEW PASSWORD
                </p>
                
                <a href="{{  $url }}" target="_blank" 
                style="background-color:#004e36; text-decoration: none; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">
                    CHOOSE A NEW PASSWORD
                </a>

                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:14px;">If you didn't mean to reset your password, then you can just ignore this
                    email; your password will not change.
                </p>
            </div>
    
	</body>
	<!--end::Body-->
</html>
{{-- {{  $url }} --}}