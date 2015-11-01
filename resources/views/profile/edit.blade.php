<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>List</title>

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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color: white">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Area Manager. Surat</span> </span>
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
                    <h2>Edit Profile</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <form class="m-t" role="form" action="{{ url('/profile/' . $pro->id . '/edit') }}" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required="" name="name" value="{{ $pro->name }}">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $pro->email }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" required="" name="phone" value="{{ $pro->phone }}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Age" required="" readonly="" name="age" value="{{ $pro->age }}">
                                </div>
                                <div class="form-group">
                                   <select name="gender" class="form-control" disabled>
                                        <option value="{{ $pro->gender }}" disabled="" >{{ ucfirst($pro->gender) }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Payee Name" required="" name="payee_name" value="{{ $pro->payee_name }}">
                                </div>
                                 <div class="form-group">
                                    <p>Available From:</p>
                                    <input type="date" class="form-control" placeholder="Availabe From" name="available_from" value={{ $pro->available_from }}>
                                </div>
                                <div class="form-group">
                                    <p>Available To:</p>
                                    <input type="date" class="form-control" placeholder="Availabe To" name="available_to" value={{ $pro->available_to }}>
                                </div>
                                <div class="form-group">
                                    <p>Different Abled</p>
                                    <input type="radio" name="differently_abled" value="true" <?php if($pro->differently_abled) { echo 'checked'; } ?> > Yes
                                    <br>
                                    <input type="radio" name="differently_abled" value="false" <?php if(!$pro->differently_abled) { echo 'checked'; } ?> > No
                                </div> 
                                <div class="form-group">
                                    <p>Willing To Go Out</p>
                                    <input type="radio" name="willingToGoOut" value="true" <?php if($pro->willingToGoOut) { echo 'checked'; } ?> > Yes
                                    <br>
                                    <input type="radio" name="willingToGoOut" value="false" <?php if(!$pro->willingToGoOut) { echo 'checked'; } ?> > No
                                </div>
                                <div class="form-group">
                                    <p>Keep profile active?</p>
                                    <input type="radio" name="active" value="true" checked> Yes
                                    <br>
                                    <input type="radio" name="active" value="false"> No
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Save</button>

                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
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
