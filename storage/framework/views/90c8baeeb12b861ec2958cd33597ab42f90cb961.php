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
            <div style="max-width:800px;margin: 0 auto;padding:25px;background-color: #82cada">
                <div class="row">
                    <div class="col-sm-12">
                        <a class="pull-right btn btn-success" href="<?php echo e(url('manage-student')); ?>" style="color:red;text-align: center;">Go Back</a>
                    </div>

                    <div class="col-sm-12">
                        <label> <strong style="font-size: 15px;">Name:</strong> <?php echo e($StudentProfile->name); ?></label>
                        <label class="pull-right">
                            <strong style="font-size: 15px;">Class:</strong> <?php echo e($StudentProfile->classname->semestername); ?> &nbsp;&nbsp;
                            <strong style="font-size: 15px;">Roll:</strong> <?php echo e($StudentProfile->roll); ?> &nbsp;&nbsp;
                            <strong style="font-size: 15px;">CGPA:</strong> 
                            <?php if(isset($CGPA)): ?>
                            <?php echo e($CGPA); ?>&nbsp;
                            <?php endif; ?>
                            (<?php if(isset($CGPA)): ?><?php echo e($GetPercentage); ?>% <?php endif; ?>)
                        </label>
                    </div>
                    <h4 style="color:red;text-align: center;"><?php if(isset($Message)): ?><?php echo e($Message); ?> <?php endif; ?></h4>
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
                        <?php if(isset($Results)): ?>
                        <?php $__currentLoopData = $Results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($result->subjectname->subject_name); ?></td>
                            <td><?php echo e($result->marks); ?></td>
                            <td><?php echo e($result->grade); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
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
<?php echo $__env->make('Admin.inc.footersource', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/Admin/stude-result-view.blade.php ENDPATH**/ ?>