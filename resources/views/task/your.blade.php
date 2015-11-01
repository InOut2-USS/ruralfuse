<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuralFuse: Tasks</title>

    <link href="{{ asset('css/dash/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- FooTable -->
    <link href="{{ asset('css/dash/plugins/footable/footable.core.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dash/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dash/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dash/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

    <style>
        button.call-toggle.toggled {
            background: black;
            color: white;
        }
        button.call-toggle.untoggled {
            background: white;
            color: black;
        }
        .hidden {
            display: none;
        }
        #call-list-button {
            background: #00E872;
            color: white;
        }
    </style>

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                   <div class="dropdown profile-element">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color: white">
                                {{ \Auth::user()->name }}
                            </strong>
                             <!-- </span> <span class="text-muted text-xs block">Area Manager. Surat</span> </span> -->
                        </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

                <li>
                    <a href="{{ url('/task/make') }}"> <span class="nav-label">Post a Job</span></a>
                </li>
                 <li>
                    <a href="{{ url('/tasks') }}"> <span class="nav-label">Your Jobs</span></a>
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
                    <h2>Your jobs.</h2>
                    
                </div>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                         <button  type="button" style= "margin-left: 70%; margin-top:10%" class="btn btn-primary btn-lg"><a href="{{ url('task/make') }}" style="color:white;">Post a job</a></button>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                
                                    <tr>

                                        
                                        <th>Title</th>
                                        <th data-hide="phone">No. of people</th>
                                        <th data-hide="phone">Start Date</th>
                                        <th data-hide="phone">End Date</th>
                                        <th data-hide="phone,tablet" >Budget</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>
                                            <a href="{{ url('task/' . $task->id) }}">
                                                {{ $task->title }}
                                            </a>
                                        </td>
                                        <td>
                                           {{ $task->noOfPeople }}
                                        </td>
                                        <td>
                                            {{ $task->start_date }}
                                        </td>
                                        <td>
                                           {{ $task->end_date }}
                                        </td>
                                        <td>
                                            {{ $task->budget }}
                                        </td>
                                        
                                    </tr>
                                @endforeach
                             
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

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
        

       <div id="callMaxCounterModal" class="modal fade" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document" style="background: white; padding: 20px; border-radius: 5px">
                <div class="modal-content" style="border: none; box-shadow: none"> 
                    <h2>How many people need to say yes?</h2>
                </div>
                <div class="modal-body">
                    <input type="number" id="maxCounter" placeholder="Enter number here">
                </div>
                <div class="modal-footer">
                    <button class="btn" id="cancelCall" style="background: red; color: white;">Cancel</button>
                    <button class="btn" id="confirmCall" style="background: green; color: white;">Go!</button>
                </div>
           </div>
       </div>

        </div>
        </div>



    <!-- Mainly scripts -->
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
