



	<?php foreach ($db -> query('SELECT * FROM articles', 'App\Table\article') as $post): ?>
	


		<h5><a href="<?= $post->url ?>">  <?= $post->titre; ?></a></h5>
					<?php var_dump($post); ?>
		<p> <?= $post->extrait ?> </p>



		
	<?php endforeach; ?>