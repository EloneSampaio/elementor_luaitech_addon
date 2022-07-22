institucional-label
institucional-value
prodbc-label
prodbc-value
data-forma1
data-valor1
data-pbcL-1
data-pbcV-1

service-container

Pbancario

pb_titulo
pb_texto_principal
prodbc-info



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
