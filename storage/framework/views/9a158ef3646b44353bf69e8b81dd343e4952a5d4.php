<main style="padding-bottom: 10em;">


    <?php echo e($slot); ?>


</main>
<footer style="z-index: 5;"
        class="hide-footer fixed bottom-0 left-0 w-full  justify-start font-bold bg-red-500 text-white opacity-90 md:justify-center">



        <?php if(auth()->guard()->check()): ?>
                    <span class="text-white font-bold uppercase">
                        Welcome <?php echo e(auth()->user()->name); ?> |
                    </span>

                    <a href="/properties/create" class="hover:text-red" style="color: white;">
                        Post Real Estate |
                    </a>





                <a href="/properties/manage" class="hover:text-red" style="color: white;">
                    <i class="fa-solid fa-gear"></i>
                    Manage Objects | </a>

                <form id="logout-form" class="inline" method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-white">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
        <?php else: ?>
                <a href="/register" class="ml-2 hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            <p class="mx-auto">&copy; 2022, JKlaassen.com </p>
    <?php endif; ?>

</footer>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>



<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/main.blade.php ENDPATH**/ ?>