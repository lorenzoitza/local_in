<?php get_header();

$home_out = "
<div id='centro'>
	<div class='tercio terciol'>
		<a href='" .WHATIF_BLOGURL. "/presentacion-participa'>" . __('Participate','whatif') . "</a>
	</div>

	<div class='tercioc'>
		<img src='" .WHATIF_BLOGTHEME. "/images/default-home.png' alt='" . __('Home','whatif') . "' width='300px' />
	</div>

	<div class='tercio tercior'>
		<a href='" .WHATIF_BLOGURL. "/presentacion-consulta'>" . __('View messages','whatif') . "</a>
	</div>
</div>
";
echo $home_out;

get_footer(); ?>
