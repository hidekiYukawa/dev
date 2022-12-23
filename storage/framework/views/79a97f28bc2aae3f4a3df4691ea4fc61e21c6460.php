<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/modal.css')); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/animate.css/animate.min.css',)); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css',)); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css',)); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css',)); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>"/>

    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>


    
    <title>Holland Gambia Real Estate </title>
</head>
<body class="mb-48" style="background-color: #ffffff; background-image: none;" >
<?php echo e($slot); ?>

</body>

<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/core.js')); ?>"></script>

<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    $(function() {
        console.log("i'm in the script")

        <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['realEstateObjects']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['realEstateObjects']); ?>
<?php foreach (array_filter((['realEstateObjects']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

        <?php
          $index = 0;
?>

            <?php $__currentLoopData = $realEstateObjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            new Swiper("#swiper-<?php echo e($reo->id); ?>", {
	      speed: 600,
            loop: true,
            effect: 'cube',
            autoplay: {

                delay: 5000,
                disableOnInteraction: false
            },

            pagination: {
                el: ".swiper-<?php echo e($reo->id); ?> swiper-pagination",

                clickable: true,
                dynamicBullets: true
            },

            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94
            }
        })

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    })
</script>

<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
        );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
</html>

<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/layout-bare-bg-white.blade.php ENDPATH**/ ?>