<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form-v9 by Colorlib</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="{{asset('public/UI')}}/css/nunito-font.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="{{asset('public/UI')}}/css/style.css"/>
    </head>
    <body class="form-v9">
        <div class="page-content">
            <div class="form-v9-content" style="background-image: url('{{asset('public/UI')}}/images/form-v9.jpg')">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <form class="form-detail" action="{{url('profile-store')}}" method="post">
                    @csrf
                    <h2>Registration Form</h2>
                    <div class="form-row-total">
                        <div class="form-row">
                            <input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                        </div>
                    </div>
                    <div class="form-row-total">
                        <div class="form-row">
                            <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
                        </div>
                        <div class="form-row">
                            <input type="password" name="confirm-password" id="comfirm-password" class="input-text" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>