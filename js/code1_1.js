var button=document.getElementById("example");
button.addEventListener("click",sendAlert);
function sendAlert(){
	//alert("HOLA");
	modifyByClass("perro");
	modifyByName("color");
	modifyByTag("span");
	/*var divpopo=document.getElementById("divpopo");
	getDataAttr(divpopo,"data-numero");
	modifyAttribute(divpopo,"data-numero","10000000");
	getDataAttr(divpopo,"data-numero");
	removeAttribute(divpopo,"data-numero");
	getDataAttr(divpopo,"data-numero");
	removeElement(divpopo);*/
	var inputNombre=document.getElementById("nombre");
	getInputValue(inputNombre);
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
	//alert(x);
	var x = document.getElementsByTagName(tag);

	for (i = 0; i < x.length; i++) {
		//alert("no");
	    x[i].innerHTML = "modificado";
	}
}

function getDataAttr(element,atribute){
	if(element.hasAttribute(atribute))
	{
		var attr=element.getAttribute(atribute);
	}
	alert(attr);
}

function removeAttribute(element,atribute){
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

function getInputValue(input){
	//var input=document.getElementById(inputID);
	alert(input.value);
}

function exampleAjax()
{
	var xhttp = new XMLHttpRequest();
	xhttp.responseType = "json";
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.response.edad;
			var respuesta=this.response;
			console.log(respuesta);
			console.log(respuesta.nombre)
		}
	};
	xhttp.open("POST", "example.php", true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.send("example=1&perro=2");
}