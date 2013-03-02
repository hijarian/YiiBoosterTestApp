<?php
/**
 * Testbed for TbPager widget.
 *
 * @var PagerController $this
 * @var CArrayDataProvider $data_provider
 */
?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
            <th>Ord</th>
            <th>Char</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_provider->getData() as $data_item):?>
		<tr>
			<td><?= $data_item['id'];?></td>
            <td><?= $data_item['ord'];?></td>
            <td><?= $data_item['char'];?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>

<?php

$this->widget(
	'booster.widgets.TbPager',
	array(
	     'pages' => $data_provider->pagination
	)
);

echo '<pre>';var_dump($data_provider); echo '</pre>';
