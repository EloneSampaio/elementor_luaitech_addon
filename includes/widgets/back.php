<?php

namespace Elementor_Luaitech_Addon\Widgets;

use Elementor\Widget_Base;

class WidgetA extends Widget_Base
{

	public function get_name()
	{
		return __('hello A', 'elementor-luaitech-addon');
	}

	public function get_title()
	{
		return esc_html__('Hello World A', 'elementor-luaitech-addon');
	}

	public function get_icon()
	{
		return 'eicon-code';
	}

	public function get_categories()
	{
		return ['basic'];
	}

	public function get_keywords()
	{
		return ['luaitech', 'hello', 'world'];
	}

	public function get_custom_help_url()
	{
		return 'https://elementor.com/docs/hello-world-widget/';
	}

	protected function register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slide_titulo',
			[
				'label' => esc_html__('Title', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Hello World',
				'placeholder' => esc_html__('Digite seu texto aqui', 'elementor-luaitech-addon'),
			]
		);

		$repeater->add_control(
			'slide_description',
			[
				'label' => esc_html__('Descrição do slide', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War', 'elementor-luaitech-addon'),
				'placeholder' => esc_html__('Seu texto aqui', 'elementor-luaitech-addon'),
			]
		);

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__('Selecionar Imagens', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'show_label' => false,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'fundo',
			[
				'label' => esc_html__('Selecionar Imagem', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'show_label' => false,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => ['custom'],
				'include' => [],
				'default' => 'large',
			]
		);

		$repeater->add_control(
			'slide_color',
			[
				'label' => __('Card Color', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'Red',
				'options' => [
					'Red'  => __('Red', 'elementor-luaitech-addon'),
					'Pink' => __('Pink', 'elementor-luaitech-addon'),
					'Purple' => __('Purple', 'elementor-luaitech-addon'),
					'Deep-Purple' => __('Deep-Purple', 'elementor-luaitech-addon'),
					'Indigo' => __('Indigo', 'elementor-luaitech-addon'),
					'Blue'  => __('Blue', 'elementor-luaitech-addon'),
					'Light-Blue' => __('Light-Blue', 'elementor-luaitech-addon'),
					'Cyan' => __('Cyan', 'elementor-luaitech-addon'),
					'Teal' => __('Teal', 'elementor-luaitech-addon'),
					'Green' => __('Green', 'elementor-luaitech-addon'),
					'Light-Green'  => __('Light-Green', 'elementor-luaitech-addon'),
					'Lime' => __('Lime', 'elementor-luaitech-addon'),
					'Yellow' => __('Yellow', 'elementor-luaitech-addon'),
					'Amber' => __('Amber', 'elementor-luaitech-addon'),
					'Orange' => __('Orange', 'elementor-luaitech-addon'),
					'Deep-Orange' => __('Deep-Orange', 'elementor-luaitech-addon'),
					'Brown' => __('Brown', 'elementor-luaitech-addon'),
					'Grey' => __('Grey', 'elementor-luaitech-addon'),
					'Blue-Grey' => __('Blue-Grey', 'elementor-luaitech-addon'),
				],
			]
		);

		$this->add_control(
			'slide_card',
			[
				'label' => __('Cards List Slide', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slide_titulo' => __('John Doe.', 'elementor-luaitech-addon'),
						'slide_description' => __('He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', 'elementor-luaitech-addon'),
					],
					[
						'slide_titulo' => __('John Doe.', 'elementor-luaitech-addon'),
						'slide_description' => __('He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', 'elementor-luaitech-addon'),
					],

				],
				'title_field' => '{{{ slide_titulo }}}',
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'typography_section',
			[
				'label' => __('Typography Controls', 'plugin-name'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'titulo_typo',
				'label' => __('Titulo', 'plugin-domain'),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .material-card h2 .main-title',
			]
		);

		$this->end_controls_section();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();

		if ($settings['slide_card']) {  ?>
			<section class="section-with-carousel section-with-right-offset position-relative mt-5">
			<div class="carousel-wrapper">

				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php

						foreach ($settings['slide_card'] as $slide) {
							$fundo_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src($slide['fundo']['id'], 'thumbnail', $settings);
							$image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src($slide['image']['id'], 'thumbnail', $settings);
							//echo $fundo_url; exit;

						?>

							<div class="swiper-slide">
								<div style="width: 50%; float: left; " data-description="<?php esc_attr_e($slide['slide_description']); ?>" data-title="<?php esc_attr_e($slide['slide_titulo']); ?>" data-fundo="<?php esc_attr_e($fundo_url); ?>">
									<img class="" src="<?php echo $image_url ?>" data-loop="<?php esc_attr_e($slide['_id']); ?>" />

								</div>
							</div>
						<?php } ?>
					</div>
					<!-- !swiper slides -->
					<div class="carousel-controls">
						<button class="carousel-control carousel-control-left" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
								<path fill-rule="evenodd" d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path>
							</svg>
						</button>
						<button class="carousel-control carousel-control-right" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
								<path fill-rule="evenodd" d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z"></path>
							</svg>
						</button>
					</div>
					<div class="swiper-pagination"></div>

				</div>
			</div>
			</section>
		<?php		} ?>
		<!-- !pagination dots -->

	<section class="section-with-carousel section-with-left-offset position-relative mt-5">
		<div class="container" id="conteudo">
			<div class="max-w-xl rounded-lg shadow-md lg:flex md:flex shadow-sky-600 ">
				<img class="object-cover w-full md:w-1/2 lg:w-1/3 slide_fundo" src="https://cdn.pixabay.com/photo/2016/12/19/18/21/snowflake-1918794__340.jpg" alt="image" />
				<div class="px-6 py-4">
					<h4 class="mb-3 text-base font-semibold tracking-tight text-sky-600 slide_texto">
						Christmas Tree Decoration
					</h4>
					<p class="mb-2 text-sm leading-normal text-justify text-sky-900 slide_description">
						Lorem ipsum dolor, sit amet cons ectetur adipis icing elit. Praesen tium,
						quibusdam facere quo laborum maiores sequi nam tenetur laud.
					</p>
				</div>
			</div>
		</div>
	</section>



		<script>
			var autoplayData = {
				delay: 1000 * 3,
				disableOnInteraction: false,
			};
			var loopData = false;
			var slideEffect = 'slide';

			const swiper = new Swiper('.swiper-container', {
				slidesPerView: 4,
				loop: loopData,
				spaceBetween: 1,
				freeMode: true,

				pagination: {
					el: '.swiper-pagination',
					"dynamicBullets": true,
					clickable: true,
				},

				effect: slideEffect,

				cubeEffect: {
					shadow: false,
					slideShadows: false,
					shadowOffset: 1,
					shadowScale: 0.94,
				},
				creativeEffect: {
					prev: {
						shadow: true,
						translate: [0, 0, -400],
					},
					next: {
						translate: ["100%", 0, 0],
					},
				},
				navigation: {
					nextEl: '.carousel-control-right',
					prevEl: '.carousel-control-left',
				},
				keyboard: {
					enabled: false,
				},
				//grabCursor: true,

				autoplay: false, //autoplayData,
				preventClicks: false,
				preventClicksPropagation: false,

			});


			console.log(swiper);
			jQuery(document).ready(function() {
				jQuery('.swiper-slide img').click(function() {
					var description = jQuery(this).parent().attr('data-description');
					var title = jQuery(this).parent().attr('data-title');
					var fundo = jQuery(this).parent().attr('data-fundo');
				//	jQuery('#conteudo').removeClass('invisible');
					jQuery('.slide_texto').html(title);
					jQuery('.slide_description').html(description);
					if (fundo != '') {
						jQuery('.slide_fundo').attr('src', fundo);
					} else {
						jQuery('.slide_fundo').attr('src', 'https://cdn.pixabay.com/photo/2016/12/19/18/21/snowflake-1918794__340.jpg');
					}
					console.log(description);
					console.log(title);
					console.log(fundo);
				});


				/* jQuery('.slider_click').click(function() {
					var description = jQuery(this).parent().attr('data-description');
					var title = jQuery(this).parent().attr('data-title');

					jQuery('#content_slide').removeClass('hidden');
					jQuery('.slide_titulo').html(title);
					jQuery('.slide_description').html(description);
					console.log('click');
					//swiper.slideTo(loop, 1000, false);
				}); */
			});
		</script>
<?php
	}
}
