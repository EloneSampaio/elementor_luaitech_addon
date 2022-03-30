<?php

namespace Elementor_Luaitech_Addon\Widgets;

use Elementor\Widget_Base;

class WidgetC extends Widget_Base
{

	public function get_name()
	{
		return __('hello C', 'elementor-luaitech-addon');
	}

	public function get_title()
	{
		return esc_html__('Hello World C', 'elementor-luaitech-addon');
	}

	public function get_icon()
	{
		return 'eicon-header';
	}

	public function get_categories()
	{
		return ['general'];
	}

	public function get_keywords()
	{
		return ['luaitech', 'hello', 'world'];
	}
	public function get_custom_help_url()
	{
		return 'https://elementor.com/docs/hello-world-widget/';
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//title
		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('Tower Hotel Luaitech', 'elementor-luaitech-addon'),
			]
		);

		//city
		$this->add_control(
			'city',
			[
				'label' => esc_html__('City', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('São Paulo, Br', 'elementor-luaitech-addon'),
			]
		);

		//price
		$this->add_control(
			'price',
			[
				'label' => esc_html__('Price', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('R$ 50,00', 'elementor-luaitech-addon'),
			]
		);

		//acomodation 1
		$this->add_control(
			'acomodation_1',
			[
				'label' => esc_html__('Acomodation 1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('Free wifi', 'elementor-luaitech-addon'),
			]
		);

		//acomodation 2
		$this->add_control(
			'acomodation_2',
			[
				'label' => esc_html__('Acomodation 2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('2min do centro', 'elementor-luaitech-addon'),
			]
		);

		//url
		$this->add_control(
			'url',
			[
				'label' => esc_html__('Url', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('https://luaitech.com/', 'elementor-luaitech-addon'),
			]
		);


		//button

		$this->add_control(
			'button_text',
			[
				'label' => esc_html__('Button Text', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Click Me', 'elementor-luaitech-addon'),
				'default' => esc_html__('Reservar', 'elementor-luaitech-addon'),
			]
		);

		//image

		$this->add_control(
			'image',
			[
				'label' => esc_html__('Image', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				//'exclude' => ['custom'],
				'include' => [],
				'default' => 'custom',

			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src($settings['image']['id'], 'thumbnail', $settings);

		if($settings){ ?>
<div class="flex justify-center items-center h-screen bg-blue-lightest">
<div id="app" class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
            <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
            <div class="w-full flex flex-col">
                <div class="p-4 pb-0 flex-1">
                    <h3 class="font-light mb-1 text-grey-darkest"><?php echo $settings['title']; ?></h3>
                    <div class="text-xs flex items-center mb-4">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <?php echo $settings['city']; ?>
                    </div>
                    <span class="text-5xl text-grey-darkest"><?php echo $settings['price']; ?></span>
                    <div class="flex items-center mt-4">
                        <div class="pr-2 text-xs">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg> <?php echo $settings['acomodation_1']; ?>
                        </div>
                        <div class="px-2 text-xs">
						<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path></svg><?php echo $settings['acomodation_2']; ?>
                        </div>
                    </div>
                </div>
                <div class="bg-grey-600 p-3 flex items-center justify-between transition hover:bg-blue-300">
				<a href="<?php echo $settings['url']?>"><?php echo $settings['button_text']; ?></a>
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>

                </div>
            </div>
        </div>
</div>
<?php } ?>
 <?php
	}

}
