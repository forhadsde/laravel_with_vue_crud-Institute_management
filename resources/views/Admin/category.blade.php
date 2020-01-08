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
        <section class="content">
            <!-- Main row -->
            <div id="app" class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Panel with panel-primary class </div>
                        <div class="panel-body">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for='row in data'>
                                            <td>@{{row.CategoryName}}</td>
                                            <td>
                                                <a @click="edit(row)" style="background-color:green;padding:5px;border-radius:3px;"><i class="fa fa-edit" style="font-size:20px;color:white;"></i></a>
                                                <a @click="edit(row)" style="background-color:#297cc3;padding:5px;border-radius:3px;"><i class="fa fa-eye" style="font-size:20px;color:white;"></i></a>
                                                <a @click="deleteRecord(row)" style="background-color:red;padding:5px;border-radius:3px;"><i class="fa fa-trash-o" style="font-size:24px;color:white;"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <form class="form-horizontal"  method="post">
                                        @csrf
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;" class="control-label col-sm-12">@{{returnMessage}} Category Name:</label>
                                            <div class="col-sm-12">          
                                                <input type="text" v-model="CategoyDetails.CategoryName" class="form-control" placeholder="Category Name" name="BlogPermalink">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;" class="control-label col-sm-12">Category URL:</label>
                                            <div class="col-sm-12">          
                                                <input type="text" class="form-control" v-model="CategoyDetails.CategoryUrl" placeholder="Category Url" name="BlogBrowserTitle">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;" class="control-label col-sm-12">SEO Browser title:</label>
                                            <div class="col-sm-12">          
                                                <input type="text" class="form-control" v-model="CategoyDetails.CategorySeoKeyword" placeholder="SEO Browser Title" name="BlogTitle">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;" class="control-label col-sm-12">SEO Keyword:</label>
                                            <div class="col-sm-12">          
                                                <input type="text" class="form-control" v-model="CategoyDetails.CategorySeoDescription" placeholder="SEO Keyword" name="BlogDetails">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;" class="control-label col-sm-12" for="pwd">SEO Description:</label>
                                            <div class="col-sm-12">          
                                                <textarea  rows="3" class="form-control" v-model="CategoyDetails.CategoryBrowserTitle" placeholder="SEO Description" name="BlogAuthor"></textarea>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="form-group col-sm-12">
                                            <div class="col-sm-12">          
                                                <button  @click="store(CategoyDetails)" class="btn btn-success">SAVE</button>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <div class="col-sm-12">          
                                                <button  @click="update(CategoyDetails)" class="btn btn-success">UPDATE</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
<script>
var csrfToken = '{{csrf_token()}}';
var adminUrl = '{{url('')}}';
new Vue({
   el: '#app',
    data: {
        returnMessage:null,
        message: 'This IS Biodata',
        data: [],
        CategoyDetails:{CategoryName:null,CategoryUrl:null,CategorySeoKeyword:null,CategorySeoDescription:null,CategoryBrowserTitle:null}
    },
    created: function () {
        this.init(); 
    },
    methods:{
        store: function (data){
           if(!confirm('Are you sure')) return;
           data._token = csrfToken;
           this.$http.post('category-store',data)
           .then(function (res) {
               this.returnMessage = res.data.message; 
                this.CategoyDetails = {};
                this.init();
            });
        },
        edit: function (data){
           this.CategoyDetails = data;
        },
        deleteRecord: function (data){
           if(!confirm('Are you sure want to delete it row')) return;
           data._token = csrfToken;
           this.$http.post('category-delete',data)
           .then(function (res) {
               this.returnMessage = res.data.message;
                this.init();
            });
        },
        update: function (data) {
           if(!confirm('Are you sure Want to update it')) return;
           data._token = csrfToken;
           this.$http.post('category-update',data)
           .then(function (res) {
               this.returnMessage = res.data.message;
                this.CategoyDetails = {};
                this.init();
            }); 
        },
        init: function () {
          this.$http.get('categorylist')
                .then(function (res) {
                    this.data = res.data;
                });  
        }
    }
});
</script>
@include('Admin.inc.footersource');
