<?php
/**
 * @var array $config
 */
?>
<div class="widget-padding">
    <div class="border-color-text">
        <h1 class="edit_text color-text"><?= $config['Title'] ?></h1>
    </div>
    <div class="date ">
        <input type="text" class="form-control color-text background-color-middle edit_text"
               value="<?= $config['Value'] ?>" <?= $config['Readonly'] == 'yes' ? "readonly" : "" ?>/>
    </div>
</div>

