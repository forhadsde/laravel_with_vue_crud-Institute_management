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
                    <label> <strong style="font-size: 19px;">Name:</strong> <?php echo e($StudentProfile->name); ?></label>
                    <label class="pull-right"><strong style="font-size: 19px;">Class:</strong> <?php echo e($StudentProfile->classname->semestername); ?> &nbsp;&nbsp;<strong style="font-size: 19px;">Roll:</strong> <?php echo e($StudentProfile->roll); ?> </label>
                </div>
            </div>
            <div  style="max-width:800px;margin: 0 auto;padding:25px;" class="bg-success">
                <form method="post" action="<?php echo e(url('store-result',[$StudentProfile->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="email">SELECT SUBJECT:</label>
                        <select  class="form-control" name="subject" required>
                            <option value="" selected disabled>==========SELECT SUBJECT============</option>
                            <?php $__currentLoopData = App\subject::orderBy('id', 'DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->subject_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e(url('manage-student')); ?>" class="btn btn-primary pull-right">Return Back</a>
                    </div>
                </form>
                <?php if(Session::has('message')): ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo e(Session::get('message')); ?>

                </div>
                <?php endif; ?>
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
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/Admin/result-add.blade.php ENDPATH**/ ?>