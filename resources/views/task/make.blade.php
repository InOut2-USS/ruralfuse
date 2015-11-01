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
                <div class="ibox float-e-margins">
                    <!-- <div class="ibox-title">
                        <h5>Job Details</h5>
                        
                    </div> -->
                    <div class="ibox-content no-padding">

                        <!-- <div id="summernote">
                            <h3>30 Craftswomen required for Ashiana handlooms industry</h3>
                                 <strong></strong> Ashiana handlooms is looking for talented Craftswomen to work on traditional handlooms. 
                                 Work requirements: 3 complete bedsheets per day.
                                 Our trainers(women) will come and train you for first 2 days. Everyday at 8 am you'll recieve the raw material and collect the finished goods at 6 pm in evening.
                                 Wages: 300 Rs Per bedsheet.
                                 Our worker will give you 900 cash once he assures the quality of work satisfactory. And you'll sign the payment document everyday to assure that you've recived the payment.
                                <br/>
                                <br/>
                                <ul>
                                    <li>Contract duration: 1 month.</li>
                                    <li>From 1 November to 1 December</li>
                                    <li>For any queries call Fatima Shah: 8989898989</li>
                                </ul>
                        </div> -->
                        <!-- <textarea name="description"></textarea> -->

                    </div>
                </div>
            </div>
            </div>


                            
                                <div class="form-group"><label class="col-sm-2 control-label">Job title</label>
                                    <div class="col-sm-10"><input type="text" name="title" required></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Job description</label>
                                    <div class="col-sm-10"><textarea name="description" id="" cols="70" rows="10"></textarea></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                               <div class="form-group"><label class="col-sm-2 control-label">Number of workers required for this job</label>

                                    <div class="col-sm-10"><input required type="number" min="0" placeholder="100" class="form-control" name="noOfPeople"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                        
                                <div class="form-group"><label class="col-sm-2 control-label">Preferred minimum age for this job</label>

                                    <div class="col-sm-10"><input type="number" min="15" placeholder="18" class="form-control" name="min_age"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Preferred maximum age for this job</label>

                                    <div class="col-sm-10"><input type="number"min="15"  placeholder="60" class="form-control" name="max_age"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Start Date</label>

                                    <div class="col-sm-10"><input required type="date"  placeholder="40" class="form-control" name="start_date"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                

                                <div class="form-group"><label class="col-sm-2 control-label">End Date</label>

                                    <div class="col-sm-10"><input required type="date"  placeholder="40" class="form-control" name="end_date"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Number of working days</label>

                                    <div class="col-sm-10"><input required type="number"  placeholder="40" class="form-control" name="noOfDays"></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                    
                                    <div class="form-group"><label class="col-sm-2 control-label">Prefered Gender</label>
                                <div class="col-sm-10"><select class="form-control m-b" name="preferred_gender">
                                        <option value="none" selected>None</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                             <div class="form-group"><label class="col-sm-2 control-label">Is eligible for work from home </label>
                                <div class="col-sm-10"><select class="form-control m-b" name="workFromHome">
                                        <option value="true" selected>Yes</option>
                                        <option value="false">No</option>
                                        
                                    </select>
                                </div>
                            </div>
                             <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Your Budget</label>
                                    <div class="col-sm-10"><input required type="text" class="form-control" name="budget"> <span class="help-block m-b-none">We'll take 10% commission on every fulfilled target*  <a href="#">What's this?</a></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                            <div class="col-sm-2"></div>
                            <div class="form-group">
                                <button class="btn" type="submit">Submit</button>
                            </div>


        



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

       });
        
    </script>

    <!-- Page-Level Scripts -->


</body>


</html>
