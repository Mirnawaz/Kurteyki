<div class="c-field u-mb-medium">
	<label><input value="active" name="<?php echo $widget['id'] ?>[status]" type="radio" <?php echo (!empty($widget['data']['status'])) ? ($widget['data']['status'] == 'active') ? 'checked' : '' : 'checked'?>>Active</label>
	<label><input value="nonactive" name="<?php echo $widget['id'] ?>[status]" type="radio" <?php echo (!empty($widget['data']['status'])) ? ($widget['data']['status'] == 'nonactive') ? 'checked' : '' : '' ?>>NonActive</label>
</div>

<div class="c-field u-mb-small">
	<textarea rows="10" class="c-input" name="<?php echo $widget['id'] ?>[script]" placeholder="Insert ads code"><?php echo $widget['data']['content']  ?></textarea>
</div>   

<div class="c-field u-mb-small">
	<label class="c-field__label">Count Loop: </label>
	<input required="" value="<?php echo (!empty($widget['data']['loop_ads']) ? $widget['data']['loop_ads'] : '1') ?>" class="c-input" name="<?php echo $widget['id'] ?>[loop_ads]" id="loop_ads" type="number" placeholder="loop_ads">
</div>


<input name="<?php echo $widget['id'] ?>[id]" type="hidden" value="<?php echo $widget['id']  ?>">
<input name="<?php echo $widget['id'] ?>[type]" type="hidden" value="<?php echo $widget['type']  ?>">