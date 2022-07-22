createOffsets();
window.addEventListener("resize", createOffsets);

function createOffsets() {
  const sectionWithLeftOffset =  jQuery(".section-with-left-offset ")

  console.log(sectionWithLeftOffset);
  const sectionWithLeftOffsetCarouselWrapper = jQuery(
    ".carousel-wrapper"
  );
  const sectionWithRightOffset = jQuery(
    ".section-with-right-offset"
  );
  const sectionWithRightOffsetCarouselWrapper = jQuery(
    ".section-with-right-offset .carousel-wrapper"
  );
  const offset = (window.innerWidth - 1100) / 2;
  const mqLarge = window.matchMedia("(min-width: 1200px)");

  if (sectionWithLeftOffset && mqLarge.matches) {
    sectionWithLeftOffsetCarouselWrapper.css('margin-left',offset + "px");
  } else {
    sectionWithLeftOffsetCarouselWrapper.css('margin-left',0);
  }

  if (sectionWithRightOffset && mqLarge.matches) {
    sectionWithRightOffsetCarouselWrapper.css('margin-right',offset + "px");
  } else {
    sectionWithRightOffsetCarouselWrapper.css('margin-right',0);
  }
}

function cnpjValidation(value) {
  if (!value) return false

  // Aceita receber o valor como string, número ou array com todos os dígitos
  const isString = typeof value === 'string'
  const validTypes = isString || Number.isInteger(value) || Array.isArray(value)

  // Elimina valor em formato inválido
  if (!validTypes) return false

  // Filtro inicial para entradas do tipo string
  if (isString) {
    // Limita ao máximo de 18 caracteres, para CNPJ formatado
    if (value.length > 18) return false

    // Teste Regex para veificar se é uma string apenas dígitos válida
    const digitsOnly = /^\d{14}$/.test(value)
    // Teste Regex para verificar se é uma string formatada válida
    const validFormat = /^\d{2}.\d{3}.\d{3}\/\d{4}-\d{2}$/.test(value)

    // Se o formato é válido, usa um truque para seguir o fluxo da validação
    if (digitsOnly || validFormat) true
    // Se não, retorna inválido
    else return false
  }

  // Guarda um array com todos os dígitos do valor
  const match = value.toString().match(/\d/g)
  const numbers = Array.isArray(match) ? match.map(Number) : []

  // Valida a quantidade de dígitos
  if (numbers.length !== 14) return false

  // Elimina inválidos com todos os dígitos iguais
  const items = [...new Set(numbers)]
  if (items.length === 1) return false

  // Cálculo validador
  const calc = (x) => {
    const slice = numbers.slice(0, x)
    let factor = x - 7
    let sum = 0

    for (let i = x; i >= 1; i--) {
      const n = slice[x - i]
      sum += n * factor--
      if (factor < 2) factor = 9
    }

    const result = 11 - (sum % 11)

    return result > 9 ? 0 : result
  }

  // Separa os 2 últimos dígitos de verificadores
  const digits = numbers.slice(12)

  // Valida 1o. dígito verificador
  const digit0 = calc(12)
  if (digit0 !== digits[0]) return false

  // Valida 2o. dígito verificador
  const digit1 = calc(13)
  return digit1 === digits[1]
}

function validateEmail(email) {
	var re = /\S+@\S+\.\S+/;
	return re.test(email);
}

//get input value cnpj
var cnpj = jQuery('input[name=mf-cnpj]').value();

jQuery('input[name=mf-cnpj]').onChange(function() {
	  cnpj = jQuery('input[name=mf-cnpj]').value();
  	  console.log(cnpj);
});

if (cnpjValidation(cnpj)==false) {
  jQuery('input[name=mf-cnpj]').css("border-bottom-color", "#ff0000");
}

var email = jQuery('input[name=mf-email]').value();
if (validateEmail(email)==false) {
  jQuery('input[name=mf-email]').css("border-bottom-color", "#ff0000");
}
