<?php

namespace Elementor_Luaitech_Addon\Widgets;

use Elementor\Widget_Base;

class WidgetB extends Widget_Base
{

	public function get_name()
	{
		return __('hello B', 'elementor-luaitech-addon');
	}

	public function get_title()
	{
		return esc_html__('Hello World B', 'elementor-luaitech-addon');
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

		$this->add_control(

			'title',
			[
				'label' => esc_html__('Title', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('Hello there! This is a tailwindcss card example! Luaitech', 'elementor-luaitech-addon'),
			],

		);

		//texto em destaque
		$this->add_control(
			'highlight_text',
			[
				'label' => esc_html__('Texto em destaque', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Hello World', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto em destaque', 'elementor-luaitech-addon'),
			]
		);

		//content
		$this->add_control(
			'content',
			[
				'label' => esc_html__('Content', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => esc_html__('Hello World', 'elementor-luaitech-addon'),
				'default' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'elementor-luaitech-addon'),
			]
		);

		//button

		$this->add_control(
			'button_text',
			[
				'label' => esc_html__('Button Text', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Click Me', 'elementor-luaitech-addon'),
				'default' => esc_html__('Click Me', 'elementor-luaitech-addon'),
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
		<div class="bg-gray-300">
		<div class="flex bg-gray-100">
			<div class="px-8 py-10 max-w-md mx-auto sm:max-w-xl lg:m-w-full lg:w-1/2">
				<img class="rounded-lg shadow-xl lg:hidden" src="<?php echo $image_url; ?>" alt="">
				<h1 class="mt-4 text-xl"><?php echo $settings['title']; ?><span class="text-indigo-500"> <?php echo $settings['highlight_text']?></span></h1>
				<p class="mt-2 text-gray-600">
				    <?php echo $settings['content']; ?>
				</p>
				<button class="mt-4 bg-indigo-500 text-white rounded-lg px-4 py-2 shadow-xl"><?php echo $settings['button_text']?></button>

			</div>
			<div class="hidden lg:block lg:w-1/2 lg:relative">
				<img class="absolute inset-0 h-full w-full object-cover object-center" src="<?php echo $image_url; ?>" alt="">
		</div>
		</div>
		</div>
<?php } ?>
 <?php
	}

}
