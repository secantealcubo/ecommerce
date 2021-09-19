@props(['size'=>35,'color'=>'gray'])
	@php
		switch ($color)
		{
			case 'gray':
				$col="#374151";
			break;
			case 'white':
				$col="#ffffff";
			break;
			default:
				$col="#374151";
			break;
		}
	@endphp
	
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  width="{{ $size }}" height="{{ $size }}" viewBox="0 0 172 172" style=" fill:#000000;">
	<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
		<path d="M0,172v-172h172v172z" fill="none"></path>
		<g fill="{{ $col }}">
			<path d="M38.78678,14.31934l-24.43945,0.11198l0.06999,14.33333l14.83724,-0.06999l5.96289,14.30534h9.46224v0.014h93.61458l-19.9043,35.83333h-51.70638v-0.014h-8.69238l-12.69564,20.25423c-2.86667,4.58667 -3.01493,10.38036 -0.39193,15.10319c2.623,4.72283 7.59991,7.65657 13.00358,7.65657h85.41211v-14.33333h-85.41211l-0.46191,-0.83984l8.44043,-13.49349h52.50423c5.21017,0 10.005,-2.83296 12.52767,-7.37663l25.8252,-46.48535c1.23983,-2.22167 1.20601,-4.91768 -0.08399,-7.11068c-1.29,-2.18583 -3.64985,-3.52734 -6.18685,-3.52734h-105.69434zM0,57.33333v14.33333h45.57552l0.29395,-0.43392l8.73438,-13.89941zM0,86v14.33333h27.51888l9.09831,-14.33333zM57.31934,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333zM128.986,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333z">
			</path>
		</g>
	</g>
</svg>