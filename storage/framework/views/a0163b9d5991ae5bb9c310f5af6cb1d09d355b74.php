<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
		<figure class="mb-4">
			<img class="w-full h-80 object-cover object-center" src="<?php echo e(Storage::url($category->image)); ?>">
		</figure>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('category-filter',['category'=>$category])->html();
} elseif ($_instance->childHasBeenRendered('hdWCUPZ')) {
    $componentId = $_instance->getRenderedChildComponentId('hdWCUPZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('hdWCUPZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hdWCUPZ');
} else {
    $response = \Livewire\Livewire::mount('category-filter',['category'=>$category]);
    $html = $response->html();
    $_instance->logRenderedChild('hdWCUPZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	</div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/code/ecommerce/resources/views/categories/show.blade.php ENDPATH**/ ?>