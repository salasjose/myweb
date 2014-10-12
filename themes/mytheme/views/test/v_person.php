<?php

$this->widget(
    'ext.booster.widgets.TbGridView',
    array(
        'dataProvider' => $gridDataProvider,
        'template' => "{items}",
        'columns' => $gridColumns,
    )
);
?>
