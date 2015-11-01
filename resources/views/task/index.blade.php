<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuralFuse: Post a Job</title>

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
               <!--
                <li>
                    <a href="layouts.html"> <span class="nav-label">Jobs</span></a>
                </li>
                 <li>
                    <a href="layouts.html"> <span class="nav-label">Manage Jobseekers</span></a>
                </li>
            -->
               

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
  
        </div>
            <ul class="nav navbar-top-links navbar-right">
                \
                <li>
                    <a href="{{ url('logout') }}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Post a Job</h2>
                    
                </div>
                
            </div>
            


        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                         <button type="button" style="margin-left: 70%; margin-top:10%" class="btn btn-primary btn-lg" id="contactEmployerButton"><a href="{{ url('register/profile') }}" style="color:white;" id="contactEmployerText">Contact Employer</a></button>
                </div>
            </div>         
                            

                        <div class="ibox-content">
                            <form method="post" action="{{ url('task/make') }}" class="form-horizontal">
<!-- 
                                <div class="form-group"><label class="col-sm-2 control-label">Job Type</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>Plumbing</option>
                                        <option>Craft Work</option>
                                        <option>Masonary</option>
                                        <option>Packaging</option>
                                    </select>


                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label"></label> -->

                                <div class="row">
                <div class="col-lg-12">
            </div>
            </div>

            <div class="ibox-content">
                            
                                <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <h2>Job Title</h2>
                    <div class="ibox-content no-padding">{{ $task->title }}</div>
                </div>
                <div class="ibox float-e-margins">
                    <h2>Job Description</h2>
                    <div class="ibox-content no-padding">
                        {{ $task->description }}
                    </div>
                </div>
            </div>
            </div>


                            
                                
                                
                                <div class="hr-line-dashed"></div>

                               <div class="form-group"><label class="col-sm-2 control-label">Number of workers required for this job</label>

                                    <div class="col-sm-10"><input type="number" min="0" value="{{ $task->noOfPeople }}" class="form-control" readonly=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                        
                                <div class="form-group"><label class="col-sm-2 control-label">Preferred minimum age for this job</label>

                                    @if (!$task->min_age)
                                        <div class="col-sm-10"><input type="text" min="15" value="none" class="form-control" readonly=""></div>
                                    @else
                                        <div class="col-sm-10"><input type="number" min="15" value="{{ $task->min_age }}" class="form-control" readonly=""></div>
                                    @endif
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Preferred maximum age for this job</label>

                                    @if (!$task->max_age)
                                        <div class="col-sm-10"><input type="text" min="15" value="none" class="form-control" readonly=""></div>
                                    @else
                                        <div class="col-sm-10"><input type="number" min="15" value="{{ $task->max_age }}" class="form-control" readonly=""></div>
                                    @endif
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Start Date</label>

                                    <div class="col-sm-10"><input type="date"  placeholder="40" class="form-control" value="{{ $task->start_date }}" readonly=""></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                

                                <div class="form-group"><label class="col-sm-2 control-label">End Date</label>

                                    <div class="col-sm-10"><input type="date"  placeholder="40" class="form-control" value="{{ $task->end_date }}" readonly=""></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                    
                                    <div class="form-group"><label class="col-sm-2 control-label">Prefered Gender</label>
                                <div class="col-sm-10"><input class="form-control m-b" name="preferred_gender" disabled="" value="{{ ucfirst($task->preferred_gender) }}">
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                             <div class="form-group"><label class="col-sm-2 control-label">Is eligible for work from home </label>
                                <div class="col-sm-10">
                                @if ($task->workFromHome)
                                    <input value="yes" class="form-control m-b" name="account" disabled="">
                                @else
                                    <input value="no" class="form-control m-b" name="account" disabled="">
                                @endif
                                
                                        
                                </div>
                            </div>
                             <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Your Budget</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" readonly="" value="{{ $task->budget }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                


        



                            </form>
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
    <script src="{{ asset('js/dash/plugins/summernote/summernote.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    
    <script src="{{ asset('js/dash/plugins/pace/pace.min.js') }}"></script>

    <!-- Data picker -->
    <script src="{{ asset('js/dash/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- FooTable -->
    <script src="{{ asset('js/dash/plugins/footable/footable.all.min.js') }}"></script>

    <script>
        $(document).ready(function(){

            

            $('.footable').footable();
            $('#summernote').summernote();

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

            $('#contactEmployerButton').click(function (e) {
                $('#contactEmployerText').html('Contacted!');
                return false;
            });

       });
        
    </script>

    <!-- Page-Level Scripts -->


</body>


</html>
