<div wire:init="loadPosts">
	<?php if(count($products)): ?>
	    <div class="glider-contain">
			  <ul class="glider-<?php echo e($category->id); ?>">
			  	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  		<li class="bg-white rounded-lg shadow <?php echo e($loop->last ? '' : 'sm:mr-4'); ?>">
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

			  <button aria-label="Previous" class="glider-prev">«</button>
			  <button aria-label="Next" class="glider-next">»</button>
			  <div role="tablist" class="dots"></div>
		</div>
	<?php else: ?>
		<div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
		     <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
		</div>	
	<?php endif; ?>
</div>
<?php /**PATH /home/vagrant/code/ecommerce/resources/views/livewire/category-products.blade.php ENDPATH**/ ?>