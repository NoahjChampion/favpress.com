<div class="favpress-field">
	<div class="label">
		<label>
			<?php _e('Restore Default Options', '__PLUGIN_SLUG__') ?>
		</label>
		<div class="description">
			<p><?php _e('Restore options to initial default values.', '__PLUGIN_SLUG__') ?></p>
		</div>
	</div>
	<div class="field">
		<div class="input">
			<div class="buttons">
				<input class="favpress-js-restore favpress-button button button-primary" type="button" value="<?php _e('Restore Default', '__PLUGIN_SLUG__') ?>" />
				<p><?php _e('** Please make sure you have already make a backup data of your current settings. Once you click this button, your current settings will be gone.', '__PLUGIN_SLUG__'); ?></p>
				<span style="margin-left: 10px;">
					<span class="favpress-field-loader favpress-js-loader" style="display: none;"><img src="<?php FavPress_Util_Res::img_out('ajax-loader.gif', ''); ?>" style="vertical-align: middle;"></span>
					<span class="favpress-js-status" style="display: none;"></span>
				</span>
			</div>
		</div>
	</div>
</div>