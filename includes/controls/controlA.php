<?php

namespace Elementor_Luaitech_Addon\Control;

class ControlA extends \Elementor\Base_Data_Control{
	public function get_type() {
		return 'controlA';
	}
	public function content_template() {
		?>
		<div class="elementor-control-field">
			<label class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<input type="text" class="elementor-control-a" data-setting="{{ data.name }}" />
			</div>
		</div>
		<?php
	}

}


?>
