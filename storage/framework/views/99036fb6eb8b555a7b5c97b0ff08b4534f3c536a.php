<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<section class="mb-6">
				<div class="flex items-center mb-2">
					<h1 class="text-lg uppercase font-semibold text-gray-700">
						<?php echo e($category->name); ?>

					</h1>
					<a href="<?php echo e(route('categories.show',$category)); ?>" class="text-orange-500  hover:text-orange-400 hover:underline ml-2 font-semibold">Ver más</a>
				</div>

				<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('category-products',['category' =>$category])->html();
} elseif ($_instance->childHasBeenRendered('C5CV1H7')) {
    $componentId = $_instance->getRenderedChildComponentId('C5CV1H7');
    $componentTag = $_instance->getRenderedChildComponentTagName('C5CV1H7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('C5CV1H7');
} else {
    $response = \Livewire\Livewire::mount('category-products',['category' =>$category]);
    $html = $response->html();
    $_instance->logRenderedChild('C5CV1H7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
			</section>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<?php $__env->startPush('script'); ?>

		<script>
			Livewire.on('glider',function(id){

	            new Glider(document.querySelector('.glider-'+id), {
	              slidesToShow: 1,
	              slidesToScroll: 1,
	              draggable: true,
	              dots: '.glider-'+id+'~ .dots',
	              arrows: {
	                prev: '.glider-'+id+'~ .glider-prev',
	                next: '.glider-'+id+'~ .glider-next'
	              },
	              responsive: [
					{
						breakpoint:640,
						settings:
						{
							slidesToShow: 2.5,
	              			slidesToScroll: 2,
						}
					},
					{
						breakpoint:768,
						settings:
						{
							slidesToShow: 3.5,
	              			slidesToScroll: 3,
						}
					},
					{
						breakpoint:1024,
						settings:
						{
							slidesToShow: 4.5,
	              			slidesToScroll: 4,
						}
					},
					{
						breakpoint:1280,
						settings:
						{
							slidesToShow: 5.5,
	              			slidesToScroll: 5,
						}
					},
	              ]
	            });

			});

        </script>
	<?php $__env->stopPush(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/vagrant/code/ecommerce/resources/views/welcome.blade.php ENDPATH**/ ?>