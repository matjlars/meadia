<header>
	<h2>Editing Show</h2>
	<a class="button" href="/admin/shows">Back to shows</a>
	<a class="button" href="<?=f()->url->get('admin/shows/edit/0')?>">New Show</a>
	<input type="submit" value="Save" class="green" form="edit-form">
</header>

<form method="post" action="<?=f()->url->current()?>" id="edit-form">
	<div class="field"><?=$show->name->view()?></div>
</form>
