function changeText(){
	if(document.getElementById('userInput1').checked == true){
		var subfolders = "-r ";
	}else{
		var subfolders = "";
	}
	var source = document.getElementById('userInput2').value;
	var destination = document.getElementById('userInput3').value;
	var width = document.getElementById('userInput4').value;
	var height = document.getElementById('userInput5').value;
	var output = "metapixel-prepare " + subfolders + source + " " + destination + " --width=" + width + " --height=" + height;
	document.getElementById('code1').innerHTML = output;
	document.getElementById('userInput2.3').value = destination;
}
function changeText2(){
	var input = document.getElementById('userInput2.1').value;
	var output = document.getElementById('userInput2.2').value;
	var path = document.getElementById('userInput2.3').value;
	var scale = document.getElementById('userInput2.4').value;
	var repeat = document.getElementById('userInput2.5').value;
	var output = "metapixel --metapixel " + input+ " " + output + " --library " + path + " --scale=" + scale + " --distance=" + repeat;
	document.getElementById('code2').innerHTML = output;
}

