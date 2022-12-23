<nav class="flex justify-between items-center mb-4">
    <a href="/"><img class="w-24" src="<?php echo e(asset('images/logo.png')); ?>" alt="" class="logo"/></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        <?php if(auth()->guard()->check()): ?>
            <li>
                    <span class="text-white font-bold uppercase">
                        Welcome <?php echo e(auth()->user()->name); ?>

                    </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel">
                    <i class="fa-solid fa-gear"></i>
                    Manage Objects</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-white">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
        <?php else: ?>
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/partials/_default-nav.blade.php ENDPATH**/ ?>