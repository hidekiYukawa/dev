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

<?php if (! (count($images) == 0)): ?>

    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('<?php echo e(asset($image->url)); ?>')">
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="intro-body">
                                            <p class="intro-title-top">
                                            </p>
                                            <h1 class="intro-title mb-4"><?php echo e($realEstateObject->object_title); ?></h1>
                                            <span class="color-b">

                                </span>
                                            <p class="intro-subtitle intro-price">
                                                <a href="/properties/<?php echo e($realEstateObject->id); ?>">
                                    <span
                                        class="price-a">for <?php echo e($realEstateObject->offer_type); ?> | &euro; <?php echo e($realEstateObject->object_price); ?>

                                    </span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

<?php else: ?>
    <p>Out of unless</p>

<?php endif; ?>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/single-property.blade.php ENDPATH**/ ?>