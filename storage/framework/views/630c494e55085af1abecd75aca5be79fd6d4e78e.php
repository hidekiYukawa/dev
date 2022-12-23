<header id="headernav" class="">
    <div class="container">
        <nav id="navigation">
            <a href="/properties" class="logo">HG Estate</a>
            <a aria-label="mobile menu" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <ul class="menu-left">


                <?php if(auth()->guard()->check()): ?>
                    
                    <li>
                    <span class="text-white font-bold uppercase">
                        Welcome <?php echo e(auth()->user()->name); ?>

                    </span>
                    </li>
                    <li>
                        <a href="/properties/create"
                           class="">
                            Post Real Estate
                        </a>
                    </li>
                    <li>
                        <a href="/properties/manage" class="hover:text-red text-black">
                            <i class="fa-solid fa-gear"></i>
                            Manage Objects</a>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-black">
                                <i class="fa-solid fa-door-closed"></i> <a style="color: black;"> Logout</a>
                            </button>
                        </form>
                    </li>
                <?php else: ?>

                    <li><a href="#about">Property</a></li>
                    <li><a href="#exp">About</a></li>
                    <li><a href="#skills">Services</a></li>
                    
                    <li><a href="#contact">Contact</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/partials/_custom-nav-show.blade.php ENDPATH**/ ?>