<?php

function buildOrnament($ornamentFileName)
{
	include($_SERVER['DOCUMENT_ROOT'] . "/assets/img/ornaments/" . $ornamentFileName);
}


function BezierCurves() { buildOrnament("bezier-curves.svg"); }
function DiskRectangleTriangle() { buildOrnament("disk-rectangle-triangle.svg"); }
function DotsRollingInSpiral() { buildOrnament("dots-rolling-in-spiral.svg"); }
function DotsSpiral() { buildOrnament("dots-spiral.svg"); }
function PyramidOverSphere() { buildOrnament("pyramid-over-sphere.svg"); }
function SphereParallelepipedDots() { buildOrnament("sphere-parallelepiped-dots.svg"); }



function FourHundredAndFour()
{
	$initialZeroPath="m 10.63,3.66 c 0,1.1866667 -0.183333,2.1 -0.55,2.74 C 9.7133333,7.0333333 9.13,7.35 8.33,7.35 7.5766667,7.35 7.0066667,7.0366667 6.62,6.41 6.2333333,5.7833333 6.04,4.8666667 6.04,3.66 6.04,2.9266667 6.1133333,2.2866667 6.26,1.74 6.4066667,1.1933333 6.65,0.7666667 6.99,0.46 7.33,0.1533333 7.78,0 8.34,0 c 0.5466667,0 0.9866667,0.15 1.32,0.45 0.34,0.3 0.586667,0.7233333 0.74,1.27 0.153333,0.5466667 0.23,1.1933333 0.23,1.94 z m -4.02,0 c 0,1.08 0.1366667,1.8833333 0.41,2.41 0.28,0.52 0.7166667,0.78 1.31,0.78 0.6133333,0 1.0533333,-0.2633333 1.32,-0.79 0.2666667,-0.5266667 0.4,-1.3266667 0.4,-2.4 C 10.05,2.9933333 9.996667,2.4266667 9.89,1.96 9.79,1.4866667 9.6133333,1.1266667 9.36,0.88 9.1133333,0.6266667 8.7733333,0.5 8.34,0.5 7.9066667,0.5 7.5633333,0.6266667 7.31,0.88 7.0633333,1.1333333 6.8833333,1.4966667 6.77,1.97 6.6633333,2.4433333 6.61,3.0066667 6.61,3.66 Z";
	$centarlZeroPath="m 10.63,3.66 c 0,1.1866667 -0.183333,4.1 -0.55,4.74 C 9.7133333,9.0333333 9.13,9.35 8.33,9.35 7.5766667,9.35 7.0066667,9.0366667 6.62,8.41 6.2333333,7.7833333 6.04,4.8666667 6.04,3.66 6.04,2.9266667 6.1133333,0.2866667 6.26,-0.26 6.4066667,-0.8066667 6.65,-1.2333333 6.99,-1.54 7.33,-1.8466667 7.78,-2 8.34,-2 c 0.5466667,0 0.9866667,0.15 1.32,0.45 0.34,0.3 0.586667,0.7233333 0.74,1.27 0.153333,0.5466667 0.23,3.1933333 0.23,3.94 z m -4.02,0 c 0,1.08 0.1366667,3.8833333 0.41,4.41 0.28,0.52 0.7166667,0.78 1.31,0.78 0.6133333,0 1.0533333,-0.2633333 1.32,-0.79 0.2666667,-0.5266667 0.4,-3.3266667 0.4,-4.4 0,-0.6666667 -0.053333,-3.2333333 -0.16,-3.7 C 9.79,-0.5133333 9.6133333,-0.8733333 9.36,-1.12 9.1133333,-1.3733333 8.7733333,-1.5 8.34,-1.5 7.9066667,-1.5 7.5633333,-1.3733333 7.31,-1.12 7.0633333,-0.8666667 6.8833333,-0.5033333 6.77,-0.03 6.6633333,0.4433333 6.61,3.0066667 6.61,3.66 Z";
?>
<svg  id="FourHundredAndFouranimation" height="100px" version="1.1" viewBox="0 0 16.75 11.35" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<clipPath id="rightClipPath">
			<path d="m18.064 8.85v-10.35h-9.724c-0.43333 0-0.77667 0.12667-1.03 0.38-0.24667 0.25333-0.42667 0.61667-0.54 1.09-0.10667 0.47333-0.16 3.0367-0.16 3.69 0 1.08 0.13667 3.8833 0.41 4.41 0.28 0.52 0.71667 0.78 1.315 0.78z" style="fill:#747474;paint-order:markers fill stroke;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.2978"/>
		</clipPath>
		<clipPath id="leftClipPath">
			<path d="m-1.384-1.5v10.35h9.724c0.43333 0 0.77667-0.12667 1.03-0.38 0.24667-0.25333 0.42667-0.61667 0.54-1.09 0.10667-0.47333 0.16-3.0367 0.16-3.69 0-1.08-0.13667-3.8833-0.41-4.41-0.28-0.52-0.71667-0.78-1.315-0.78z" style="fill:#747474;paint-order:markers fill stroke;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.2978"/>
		</clipPath>
	</defs>

	<g clip-path="url(#leftClipPath)">
		<path id="leftFour" transform="translate(10,2)" d="m5.33 5.47h-1.19v1.78h-0.55v-1.78h-3.59v-0.47l3.55-4.93h0.59v4.88h1.19zm-1.74-3.17q0-0.39 0-0.66t0.01-0.48q0.01-0.22 0.02-0.46h-0.03q-0.13 0.23-0.25 0.43t-0.29 0.43l-2.44 3.39h2.98z" fill="white">
			<animateTransform attributeName="transform" 
				type="translate"
				values="10,2;0,2"
				repeatCount=1
				begin="1s"
				dur="3s"
				fill="freeze"
			/>
		</path>
	</g>
	<g  clip-path="url(#rightClipPath)">
		<path id="rightFour" transform="translate(-10,2)" d="m16.75 5.47h-1.19v1.78h-0.55v-1.78h-3.59v-0.47l3.55-4.93h0.59v4.88h1.19zm-1.74-3.17q0-0.39 0-0.66t0.01-0.48q0.01-0.22 0.02-0.46h-0.03q-0.13 0.23-0.25 0.43t-0.29 0.43l-2.44 3.39h2.98z" fill="white">
			<animateTransform attributeName="transform" 
				type="translate"
				values="-10,2;0,2"
				repeatCount=1
				begin="1s"
				dur="3s"
				fill="freeze"
			/>
		</path>
	</g>

	<path id="central-zero" fill="white"
		transform="translate(0,2)"
	>
	</path>
	<style>
		@keyframes morph {
			0% {
				d: path("<?php print($initialZeroPath);?>");
			}
			20% {
				d: path("<?php print($initialZeroPath);?>");
			}
			30% {
				d: path("<?php print($centarlZeroPath);?>");
			}
			70% {
				d: path("<?php print($centarlZeroPath);?>");
			}
			80% {
				d: path("<?php print($initialZeroPath);?>");
			}
			100% {
				d: path("<?php print($initialZeroPath);?>");
			}
		}

		#central-zero {
			animation: morph 5s forwards;
		}

		#leftFour, #rightFour, #central-zero
		{
			fill: white;
		}
	</style>
</svg>
<?php
}
?>
