function rot47(str) {
	var texte= "";
	for (var i=0; i < str.length; i++) {
		if(str.charCodeAt(i) > 32 && str.charCodeAt(i) < 80)
			texte += String.fromCharCode(str.charCodeAt(i) + 47);
		if(str.charCodeAt(i) >= 80 && str.charCodeAt(i) < 127)
			texte += String.fromCharCode(str.charCodeAt(i) - 47);
	}
	return texte;
}

