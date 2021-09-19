<div>
    <div class="bg-white rounded-lg shadow-lg mb-6">
    	<div class="px-6 py-2 flex justify-between items-center">
    		<h1 class="font-semibold text-gray-700 uppercase"><?php echo e($category->name); ?></h1>
	    	<div class="grid grid-cols-2 border border-gray-200 divide-x divide-gray-200">
	    		<i class="fas fa-border-all p-3 text-gray-500 cursor-pointer <?php echo e($view == 'grid'? 'text-orange-500' : ''); ?> " wire:click="$set('view','grid')" ></i>
	    		<i class="fas fa-th-list p-3 text-gray-500 cursor-pointer <?php echo e($view == 'list'? 'text-orange-500' : ''); ?> " wire:click="$set('view','list')" ></i>
	    	</div>
    	</div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
    	<aside>
    		<h2 class="font-semibold text-center mb-2">Subcategorías</h2>
    		<ul class="divide-y divide-gray-200">
    			<?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<li class="py-2 text-sm">
    					<a class="cursor-pointer hover:text-orange-500 capitalize <?php echo e($subcategoria == $subcategory->name ? 'text-orange-500 font-semibold' : ''); ?>"
    					wire:click="$set('subcategoria','<?php echo e($subcategory->name); ?>')"
    					>
    						<?php echo e($subcategory->name); ?>

    					</a>
    				</li>
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</ul>
    		<h2 class="font-semibold text-center mt-4 mb-2">Marcas</h2>
    		<ul class="divide-y divide-gray-200">
    			<?php $__currentLoopData = $category->brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<li class="py-2 text-sm">
    					<a class="cursor-pointer hover:text-orange-500 capitalize <?php echo e($marca == $brand->name ? 'text-orange-500 font-semibold' : ''); ?>"
    					wire:click="$set('marca','<?php echo e($brand ->name); ?>')">
    						<?php echo e($brand->name); ?>

    					</a>
    				</li>
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</ul>
    		<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'mt-4','wire:click' => 'limpiar']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-4','wire:click' => 'limpiar']); ?>
    			Eliminar filtros
    		 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    	</aside>
    	<div class="col-span-1 lg:col-span-4">
    		<?php if($view == 'grid'): ?>
	    		<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
	    			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    				<li class="bg-white rounded-lg shadow">
				  			<article>
						  		<figure>
					  				<img class="h-48 w-full object-cover object-center" src="<?php echo e(Storage::url($product->images->first()->url)); ?>">
					  			</figure>
					  			<div class="py-4 px-6">
					  				<h1 class="text-lg font-semibold ">
						  				<a href="">
						  					<?php echo e(Str::limit($product->name,20)); ?>

						  				</a>
					  				</h1>
					  				<p class="font-bold text-trueGray-700">US$ <?php echo e($product->price); ?></p>
					  			</div>
				  			</article>
				  		</li>
	    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		</ul>
    		<?php else: ?>
    			<ul>
    				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    					<li class="bg-white rounded-lg shadow mb-4">
    						<article class="flex">
    							<figure>
    								<img class="h-48 w-56 object-center object-cover" src="<?php echo e(Storage::url($product->images->first()->url)); ?>">
    							</figure>
    							<div class="flex-1 py-4 px-6 flex flex-col">
    								<div class="flex justify-between">
    									<div>
    										<h1 class="text-lg font-semibold text-gray-700"><?php echo e($product->name); ?></h1>
    										<p>$USD <?php echo e($product->price); ?></p>
    									</div>
    									<div class="flex items-center">
	    									<ul class="flex text-sm">
	    										<li><i class="fas fa-star text-yellow-400 mr-1"></i></li>
	    										<li><i class="fas fa-star text-yellow-400 mr-1"></i></li>
	    										<li><i class="fas fa-star text-yellow-400 mr-1"></i></li>
	    										<li><i class="fas fa-star text-yellow-400 mr-1"></i></li>
	    										<li><i class="fas fa-star text-yellow-400 mr-1"></i></li>
    										</ul>
    										<span class="text-gray-700 text-sm">(24)</span>
    									</div>
    								</div>
								    <div class="mt-auto mb-6">
										<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.danger-button','data' => []]); ?>
<?php $component->withName('jet-danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
											Más información
										 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
									</div>
    							</div>
    						</article>
    					</li>
    				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    			</ul>
    		<?php endif; ?>
    		<div class="mt-4">
    			<?php echo e($products->links()); ?>

    		</div>
    	</div>
    </div>
</div>
<?php /**PATH /home/vagrant/code/ecommerce/resources/views/livewire/category-filter.blade.php ENDPATH**/ ?>