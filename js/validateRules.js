$.validator.addMethod("AtLeastLowerLetter", function (value, element) {
	return this.optional(element) || /[a-z]+/.test(value);
}, "Debe contener al menos una letra minúscula");

$.validator.addMethod("AtLeastUpperLetter", function (value, element) {
	return this.optional(element) || /[A-Z]+/.test(value);
}, "Debe contener al menos una letra mayúscula");

$.validator.addMethod("AtLeastNumber", function (value, element) {
	return this.optional(element) || /[0-9]+/.test(value);
}, "Debe contener al menos un número");

$.validator.addMethod("AtLeastCharacter", function (value, element) {
	return this.optional(element) || /[¡!¿?@#$%&*._-]+/.test(value);
}, "Debe contener al menos un caracter especial ( ¡!¿?@#$%&*._- )");

jQuery.validator.addMethod("OnlyLetters", function (value, element) {
	return this.optional(element) || /^[a-záéíóúüñ," "]+$/i.test(value);
});

$.validator.addMethod("SpecificCharacters", function (value, element) {
	return this.optional(element) || /^[a-zA-Z0-9!@#$%&*_.?-]+$/.test(value);
});

$.validator.addMethod("valueNotEquals", function (value, element, arg) {
	return arg !== value;
}, "Value must not equal arg.");

$.validator.addMethod("Alphanumeric", function (value, element) {
	return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
});