<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuralFuse: Profile</title>

    <link href="{{ asset('css/dash/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- FooTable -->
    <link href="{{ asset('css/dash/plugins/footable/footable.core.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dash/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dash/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dash/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <div class="dropdown profile-element">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color: white">
                                {{ \Auth::user()->name }}
                            </strong>
                             <!-- </span> <span class="text-muted text-xs block">Area Manager. Surat</span> </span> -->
                        </div>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
               
                <li>
                    <a href="{{ url('/register/profile') }}"> <span class="nav-label">Create New Profile</span></a>
                </li>
                 <li>
                    <a href="{{ url('/profiles') }}"> <span class="nav-label">View All Profile</span></a>
                </li>
                <li>
                    <a href="{{ url('search') }}"> <span class="nav-label">Search For Jobs</span></a>
                </li>
               

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
  
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="{{ url('logout') }}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile: {{ $pro->name }}</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce" style="background: white;">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                                <div>
                                    <h4>Name:</h4>
                                    
                                    <p>{{ $pro->name }}</p>
                                </div>
                                <br>
                                <div>
                                    <h4>Phone:</h4>
                                    <p>{{ $pro->phone }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Skills:</h4>
                                    <ul>
                                        @foreach ($pro->skills as $skill)
                                            <li>{{ $skill->skill }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <br>
                                @if ($pro->email !== null)                        
                                    <div>
                                        <h4>Email:</h4>
                                        <p></p>
                                    </div>
                                        <br>
                                @endif
                                <div>
                                    <h4>Age:</h4>
                                    <p>{{ $pro->age }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Gender:</h4>
                                    <p>{{ ucfirst($pro->gender) }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Payee Name:</h4>
                                    <p>{{ $pro->payee_name }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Available from:</h4>
                                    <p>{{ $pro->available_from }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Available to:</h4>
                                    <p>{{ $pro->available_to }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Differently abled?</h4>
                                    <p>
                                        @if ($pro->differently_abled)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Rating:</h4>
                                    <p>{{ $pro->rating }}</p>
                                </div>
                                    <br>
                                <div>
                                    <h4>Willing to go out?</h4>
                                    <p>
                                        @if ($pro->willingToGoOut)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                </div>
                                    <br>
                            
                        </div>
                    </div>
                </div>
            </div>        


        </div>
        

        <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,ml,mr,ms,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>
        </div>



    <script src="{{ asset('js/dash/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/dash/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dash/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/dash/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    
    <script src="{{ asset('js/dash/plugins/pace/pace.min.js') }}"></script>

    <!-- Data picker -->
    <script src="{{ asset('js/dash/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- FooTable -->
    <script src="{{ asset('js/dash/plugins/footable/footable.all.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#date_modified').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });

    </script>

</body>


</html>
