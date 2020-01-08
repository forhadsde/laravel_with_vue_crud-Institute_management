@include('Admin.inc.header source')
<div class="wrapper">
    @include('Admin.inc.adminHeader')
    <!-- Left side column. contains the logo and sidebar -->
    @include('Admin.inc.adminSideBar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section id="app"  class="content">
            <div style="max-width:800px;margin: 0 auto;padding:25px;background-color: #82cada">
                <div class="row">
                    <div class="col-sm-12">
                        <a class="pull-right btn btn-success" href="{{url('manage-student')}}" style="color:red;text-align: center;">Go Back</a>
                    </div>

                    <div class="col-sm-12">
                        <label> <strong style="font-size: 15px;">Name:</strong> {{$StudentProfile->name}}</label>
                        <label class="pull-right">
                            <strong style="font-size: 15px;">Class:</strong> {{$StudentProfile->classname->semestername}} &nbsp;&nbsp;
                            <strong style="font-size: 15px;">Roll:</strong> {{$StudentProfile->roll}} &nbsp;&nbsp;
                            <strong style="font-size: 15px;">CGPA:</strong> 
                            @isset($CGPA)
                            {{$CGPA}}&nbsp;
                            @endisset
                            (@isset($CGPA){{$GetPercentage}}% @endisset)
                        </label>
                    </div>
                    <h4 style="color:red;text-align: center;">@isset($Message){{$Message}} @endisset</h4>
                </div>
            </div>
            <div  style="max-width:800px;margin: 0 auto;padding:25px;" class="bg-success">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>GPA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($Results)
                        @foreach($Results as $result)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{$result->subjectname->subject_name}}</td>
                            <td>{{$result->marks}}</td>
                            <td>{{$result->grade}}</td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </section>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('Admin.inc.footersource')
</script>
</body>
</html>