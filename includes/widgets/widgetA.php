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
			'config_section',
			[
				'label' => esc_html__('Config', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(

			'title_header',
			[
				'label' => esc_html__('Header', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('PRODUTOS & SERVIÇOS', 'elementor-luaitech-addon'),
			]);

		//add header_description

		$this->add_control(

			'header_description',
			[
				'label' => esc_html__('Header Description', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Descrição do Header', 'elementor-luaitech-addon'),
				'default' => esc_html__('Conheças nossos produtos e serviços veja qual encaixa perfeitamente de acordo com a sua
				necessidade.', 'elementor-luaitech-addon'),
			]);

		// add background header

		$this->add_control(

			'background_header',
			[
				'label' => esc_html__('Background Header', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]);

		// add text institutional
			$this->add_control(

				'text_institutional',
				[
					'label' => esc_html__('Texto Institucional', 'elementor-luaitech-addon'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
					'default' => esc_html__('A ACROX BANK nasce com o propósito de ser o banco mais colaborativo e acolhedor do mercado Brasileiro, apoiando cada usuário a ter a sua visão
					de mundo respeitada, com uma estrutura única de apoio para todos os sonhos se tornarem realidade', 'elementor-luaitech-addon'),
				]);


		$this->end_controls_section();


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
				'label' => esc_html__('Selecionar Slide', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'show_label' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//imagem com descrição dos produtos
		$repeater->add_control(
			'img_descricao',
			[
				'label' => esc_html__('Selecionar Imagem circulos', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'show_label' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		//add background imagem

		$repeater->add_control(
			'background_imagem',
			[
				'label' => esc_html__('Background Imagem do produto', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'show_label' => true,
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

			<main>
				<!--Showcase-->
				<div class="showcase-bg">
					<div class="mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6">
						<div class="pt-10 sm:text-center lg:text-left">
							<h1 class="text-xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-3xl text-white">
								<span class="block xl:inline"><?php echo $settings['title_header'];?></span>
							</h1>
							<p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"><?php echo $settings['header_description']?></p>
						</div>



						<div class="flex flex-wrap-reverse gap-y-24 justify-between py-7 px-6 mx-auto max-w-screen-xl sm:px-8 md:px-12 lg:px-16 xl:px-24">
							<div class="relative z-10 md:w-1/2 w-full">
							<div class="swiper-container">

							<div class="swiper-wrapper">

								<?php

								foreach ($settings['slide_card'] as $slide) {
									$fundo_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src($slide['background_imagem']['id'], 'thumbnail', $settings);
									$image_url = \Elementor\Group_Control_Image_Size::get_attachment_image_src($slide['image']['id'], 'thumbnail', $settings);

								?>
                                <div class="swiper-slide" data-description="<?php esc_attr_e($slide['slide_description']); ?>" data-title="<?php esc_attr_e($slide['slide_titulo']); ?>" data-fundo="<?php esc_attr_e($fundo_url); ?>" >
									<img src="<?php echo $image_url; ?>" alt="" class="w-5/6 h-5/6 sm:w-4/4 sm:h-4/4 md:w-full md:h-full img-2">
                                </div>
								<?php } ?>
                                </div>

								<div class="swiper-pagination"></div>
								<div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
							</div>

								</div>


							<div class="relative md:w-1/2 w-full flex flex-col justify-between">

							</div>
						</div>
					</div>
				</div>
				<!--Show case end-->
				<div class="font-sans text-gray-900 bg-1" id="conteudo" style="	background: url('http://localhost/bank/wp-content/plugins/elementor_luaitech_addon/assets/images/cor/01.png') no-repeat center center/cover;">
					<div class="mx-auto max-w-7xl px-4  sm:px-6">
						<div class="pt-10 sm:text-center lg:text-left">
							<h1 class="text-xl  pt-10 tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-3xl text-black">
								<span class="block xl:inline" id="text_title_produto">INSTITUCIONAL</span>
							</h1>
							<p class="mt-3 text-base text-black sm:mt-5 sm:text-lg sm:max-w-4xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0" id="text_institutional">
									<?php echo $settings['text_institutional']; ?>
						</div>
					</div>
					<div class="flex flex-wrap-reverse gap-y-24 justify-between py-7 px-6 mx-auto max-w-screen-xl sm:px-8 md:px-12 lg:px-16 xl:px-24">
						<div class="relative z-10 md:w-1/2 w-full">
							<img src="http://localhost/bank/wp-content/plugins/elementor_luaitech_addon/assets/images/third.png" alt="" class="w-5/6 h-5/6 sm:w-4/4 sm:h-4/4 md:w-full md:h-full img-2">
						</div>

						<div class="relative md:w-1/2 w-full flex flex-col justify-between">
							<img src="http://localhost/bank/wp-content/plugins/elementor_luaitech_addon/assets/images/tree.png" alt="" class="w-4/6 h-50 ml-10 lg:self-end" id="tree">
						</div>
					</div>
				</div>


			</main>



	<?php		} ?>
	<!-- !pagination dots -->




	<script>
		var autoplayData = {
			delay: 1000 * 3,
			disableOnInteraction: false,
		};
		var loopData = false;
		var slideEffect = 'slide';

		const swiper = new Swiper('.swiper-container', {
			slidesPerView: 3,
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
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			keyboard: {
				enabled: false,
			},
			//grabCursor: true,

			autoplay: true, //autoplayData,
			preventClicks: false,
			preventClicksPropagation: false,

		});


		console.log(swiper);
		jQuery(document).ready(function() {
			jQuery('.swiper-slide img').click(function() {

				var description = jQuery(this).parent().attr('data-description');
				var title = jQuery(this).parent().attr('data-title');
				var fundo = jQuery(this).parent().attr('data-fundo');
				console.log(fundo);
				//	jQuery('#conteudo').removeClass('invisible');
				//change text_institutional color
				jQuery('#text_institutional').html(description);
				jQuery('#text_institutional').removeClass('text-black'); //text content description product
				jQuery('#text_institutional').addClass('text-white');
				jQuery('#text_title_produto').html(title);
				jQuery('#text_title_produto').removeClass('text-black'); //text content title product
				jQuery('#text_title_produto').addClass('text-white');
					//change bacnkground image
				jQuery('#conteudo').css('background-image', 'url(' + fundo + ')');

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
