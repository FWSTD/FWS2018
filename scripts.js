var index=1;

function next()
{
	index++;
	if(index>4)
	    index=1;
	document.getElementById("img").src="resources/img"+index+".jpg";
}

function previous()
{		
	index--;
	if(index<1)
	    index=4;
	document.getElementById("img").src="resources/img"+index+".jpg";
}

function checkEmpty(field_name)
{
	if (field_name == "fname")
	{
		elem=document.getElementById("fname");
		if (elem.value=="")
			document.getElementById("fname_text").style.visibility="visible";
		else
			document.getElementById("fname_text").style.visibility="hidden";
	}
	if (field_name == "lname")
	{
		elem=document.getElementById("lname");
		if (elem.value=="")
			document.getElementById("lname_text").style.visibility="visible";
		else
			document.getElementById("lname_text").style.visibility="hidden";	
	}
}