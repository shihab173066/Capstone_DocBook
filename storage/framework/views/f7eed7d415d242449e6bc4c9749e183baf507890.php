
<form method="POST" action="add_schedule" >
	<?php echo csrf_field(); ?>

	<table>
		<tr>
			<td>Email</td>
			<td>
				<select name="emails" id="emails">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 <option value=<?php echo e($d->email); ?>><?php echo e($d->email); ?></option>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>


			</td>

		</tr>
		<tr>
			<td>Start Time</td>
			<td><input type="time" name="start_time" id="start_time"/></td>

		

	</tr>
	<tr>
		<td>End Time</td>
		<td><input type="time" name="end_time" id="end_time"/></td>

	</tr>

	<tr>
		<td><input type="submit" name="submit"/></td>
	</tr>

	</table>



</form>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/create_schedule.blade.php ENDPATH**/ ?>