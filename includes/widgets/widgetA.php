<?php

namespace Elementor_Luaitech_Addon\Widgets;

use Elementor\Widget_Base;

class WidgetA extends Widget_Base
{

	public function get_name()
	{
		return __('Cards Acrox', 'elementor-luaitech-addon');
	}

	public function get_title()
	{
		return esc_html__('Cards Acrox Bank', 'elementor-luaitech-addon');
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


	function sessao_produto_bancario()
	{

		//Seção de Produtos




		$this->start_controls_section(
			'content_produtos_bancario',
			[
				'label' => esc_html__('Seção Produto Bancário', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(

			'pb_titulo',
			[
				'label' => esc_html__('Título', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Título', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pb_texto_principal',
			[
				'label' => esc_html__('Texto', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pbl-1',
			[
				'label' => esc_html__('Forma-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Visão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pbl-2',
			[
				'label' => esc_html__('Forma-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Missão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pbl-3',
			[
				'label' => esc_html__('Forma-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Valores1', 'elementor-luaitech-addon'),
			]
		);


		$this->add_control(

			'pbv-1',
			[
				'label' => esc_html__('Valor-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pbv-2',
			[
				'label' => esc_html__('Valor-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pbv-3',
			[
				'label' => esc_html__('Valor-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->end_controls_section();
	}

	function sessao_produto_estruturado()
	{

		//Seção de Produtos Não bancario




		$this->start_controls_section(
			'content_produtos_estruturado',
			[
				'label' => esc_html__('Seção Produto Estruturado', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(

			'peb_titulo',
			[
				'label' => esc_html__('Título', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Título', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'peb_texto_principal',
			[
				'label' => esc_html__('Texto', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pebl-1',
			[
				'label' => esc_html__('Forma-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Visão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pebl-2',
			[
				'label' => esc_html__('Forma-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Missão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pebl-3',
			[
				'label' => esc_html__('Forma-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Valores1', 'elementor-luaitech-addon'),
			]
		);


		$this->add_control(

			'pebv-1',
			[
				'label' => esc_html__('Valor-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pebv-2',
			[
				'label' => esc_html__('Valor-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pebv-3',
			[
				'label' => esc_html__('Valor-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->end_controls_section();
	}



	function sessao_produto_nao_bancario()
	{

		//Seção de Produtos Não bancario




		$this->start_controls_section(
			'content_produtos_nao_bancario',
			[
				'label' => esc_html__('Seção Produto Não Bancário', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(

			'pnb_titulo',
			[
				'label' => esc_html__('Título', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Título', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnb_texto_principal',
			[
				'label' => esc_html__('Texto', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnbl-1',
			[
				'label' => esc_html__('Forma-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Visão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnbl-2',
			[
				'label' => esc_html__('Forma-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Missão1', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnbl-3',
			[
				'label' => esc_html__('Forma-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Valores1', 'elementor-luaitech-addon'),
			]
		);


		$this->add_control(

			'pnbv-1',
			[
				'label' => esc_html__('Valor-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnbv-2',
			[
				'label' => esc_html__('Valor-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'pnbv-3',
			[
				'label' => esc_html__('Valor-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->end_controls_section();
	}





	function sessao_institucional()
	{
		$this->start_controls_section(
			'content_institucional',
			[
				'label' => esc_html__('Seção Institucional', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(

			'forma-1',
			[
				'label' => esc_html__('Forma-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Visão', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'forma-2',
			[
				'label' => esc_html__('Forma-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Missão', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'forma-3',
			[
				'label' => esc_html__('Forma-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Valores', 'elementor-luaitech-addon'),
			]
		);


		$this->add_control(

			'valor-1',
			[
				'label' => esc_html__('Valor-1', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'valor-2',
			[
				'label' => esc_html__('Valor-2', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'valor-3',
			[
				'label' => esc_html__('Valor-3', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Valor', 'elementor-luaitech-addon'),
				'default' => esc_html__('Texto do valor', 'elementor-luaitech-addon'),
			]
		);

		$this->end_controls_section();
	}


	function institucional()
	{
		$this->start_controls_section(
			'config_section',
			[
				'label' => esc_html__('Institucional', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//add Texto de descrição do header

		$this->add_control(

			'header_description',
			[
				'label' => esc_html__('Header Description', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Forma', 'elementor-luaitech-addon'),
				'default' => esc_html__('Conheça nossos produtos e serviços veja qual encaixa perfeitamente </br> de
			acordo com sua necessidade.', 'elementor-luaitech-addon'),
			]
		);

		$this->add_control(

			'title_header',
			[
				'label' => esc_html__('Header', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('Produtos & Serviços', 'elementor-luaitech-addon'),
			]
		);


		// add titulo institutional
		$this->add_control(

			'titulo_institutional',
			[
				'label' => esc_html__('Texto Institucional', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('Institucional', 'elementor-luaitech-addon'),
			]
		);

		// add text institutional
		$this->add_control(

			'text_institutional',
			[
				'label' => esc_html__('Texto Institucional', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu texto', 'elementor-luaitech-addon'),
				'default' => esc_html__('A ACROX BANK nasce com o propósito de ser o banco mais colaborativo e acolhedor do mercado Brasileiro, apoiando cada usuário a ter a sua visão
						de mundo respeitada, com uma estrutura única de apoio para todos os sonhos se tornarem realidade', 'elementor-luaitech-addon'),
			]
		);


		$this->end_controls_section();
		// final da seção institucional

		//Seção de Produtos


	}

	public static function set_placeholder_image_src_background_product()
	{
		$placeholder_image = plugins_url('assets/images/placeholder.png', __FILE__);
		$placeholder_image = apply_filters('elementor/utils/get_placeholder_image_src', $placeholder_image);

		return $placeholder_image;
	}

	protected function register_controls()
	{
		$this->institucional();
		$this->sessao_institucional();
		$this->sessao_produto_bancario();
		$this->sessao_produto_nao_bancario();
		$this->sessao_produto_estruturado();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		#var_dump($settings); exit;

		if ($settings['title_header']) {  ?>

			<div class="main-section">
				<div class="section-header">
					<div class="section-header-title">
						<div class="section-square">
							<h1><?php echo $settings['title_header']; ?></h1>
						</div>
					</div>
					<p>
						<?php echo $settings['header_description']; ?>
					</p>
				</div>
				<div class="section-container">
					<div class="product-container">
						<div class="product-cards">
							<div class="product-card-item" id="Pbancario" >
								<img src="<?php echo plugins_url('assets/images/img/icon-1.svg', ELEMENTOR_LUAITECH_ADDON_FILE);  ?>" alt="">
								<p>Produtos Bancários</p>
							</div>
							<div class="product-card-item" id="Pnbancario">
								<img src="<?php echo plugins_url('assets/images/img/icon-2-1.svg', ELEMENTOR_LUAITECH_ADDON_FILE);  ?>" alt="">
								<p>Produtos Não Bancários</p>
							</div>
							<div class="product-card-item" id="Pebancario">
								<img src="<?php echo plugins_url('assets/images/img/icon-3-1.svg', ELEMENTOR_LUAITECH_ADDON_FILE);  ?>" alt="">
								<p>Projetos Estruturados</p>
							</div>

						</div>
						<div class="product-gradient">
							<div class="product-gradient-text">
								<p>Encontrou o que deseja? Entre em <strong>contato</strong> agora mesmo!</p>
							</div>
						</div>
					</div>
					<div class="service-container">
					<span id="institucional-label"  data-forma1="<?php echo $settings['forma-1']; ?>" data-forma2="<?php echo $settings['forma-2']; ?>" data-forma3="<?php echo $settings['forma-3']; ?>" ></span>
					<span id="institucional-value"  data-valor1="<?php echo $settings['valor-1']; ?>" data-valor2="<?php echo $settings['valor-2']; ?>" data-valor3="<?php echo $settings['valor-3']; ?>" ></span>

					<span id="prodbc-info"  data-pbcTitulo="<?php echo $settings['pb_titulo']; ?>" data-pbcTexto="<?php echo $settings['pb_texto_principal']; ?>" ></span>
					<span id="prodbc-label"  data-pbcL-1="<?php echo $settings['pbl-1']; ?>" data-pbcL-2="<?php echo $settings['pbl-2']; ?>" data-pbcL-3="<?php echo $settings['pbl-3']; ?>" ></span>
					<span id="prodbc-value"  data-pbcV-1="<?php echo $settings['pbv-1']; ?>" data-pbcV-2="<?php echo $settings['pbv-2']; ?>" data-pbcV-3="<?php echo $settings['pbv-3']; ?>" ></span>

					<span id="prodnbc-info"  data-pnbcTitulo="<?php echo $settings['pnb_titulo']; ?>" data-pnbcTexto="<?php echo $settings['pnb_texto_principal']; ?>" ></span>
					<span id="prodnbc-label"  data-pnbcL-1="<?php echo $settings['pnbl-1']; ?>" data-pnbcL-2="<?php echo $settings['pnbl-2']; ?>" data-pnbcL-3="<?php echo $settings['pnbl-3']; ?>" ></span>
					<span id="prodnbc-value"  data-pnbcV-1="<?php echo $settings['pnbv-1']; ?>" data-pnbcV-2="<?php echo $settings['pnbv-2']; ?>" data-pnbcV-3="<?php echo $settings['pnbv-3']; ?>" ></span>

					<span id="prodebc-info"  data-pebcTitulo="<?php echo $settings['peb_titulo']; ?>" data-pebcTexto="<?php echo $settings['peb_texto_principal']; ?>" ></span>
					<span id="prodebc-label"  data-pebcL-1="<?php echo $settings['pebl-1']; ?>" data-pebcL-2="<?php echo $settings['pebl-2']; ?>" data-pebcL-3="<?php echo $settings['pebl-3']; ?>" ></span>
					<span id="prodebc-value"  data-pebcV-1="<?php echo $settings['pebv-1']; ?>" data-pebcV-2="<?php echo $settings['pebv-2']; ?>" data-pebcV-3="<?php echo $settings['pebv-3']; ?>" ></span>

						<div class="service-card-header">
							<div class="service-card-header-title">
								<div class="service-square">
									<h1 id="text_title_produto"><?php echo $settings['titulo_institutional']; ?></h1>
								</div>
							</div>
							<p id="texto-custom">
								<?php echo $settings['text_institutional']; ?>
							</p>
						</div>
						<div class="service-cards">
							<div class="service-card-item">
								<div class="circle" id="forma-1"><?php echo $settings['forma-1']; ?></div>
								<div class="service-card-text">
									<p id="texto-1">
										<?php echo $settings['valor-1']; ?>
									</p>
								</div>
							</div>
							<div class="service-card-item">
								<div class="circle" id="forma-2"><?php echo $settings['forma-2']; ?></div>

								<div class="service-card-text">
									<p id="texto-2">
										<?php echo $settings['valor-2']; ?>
									</p>
								</div>
							</div>
							<div class="service-card-item">
								<div class="circle" id="forma-3"><?php echo $settings['forma-3']; ?></div>
								<div class="service-card-text">
									<p id="texto-3">
										<?php echo $settings['valor-3']; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-store">
						<h1>Conheça o nosso APP</h1>
						<p>O aplicativo móvel do <strong>Acrocx Bank</strong> ,um centro de recursos principal, está b
							aqui para ajudá-lo a se ajustar à nova maneira de trabalhar.</p>
						<div class="section-store-img">

							<a href="">
								<img src="<?php echo plugins_url('assets/images/img/apple.svg', ELEMENTOR_LUAITECH_ADDON_FILE);  ?>" class="section-store-app" />
							</a> <a href="">
								<img src="<?php echo plugins_url('assets/images/img/google.svg', ELEMENTOR_LUAITECH_ADDON_FILE);  ?>" class="section-store-app" />
							</a>

						</div>
					</div>
				</div>
			</div>

		<?php		} ?>
		<!-- !pagination dots -->




		<script>

			function produto_bancario() {
				jQuery('#Pbancario').click(function() {
					console.log('Pagamento Bancário');
					var pb_titulo = jQuery('#prodbc-info').attr('data-pbcTitulo');
					var pb_texto_principal = jQuery('#prodbc-info').attr('data-pbcTexto');
					jQuery('#text_title_produto').text(pb_titulo);
					jQuery('#texto-custom').text(pb_texto_principal);

					var datapbcL1 =jQuery('#prodbc-label').attr('data-pbcL-1');
					var datapbcL2 =jQuery('#prodbc-label').attr('data-pbcL-2');
					var datapbcL3 =jQuery('#prodbc-label').attr('data-pbcL-3');
					var datapbcV1 =jQuery('#prodbc-value').attr('data-pbcV-1');
					var datapbcV2 =jQuery('#prodbc-value').attr('data-pbcV-2');
					var datapbcV3 =jQuery('#prodbc-value').attr('data-pbcV-3');


					jQuery('#forma-1').html(datapbcL1);
					jQuery('#forma-2').html(datapbcL2);
					jQuery('#forma-3').html(datapbcL3);

					jQuery('#texto-1').html(datapbcV1);
					jQuery('#texto-2').html(datapbcV2);
					jQuery('#texto-3').html(datapbcV3);

				});

			}


			function produto_nao_bancario() {
				jQuery('#Pnbancario').click(function() {
					console.log('Pagamento Não Bancário');
					var pnb_titulo = jQuery('#prodnbc-info').attr('data-pnbcTitulo');
					var pnb_texto_principal = jQuery('#prodnbc-info').attr('data-pnbcTexto');
					console.log(pnb_texto_principal);
					jQuery('#text_title_produto').text(pnb_titulo);
					jQuery('#texto-custom').text(pnb_texto_principal);

					var datapnbcL1 =jQuery('#prodnbc-label').attr('data-pnbcL-1');
					var datapnbcL2 =jQuery('#prodnbc-label').attr('data-pnbcL-2');
					var datapnbcL3 =jQuery('#prodnbc-label').attr('data-pnbcL-3');
					var datapnbcV1 =jQuery('#prodnbc-value').attr('data-pnbcV-1');
					var datapnbcV2 =jQuery('#prodnbc-value').attr('data-pnbcV-2');
					var datapnbcV3 =jQuery('#prodnbc-value').attr('data-pnbcV-3');


					jQuery('#forma-1').html(datapnbcL1);
					jQuery('#forma-2').html(datapnbcL2);
					jQuery('#forma-3').html(datapnbcL3);

					jQuery('#texto-1').html(datapnbcV1);
					jQuery('#texto-2').html(datapnbcV2);
					jQuery('#texto-3').html(datapnbcV3);

				});

			}


			function produto_estruturado() {
				jQuery('#Pebancario').click(function() {
					console.log('Pagamento  Estruturado');
					var peb_titulo = jQuery('#prodebc-info').attr('data-pebcTitulo');
					var peb_texto_principal = jQuery('#prodebc-info').attr('data-pebcTexto');
					console.log(peb_texto_principal);
					jQuery('#text_title_produto').text(peb_titulo);
					jQuery('#texto-custom').text(peb_texto_principal);

					var datapebcL1 =jQuery('#prodebc-label').attr('data-pebcL-1');
					var datapebcL2 =jQuery('#prodebc-label').attr('data-pebcL-2');
					var datapebcL3 =jQuery('#prodebc-label').attr('data-pebcL-3');
					var datapebcV1 =jQuery('#prodebc-value').attr('data-pebcV-1');
					var datapebcV2 =jQuery('#prodebc-value').attr('data-pebcV-2');
					var datapebcV3 =jQuery('#prodebc-value').attr('data-pebcV-3');


					jQuery('#forma-1').html(datapebcL1);
					jQuery('#forma-2').html(datapebcL2);
					jQuery('#forma-3').html(datapebcL3);

					jQuery('#texto-1').html(datapebcV1);
					jQuery('#texto-2').html(datapebcV2);
					jQuery('#texto-3').html(datapebcV3);

				});

			}
			jQuery(document).ready(function() {
				produto_bancario();
				produto_nao_bancario();
				produto_estruturado();
			});
		</script>
<?php
	}
}
