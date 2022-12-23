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
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/animate.css/animate.min.css',)); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css',)); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css',)); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css',)); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/modal.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>"/>




        <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>


        
        <title>Holland Gambia Real Estate </title>
    </head>
    <body class="mb-48" style="background-image: url(http://theartmad.com/wp-content/uploads/Dark-Grey-Texture-Wallpaper-5.jpg); background-size: cover; background-position: top left;">
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
        var i = 0;
        $(".dynamic-ar").click(function () {
            ++i;
            $(".dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });

        var textarea = document.querySelector('textarea');

        textarea.addEventListener('keydown', autosize);
        textarea.addEventListener('focus', autosize);

        function autosize(){
            var el = this;
            setTimeout(function(){
                el.style.cssText = 'height:auto; padding:0';
                // for box-sizing other than "content-box" use:
                // el.style.cssText = '-moz-box-sizing:content-box';
                el.style.cssText = 'height:' + el.scrollHeight + 'px';
            },0);
        }
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
    </html>

<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/layout-bare.blade.php ENDPATH**/ ?>