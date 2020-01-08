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
                    <label> <strong style="font-size: 19px;">Name:</strong> {{$StudentProfile->name}}</label>
                    <label class="pull-right"><strong style="font-size: 19px;">Class:</strong> {{$StudentProfile->classname->semestername}} &nbsp;&nbsp;<strong style="font-size: 19px;">Roll:</strong> {{$StudentProfile->roll}} </label>
                </div>
            </div>
            <div  style="max-width:800px;margin: 0 auto;padding:25px;" class="bg-success">
                <form method="post" action="{{url('store-result',[$StudentProfile->id])}}">
                    @csrf
                    <div class="form-group">
                        <label for="email">SELECT SUBJECT:</label>
                        <select  class="form-control" name="subject" required>
                            <option value="" selected disabled>==========SELECT SUBJECT============</option>
                            @foreach(App\subject::orderBy('id', 'DESC')->get() as $sub)
                            <option value="{{$sub->id}}">{{$sub->subject_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marks">Mark:</label>
                        <input type="number" min="0" max="200" name="marks" class="form-control" id="marks" required>
                    </div>

                    <div class="form-group">
                        <select  class="form-control" name="grade" required>
                            <option value="" selected disabled>==========SELECT GRADE============</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C">C</option>
                            <option value="D">D</option> 
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">SAVE RESULT</button>
                        <a href="{{url('manage-student')}}" class="btn btn-primary pull-right">Return Back</a>
                    </div>
                </form>
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{Session::get('message')}}
                </div>
                @endif
            </div>

        </section>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('Admin.inc.footersource')
</script>
</body>
</html>