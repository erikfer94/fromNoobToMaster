var button=document.getElementById("example");
button.addEventListener("click",sendAlert);
function sendAlert(){
	alert("HOLA");
}

function modifyByClass(classname){
	var x = document.getElementsByClassName(classname);
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].style.backgroundColor = "red";
	}
}


function modifyByName(name){
	var x = document.getElementsByName(name);
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].checked = true;
	}
}

function modifyByTag(tag){
	var x = document.getElementsByTag(tag);
	for (i = 0; i < x.length; i++) {
	    x[i].innerHTML = "modificado";
	}
}

function getDataAttr(element,atribute){
	if(element.hasAttribute())
	{
		var attr=element.getAttribute(atribute);
	}
	alert(attr);
}

function updateAttribute(element,atribute){
	if(element.hasAttribute(atribute))
	{
		element.removeAttribute(atribute);
	}
}

function modifyAttribute(element,atribute,val)
{
	if(element.hasAttribute(atribute))
	{
		element.setAttribute(atribute,val);
	}
}

function removeElement(element)
{
	element.remove();
}

function getInputValue(inputID){
	var input=document.getElementById(inputID);
	alert(input.value);
}

function exampleAjax()
{
	var xhttp = new XMLHttpRequest();
	xhttp.responseType = "json";
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.response;
			var respuesta=this.response;
			console.log(respuesta);
			console.log(respuesta.nombre)
		}
	};
	xhttp.open("POST", "example.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("example=1");
}