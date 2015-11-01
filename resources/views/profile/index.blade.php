<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuralFuse: Profiles</title>

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
            background: #1ab394;
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
                    <h2>Find job seekers in your area.</h2>
                    
                </div>
                <div class="col-lg-2">
                    <button id="call-list-button" class="btn hidden">Call <span id="call-counter">0</span> people</button>
                </div>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                         <button  type="button" style= "margin-left: 70%; margin-top:10%" class="btn btn-primary btn-lg"><a href="{{ url('register/profile') }}" style="color:white;">Create a profile</a></button>
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

                                        
                                        <th>Name</th>
                                        <th data-hide="phone">Age</th>
                                        <th data-hide="phone">Gender</th>
                                        <th data-hide="phone">Phone</th>
                                        <th data-hide="phone,tablet" >Availability</th>
                                       
                                        <th class="text-right">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td>
                                           {{ $profile->name }}
                                        </td>
                                        <td>
                                           {{ $profile->age }}
                                        </td>
                                        <td>
                                            {{ ucfirst($profile->gender) }}
                                        </td>
                                        <td>
                                           {{ $profile->phone }}
                                        </td>
                                        <td>
                                            
                                                @if ($profile->active == true)
                                                    <span class="label label-primary">Available</span>
                                                @else
                                                    <span class="label label-danger">Unvailable</span>
                                                @endif
                                            
                                        </td>
                                        
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button data-id="{{ $profile->id }}" data-toggled="false" class="btn btn-xs call-toggle untoggled">Queue for call</button>
                                                <button class="btn-white btn btn-xs call-button-individual" data-id="{{ $profile->id }}">Call</button>
                                                <button class="btn-white btn btn-xs"><a href="{{ url('/profile/' . $profile->id) }}">View</a></button>
                                                <button class="btn-white btn btn-xs"><a href="{{ url('/profile/' . $profile->id . '/edit') }}">Edit</a></button>
                                            </div>
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
                    <h2>Do you want to proceed?</h2>
                </div>
                <div class="modal-footer">
                    <button class="btn" id="cancelCall" style="background: red; color: white;">Cancel</button>
                    <button class="btn" id="confirmCall" style="background: #1ab394; color: white;">Go!</button>
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


            toCall = [];
            var listItems = $('.call-toggle');
            for (var i = 0; i < listItems.length; i++) {
                // $(listItems[i]).on('click', 'body', function (e) {
                    // console.log('clicked!');
                    // return false;
                // });
                $(listItems[i]).click(function (e) {
                    if ($(this).data('toggled')) {
                        // was true
                        console.log($(this).data('toggled'));
                        $(this).removeClass('toggled');
                        $(this).addClass('untoggled');
                        $(this).html('Queue for call');
                        $(this).data('toggled', false);
                        var index = toCall.indexOf($(this).data('id'));
                        if (index > -1) {
                            toCall.splice(index, 1);
                        }
                        console.log(toCall);
                    } else {
                        // was false
                        console.log($(this).data('toggled'));
                        $(this).removeClass('untoggled');
                        $(this).addClass('toggled');
                        $(this).html('Unqueue for call');
                        $(this).data('toggled', true);
                        toCall.push($(this).data('id'));
                        console.log(toCall);
                    }

                    if (toCall.length > 0) {
                        $('#call-list-button').removeClass('hidden');
                        $("#call-counter").html(toCall.length);
                    } else {
                        $('#call-list-button').addClass('hidden');
                        $("#call-counter").html(toCall.length);
                    }
                    
                    return false;
                });
            }

            $('#call-list-button').click(function (e) {
                $('#callMaxCounterModal').modal('show');
                return false;
            });

            $('#cancelCall').click(function (e) {
              $('#callMaxCounterModal').modal('hide');
                return false;  
            });

            $('#confirmCall').click(function (e) {
                var dataToSend = JSON.stringify(toCall);
                console.log(dataToSend);
                $.ajax({
                    url: 'http://localhost/test/public/call/multiple',
                    method: 'POST',
                    data: {'toCall': dataToSend},
                    success: function (data) {
                        console.log('done!');
                        console.log(data);
                    },
                    error: function () {
                        console.log('error!');
                    }
                });
                $('.modal-body').html('');
                $('.modal-content').html('<h2>Calling the selected people..</h2>');
                $('#cancelCall').addClass('hidden');
                $('#confirmCall').addClass('hidden');
                return false;
            });

            var callButtonIndividual = $('.call-button-individual');
            for (var i = 0; i < callButtonIndividual.length; i++) {

                $(callButtonIndividual[i]).click(function (e) {
                    var value = $(this).data('id');
                    $.ajax({
                        url: 'http://localhost/test/public/call/single/' + value,
                        method: 'POST',
                        data: {},
                        sucess: function (data) {
                            console.log('done!');
                            console.log(data);
                        },
                        error: function (error) {
                            console.log('error');
                            console.log(error);
                        }
                    });
                    return false;
                });
            }
        });

    </script>

</body>


</html>
