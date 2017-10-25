<?php
/*print_r($node); <pre></pre>---> Esta etiqueta muestra el objeto
die();*/
?>
<div class="row">
	<div class="img-producto">
		<img src="<?= file_create_url($node->field_image['und'][0]['uri']); ?>">
	</div>
		<p class="text-producto"><?= $node->field_texto['und'][0]['value']; ?></p>
		<p class="price-producto"><?= $node->field_precio['und'][0]['value']; ?></p>
</div>
