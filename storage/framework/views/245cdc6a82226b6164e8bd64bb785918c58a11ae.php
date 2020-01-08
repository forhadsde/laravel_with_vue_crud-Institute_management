<?php echo $__env->make('Admin.inc.header source', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">
    <?php echo $__env->make('Admin.inc.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('Admin.inc.adminSideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

            <!--=================== Semester add modal start here ========================== -->
            <div class="modal fade" id="addsemester" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div style="background-color: #00c0ef;" class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New Student Here</h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="name">New Semester Add Here:</label>
                                    <input type="text" v-model="SemesterDetails.semestername" name="name" class="form-control" id="name">
                                </div>
                                <button style="border-radius:0px;" v-if="insertSemester" @click="SemesterStore(SemesterDetails)" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Semester</button>
                                <button style="border-radius:0px;" v-if="updateSemesterButton" @click="SemesterUpdate(SemesterDetails)" type="button" class="btn btn-success"> Update Semester</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================== Semester add modal end here ============================ -->



            <!--=================== Subject add modal start here ========================== -->
            <div class="modal fade" id="addsubject" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div style="background-color: #00c0ef;" class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">New Subject Add Here:</h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="name">Subject Name:</label>
                                    <input type="text" v-model="subjectDestails.subject_name" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject Code:</label>
                                    <input type="text" v-model="subjectDestails.subject_code" name="name" class="form-control" id="name">
                                </div>
                                <button style="border-radius:0px;" v-if="insertSubject" type="button" @click="SubjectStore(subjectDestails)" class="btn btn-success"><i class="fa fa-plus"></i> Add Subject</button>
                                <button style="border-radius:0px;" v-if="updateSubjectButton" type="button" @click="SubjectUpdate(subjectDestails)" class="btn btn-success">Update Subject</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================== Subject add modal end here ============================ -->


            <div v-if="SucessMessage" class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{returnMessage}}
            </div>

            <div class="col-sm-6">
                <a data-toggle="modal" data-target="#addsubject" style="border-radius:0px;margin-bottom: 10px;" class="btn btn-success">Add Subject &nbsp;<i class="fa fa-plus"></i></a>
                <table id="subjectlist" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Subject Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for='row,key in subjectlist'>
                            <td>{{++key}}</td>
                            <td>{{row.subject_name}}</td>
                            <td>{{row.subject_code}}</td>
                            <td>
                                <a style="border-radius:0px;" @click="SubjectEdit(row)" class="btn btn-primary">Edit</a>
                                <a style="border-radius:0px;" @click="deleteSubject(row)" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                <a data-toggle="modal" data-target="#addsemester" style="border-radius:0px;margin-bottom: 10px;" class="btn btn-success pull-right">Add Semester &nbsp;<i class="fa fa-plus"></i></a>
                <table id="semesterlist" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for='row,key in semesterlist'>
                            <td>{{++key}}</td>
                            <td>{{row.semestername}}</td>
                            <td>
                                <a style="border-radius:0px;" @click="SemesterEdit(row)" class="btn btn-primary">Edit</a>
                                <a style="border-radius:0px;" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
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
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php echo $__env->make('Admin.inc.footersource', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
<script>
var csrfToken = '<?php echo e(csrf_token()); ?>';
var adminUrl = '<?php echo e(url('')); ?>';
new Vue({
    el: '#app',
    data: {
        SucessMessage: false,
        counter: 0,
        insertSubject: true,
        updateSubjectButton: false,

        insertSemester: true,
        updateSemesterButton: false,

        subjectlist: [],
        semesterlist: [],
        returnMessage: null,
        subjectDestails: {subject_name: null, subject_code: null},
        SemesterDetails: {semestername: null}
    },
    created: function () {
        this.init();
        $('#subjectlist').DataTable();
        $('#semesterlist').DataTable();
    },
    methods: {
        SubjectStore: function (data) {
            if (this.subjectDestails.subject_name !== '' && this.subjectDestails.subject_code) {
                if (!confirm('Are you sure'))
                    return;
                data._token = csrfToken;
                this.$http.post('subject-store', data)
                        .then(function (res) {
                            this.SucessMessage = true;
                            this.returnMessage = res.data.message;
                            this.subjectDestails = {};
                            $('#addsubject').modal('hide');
                            this.init();
                        });
            }else{
               this.SucessMessage = true;
               this.returnMessage = 'Please Fill Out The Fill'; 
               $('#addsubject').modal('hide');
            }
        },
        SubjectEdit: function (data) {
            this.insertSubject = false,
                    this.updateSubjectButton = true,
                    $('#addsubject').modal();
            this.subjectDestails = data;
        },
        SubjectUpdate: function (data) {
            if (!confirm('Are you sure Want to update it'))
                return;
            data._token = csrfToken;
            this.$http.post('subject-update', data)
                    .then(function (res) {
                        this.SucessMessage = true;
                        this.returnMessage = res.data.message;
                        this.CategoyDetails = {};
                        $('#addsubject').modal('hide');
                        this.init();
                    });
        },
        deleteSubject: function (data) {
            if (!confirm('Are you sure want to delte this subject'))
                return;
            data._token = csrfToken;
            this.$http.post('subject-delete', data)
                    .then(function (res) {
                        this.SucessMessage = true;
                        this.returnMessage = res.data.message;
                        this.init();
                    });
        },
        SemesterStore: function (data) {
            if (!confirm('Are you sure'))
                return;
            data._token = csrfToken;
            this.$http.post('semester-store', data)
                    .then(function (res) {
                        this.SucessMessage = true;
                        this.returnMessage = res.data.message;
                        this.SemesterDetails = {};
                        $('#addsemester').modal('hide');
                        this.init();
                    });
        },
        SemesterEdit: function (data) {
            $('#addsemester').modal();
            this.SemesterDetails = data;
            this.insertSemester = false;
            this.updateSemesterButton = true;

        },
        SemesterUpdate: function (data) {
            if (!confirm('Are you sure Want to update it'))
                return;
            data._token = csrfToken;
            this.$http.post('semester-update', data)
                    .then(function (res) {
                        this.SucessMessage = true;
                        this.returnMessage = res.data.message;
                        this.CategoyDetails = {};
                        $('#addsemester').modal('hide');
                        this.init();
                    });
        },
        init: function () {
            this.$http.get('subject-list')
                    .then(function (res) {
                        this.subjectlist = res.data;
                    });
            this.$http.get('semester-list')
                    .then(function (res) {
                        this.semesterlist = res.data;
                    });
        }
    }
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/Admin/subject-semester.blade.php ENDPATH**/ ?>