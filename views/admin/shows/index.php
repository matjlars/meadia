<section>
	<header>
		<h2>Shows</h2>
		<a class="button" href="<?=f()->url->get('admin/shows/edit/0')?>">New Show</a>
	</header>
	<div id="results"></div>
</section>

<script>
feedpage.init('/admin/shows', 'Show');
</script>
