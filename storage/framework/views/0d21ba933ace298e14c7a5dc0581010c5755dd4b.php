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
    $images = $realEstateObject->realEstateObjectImages()->get();
?>
<div class="container">
    <div class="row">

<div class="col-md-3 offset-md-4">

<div id="swiper-<?php echo e($realEstateObject->id); ?>" class="swiper swiper-<?php echo e($realEstateObject->id); ?>">
    <div class="swiper-wrapper">
        <?php if (! (count($images) == 0)): ?>


            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset($image->url)); ?>" data-id="<?php echo e($image->id); ?>"
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
</div>
    </div>
</div>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/generated-slider.blade.php ENDPATH**/ ?>