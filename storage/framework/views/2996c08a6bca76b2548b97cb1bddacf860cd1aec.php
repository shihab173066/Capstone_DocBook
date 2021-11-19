 
<?php $__env->startSection('main'); ?>
<div class="col-md-12">

    <a href="/create_schedule">Add Schedule</a>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-striped">
            <thead>

                <th>ID</th>
                <th>EMAIL</th>
                <th>Start Time</th>
                <th>End Time</th>
            </thead>

            <tbody>
                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($row->id); ?></td>
                    <td><?php echo e($row->email); ?></td>
                    <td><?php echo e($row->start_time); ?></td>
                    <td><?php echo e($row->end_time); ?></td>
                    <td><a href="schedule/<?php echo e($row->id); ?>">Delete</a></td>



                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>
    <div>
        <a href="/logout">Log Out </a>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/schedule.blade.php ENDPATH**/ ?>