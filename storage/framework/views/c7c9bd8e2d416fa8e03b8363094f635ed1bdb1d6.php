<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['REO']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['REO']); ?>
<?php foreach (array_filter((['REO']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $images = $REO->realEstateObjectImages()->get();
    ?>



<?php if (! (count($images) == 0)): ?>

<div class="col-md-4">
    <div class="card-box-a card-shadow">
        <div class="img-box-a">
            <img src="<?php echo e(asset($REO->images)); ?>" alt="" class="img-a img-fluid">
        </div>
        <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                    <h2 class="card-title-a">
                        <a href="/properties/<?php echo e($REO->id); ?>"><?php echo e($REO->object_address_no); ?> <?php echo e($REO->object_address_street); ?>

                            <br /> <?php echo e($REO->object_title); ?></a>
                    </h2>
                </div>
                <div class="card-body-a">
                    <div class="price-box d-flex">
                        <span class="price-a"><?php echo e($REO->offer_type); ?> | &euro; <?php echo e((number_format(floatval($REO->object_price))) ?: ''); ?></span>
                    </div>
                    <a href="/properties/<?php echo e($REO->id); ?>" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                        <li>
                            <h4 class="card-info-title">Area</h4>
                            <span><?php echo e($REO->area_size); ?>

                                
                          </span>
                        </li>
                        <?php if(!empty($REO->numBedrooms)): ?>
                            <li>
                                <h4 class="card-info-title">Beds</h4>
                                <span><?php echo e($REO->numBedrooms); ?></span>
                            </li>
                        <?php endif; ?>
                        <?php if(!empty($REO->numBathrooms)): ?>
                            <li>
                                <h4 class="card-info-title">Baths</h4>
                                <span><?php echo e($REO->numBathrooms); ?></span>
                            </li>
                        <?php endif; ?>
                        <?php if(!empty($REO->numBathrooms)): ?>

                            <li>
                                <h4 class="card-info-title">Airco</h4>
                                <span><?php echo e($REO->airco); ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php else: ?>
    <div class="col-md-4">
        <div class="card-box-a card-shadow">
            <div class="img-box-a">
                <img src="<?php echo e(asset($REO->images)); ?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
                <div class="card-overlay-a-content">
                    <div class="card-header-a">
                        <h2 class="card-title-a">
                            <a href="/properties/<?php echo e($REO->id); ?>"><?php echo e($REO->object_address_no); ?> <?php echo e($REO->object_address_street); ?>

                                <br /> <?php echo e($REO->object_title); ?></a>
                        </h2>
                    </div>
                    <div class="card-body-a">
                        <div class="price-box d-flex">
                            <span class="price-a"><?php echo e($REO->offer_type); ?> | &euro; <?php echo e((number_format(floatval($REO->object_price))) ?: ''); ?></span>
                        </div>
                        <a href="property-single.html" class="link-a">Click here to view
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                            <li>
                                <h4 class="card-info-title">Area</h4>
                                <span><?php echo e($REO->area_size); ?>

                                    
                          </span>
                            </li>
                            <?php if(!empty($REO->numBedrooms)): ?>
                                <li>
                                    <h4 class="card-info-title">Beds</h4>
                                    <span><?php echo e($REO->numBedrooms); ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if(!empty($REO->numBathrooms)): ?>
                                <li>
                                    <h4 class="card-info-title">Baths</h4>
                                    <span><?php echo e($REO->numBathrooms); ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if(!empty($REO->numBathrooms)): ?>

                                <li>
                                    <h4 class="card-info-title">Airco</h4>
                                    <span><?php echo e($REO->airco); ?></span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/properties-card.blade.php ENDPATH**/ ?>