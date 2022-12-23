<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['realEstateObject']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['realEstateObject']); ?>
<?php foreach (array_filter((['realEstateObject']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    /** @var \App\Models\Real_Estate_Object $realEstateObject */
$images = $realEstateObject->realEstateObjectImages()->get();
?>



            <div id="swiper-<?php echo e($realEstateObject->id); ?>" class="swiper swiper-<?php echo e($realEstateObject->id); ?>">
                <div class="swiper-wrapper">
                    <?php if (! (count($images) == 0)): ?>


                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset($image->url)); ?>"
                                     alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php else: ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset($realEstateObject->images)); ?>" alt="only one image found">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="swiper-<?php echo e($realEstateObject->id); ?>-carousel-pagination swiper-pagination"></div>
            </div>

<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/slider-bare.blade.php ENDPATH**/ ?>