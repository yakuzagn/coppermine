function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

$(document).ready (function() {
	$('textarea.autogrow').autogrow({
		maxHeight: 150,
		minHeight: 10,
		lineHeight: 16
	});
});