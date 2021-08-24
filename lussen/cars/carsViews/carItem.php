<div class="car">
	<h2><?= $c['brand'] ?> en <?= $c['type'] ?></h2>
	<img src="../carsImages/<?= $c['image'] ?>" alt="carimage">
	<dl>
		<dt>Brandstof</dt>
		<dd><?= $c['fuel'] ?></dd>
		<dt>Prijs</dt>
		<dd>&euro;<?= $c['price_from'] ?></dd>
	</dl>
</div>