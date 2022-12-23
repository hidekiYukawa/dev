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
<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/properties">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/properties">Properties</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <?php echo e($realEstateObject->object_title); ?>

        </li>
    </ol>
</nav>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/property-breadcrumbs.blade.php ENDPATH**/ ?>