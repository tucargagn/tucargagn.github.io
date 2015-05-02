function calculo(form) {
	a = parseInt(form.a.value);
	b = parseInt(form.b.value);
	c = parseInt(form.c.value);
	d = a * b * c / 166;
	form.total.value = d.toFixed(2);
}