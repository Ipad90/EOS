<?PHP if (count($errors) > 0) : ?>
	<div class = "error">
		<?PHP foreach ($errors as $error) : ?>
		<p><?PHP echo $error ?></p>
		<?PHP endforeach ?>
	</div>
<?PHP endif ?>