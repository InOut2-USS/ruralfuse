<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.0/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:53:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuralFuse: Register</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"> </h1>

            </div>
            <h2>Register</h2>
            <form class="m-t" role="form" action="{{ url('/register/middleman') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="number" name="age" class="form-control" placeholder="Age" required="" value="">
                </div>
                <div class="form-group">
                   <select name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="preferred_village" class="form-control" placeholder="Preffered Village">
                </div>
                 <div class="form-group">
                    <input type="file" name="resume" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <a class="btn btn-sm btn-white btn-block" href="{{ url('login') }}">Login</a>
            </form>
            
        </div>

        <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,ml,mr,ms,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.0/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:53:24 GMT -->
</html>
