<ul class="feed">
	<?php foreach($shows as $t){?>
		<li data-id="<?=$t->id?>">
			<a href="/admin/shows/edit/<?=$t->id?>">
				<?=$t->name?>
			</a>
			<a class="delete icon" title="Delete this show" onclick="feedpage.delete('<?=$t->id?>');return false;" href="#"></a>
		</li>
	<?php }?>
</ul>
