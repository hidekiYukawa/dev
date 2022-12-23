
<?php
    // echo 'hello!';
?>

<div id="modal-container">
    <div class="modal-background">
        <div class="modal">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10']); ?>
                

                <?php if($listing): ?>
                    <h2><?php echo e($listing->title); ?></h2>


                    <form method="POST" action="/listings/<?php echo e($listing->id); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-6">
                            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                                   value="<?php echo e($listing->company); ?>"/>

                            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                                   placeholder="Example: Senior Laravel Developer" value="<?php echo e($listing->title); ?>"/>
                            
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                                   placeholder="Example: Remote, Boston MA, etc" value="<?php echo e($listing->location); ?>"/>

                            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2">
                                Contact Email
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                                   value="<?php echo e($listing->email); ?>"/>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="website" class="inline-block text-lg mb-2">
                                Website/Application URL
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                                   value="<?php echo e($listing->website); ?>"/>

                            <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                                   placeholder="Example: Laravel, Backend, Postgres, etc" value="<?php echo e($listing->tags); ?>"/>

                            <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="image" class="inline-block text-lg mb-2">
                                Upload one or multiple files
                            </label>
                            <input type="file" multiple class="border border-gray-200 rounded p-2 w-full"
                                   name="image[]"/>

                            
                            
                            <img
                                class="w-48 mr-6 mb-6"
                                src="<?php echo e($listing->image ? asset('uploads/' . explode(',', $listing->image)[0]) : asset('images/no-image.png')); ?>"
                                alt=""
                            />
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <label for="description" class="inline-block text-lg mb-2">
                                Job Description
                            </label>
                            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                                      placeholder="Include tasks, requirements, salary, etc"><?php echo e($listing->description); ?></textarea>

                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-6">
                            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                Edit
                            </button>

                            <a href="/listings/<?php echo e($listing->id); ?>" class="text-black ml-4">
                                Back </a>
                        </div>
                    </form>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php else: ?>
                <p>
                    Nothing to show from listings
                </p>

            <?php endif; ?>
        </div>
        <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
            <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
        </svg>
    </div>
</div>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/components/modal.blade.php ENDPATH**/ ?>