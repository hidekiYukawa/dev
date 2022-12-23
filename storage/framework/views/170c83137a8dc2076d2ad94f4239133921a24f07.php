<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.property-show-layout','data' => ['realEstateObject' => $realEstateObject]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('property-show-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['realEstateObject' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($realEstateObject)]); ?>

    <?php echo $__env->make('partials._custom-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="container">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10 md-4 w-full mx-auto mt-24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10 md-4 w-full mx-auto mt-24']); ?>
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Edit Real Estate Object</h2>
                <p class="mb-4">Edit: <?php echo e($realEstateObject->object_title); ?></p>
            </header>

            <form method="POST" action="/properties/<?php echo e($realEstateObject->id); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <?php echo method_field('PUT'); ?>
                <div class="mb-6">
                    <label for="object_title" class="inline-block text-lg mb-2">Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_title"
                           value="<?php echo e($realEstateObject->object_title); ?>"/>

                    <?php $__errorArgs = ['object_title'];
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
                    <label for="tags" class="inline-block text-lg mb-2">Tags (please separate by comma)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                           value="<?php echo e($realEstateObject->tags); ?>"/>

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
                    <label for="images" class="inline-block text-lg mb-2">
                        1 or multiple files
                    </label>
                    <input type="file" multiple class="border border-gray-200 rounded p-2 w-full" name="images[]" />


                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.generated-slider','data' => ['realEstateObject' => $realEstateObject]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('generated-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['realEstateObject' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($realEstateObject)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php $__errorArgs = ['images'];
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
                    <label for="offer_type" class="inline-block text-lg mb-2">offer_type (sale/rent) </label>
                    <input type="text" placeholder="" class="border border-gray-200 rounded p-2 w-full" name="offer_type"
                           value="<?php echo e($realEstateObject->offer_type); ?>"/>

                    <?php $__errorArgs = ['offer_type'];
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
                    <label for="object_type" class="inline-block text-lg mb-2">object_type </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_type"
                           value="<?php echo e($realEstateObject->object_type); ?>"/>

                    <?php $__errorArgs = ['object_type'];
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
                    <label for="location" class="inline-block text-lg mb-2">location </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                           value="<?php echo e($realEstateObject->location); ?>"/>

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
                    <label for="maps_url" class="inline-block text-lg mb-2">maps_url </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="maps_url"
                           value="<?php echo e($realEstateObject->maps_url); ?>"/>

                    <?php $__errorArgs = ['maps_url'];
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
                    <label for="area_size" class="inline-block text-lg mb-2">area_size </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="area_size"
                           value="<?php echo e($realEstateObject->area_size); ?>"/>

                    <?php $__errorArgs = ['area_size'];
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
                    <label for="object_status" class="inline-block text-lg mb-2">object_status </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_status"
                           value="<?php echo e($realEstateObject->object_status); ?>"/>

                    <?php $__errorArgs = ['object_status'];
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
                    <label for="object_price" class="inline-block text-lg mb-2">object_price </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_price"
                           value="<?php echo e($realEstateObject->object_price); ?>"/>

                    <?php $__errorArgs = ['object_price'];
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
                    <label for="object_price_POA" class="inline-block text-lg mb-2">object_price_POA </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_price_POA"
                           value="<?php echo e($realEstateObject->object_price_POA); ?>"/>

                    <?php $__errorArgs = ['object_price_POA'];
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
                    <label for="numBedrooms" class="inline-block text-lg mb-2">numBedrooms </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="numBedrooms"
                           value="<?php echo e($realEstateObject->numBedrooms); ?>"/>

                    <?php $__errorArgs = ['numBedrooms'];
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
                    <label for="numBathrooms" class="inline-block text-lg mb-2">numBathrooms</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="numBathrooms"
                           value="<?php echo e($realEstateObject->numBathrooms); ?>"/>

                    <?php $__errorArgs = ['numBathrooms'];
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
                    <label for="airco" class="inline-block text-lg mb-2">airco</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="airco"
                           value="<?php echo e($realEstateObject->airco); ?>"/>

                    <?php $__errorArgs = ['airco'];
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
                    <label for="object_address" class="inline-block text-lg mb-2">Street Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_address"
                           value="<?php echo e($realEstateObject->object_address); ?>"/>

                    <?php $__errorArgs = ['object_address'];
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
                    <label for="object_address_no" class="inline-block text-lg mb-2">
                        Address No.
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_address_no"
                           value="<?php echo e($realEstateObject->object_address_no); ?>"/>

                    <?php $__errorArgs = ['object_address_no'];
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
                    <label for="features" class="inline-block text-lg mb-2">
                        Features
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="features" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            <?php echo e($realEstateObject->features); ?>

        </textarea>


                    <?php $__errorArgs = ['features'];
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
                        Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            <?php echo e($realEstateObject->description); ?>

        </textarea>
                </div>


                <div class="mb-6">
                    <label for="object_details" class="inline-block text-lg mb-2">
                        Details
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="object_details" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            <?php echo e($realEstateObject->object_details); ?>

        </textarea>


                    <?php $__errorArgs = ['object_details'];
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
                    <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                        Create
                    </button>

                    <a href="/properties" class="text-black ml-4"> Back </a>

                </div>
                

            </form>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/hidekiyukawa/GETTING_THE_HANG/resources/views/properties/edit.blade.php ENDPATH**/ ?>