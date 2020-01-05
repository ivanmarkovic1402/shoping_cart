<?php $__env->startSection('title'); ?>
    Laravel Shoping-cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has('success')): ?>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <?php echo e(Session::get('success')); ?>

        </div>
    </div>
<?php endif; ?>
<?php $__currentLoopData = $products->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
      <?php $__currentLoopData = $productChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <img src="<?php echo e($product->imagePath); ?>" alt="..." class="img-responsive">
              <div class="caption">
                <h3><?php echo e($product->ititle); ?></h3>
                <p class="description"><?php echo e($product->description); ?></p>
                <div class="clearfix">
                    <div class="pull-left price">$<?php echo e($product->price); ?></div>
                    <a href="<?php echo e(route('product.addToCart', ['id' => $product->id])); ?>" class="btn btn-success pull-right" role="button">Add to cart</a>
                </div>
              </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>