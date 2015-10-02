function login(){

	var userid,passwrd;
	userid = document.getElementById('userid').value;
	passwrd = document.getElementById('passwrd').value;

	//alert(document.getElementById(obj).value)
	params = "userid=" + userid +"&passwrd=" + passwrd +"&submit=login";
	request = new ajaxRequest()
	request.open("post","functions/ajaxhandler.php", true)
	request.setRequestHeader("content-type","application/x-www-form-urlencoded")
	request.setRequestHeader("Content-length", params.length)
	request.setRequestHeader("Connection", "close")
	request.onreadystatechange = function()
	{
		if (this.readyState == 4)
		{
		 
			if (this.status == 200)
			{
				if (this.responseText != null)
				{
					if(this.responseText==1)
					{window.location.replace("userprofil.php")}
					else{
					//alert(this.responseText);
				     document.getElementById('msg').innerHTML=this.responseText}
					 //document.getElementById('txtHint').innerHTML='* error with your data';
					 					
				}
				else alert("Ajax error: No data received")
				
			}
			else {alert( "Ajax error: " + this.statusText);
			}
		}
	}
	request.send(params)
	
	}
	
	
	
	//register user
	function signup(){

	var userid,passwrd;
	userid = document.getElementById('userid').value;
	passwrd = document.getElementById('passwrd').value;

	//alert(document.getElementById(obj).value)
	params = "userid=" + userid +"&passwrd=" + passwrd +"&submit=signup";
	request = new ajaxRequest()
	request.open("post","functions/ajaxhandler.php", true)
	request.setRequestHeader("content-type","application/x-www-form-urlencoded")
	request.setRequestHeader("Content-length", params.length)
	request.setRequestHeader("Connection", "close")
	request.onreadystatechange = function()
	{
		if (this.readyState == 4)
		{
		 
			if (this.status == 200)
			{
				if (this.responseText != null)
				{
					if(this.responseText==1)
					{window.location.replace("index.html")}
					else{
					//alert(this.responseText);
				     document.getElementById('msg').innerHTML=this.responseText}
					 //document.getElementById('txtHint').innerHTML='* error with your data';
					 					
				}
				else alert("Ajax error: No data received")
				
			}
			else {alert( "Ajax error: " + this.statusText);
			}
		}
	}
	request.send(params)
	
	}
	

 $('#addWorkshop').click(function(){
	 var params = $('#formAddWorkshop').serialize();
	 //alert(params);
	  ajaxRequest= $.ajax({
            url: "functions/ajaxhandler.php",
            type: "post",
            data: params,
			success: function(result){ 
			alert(result);}
        });

});

function savePuser()
{
	
	var fname,lname,email,pwd ;
	fname = document.getElementById('fname').value;
	lname = document.getElementById('lname').value;
	email = document.getElementById('email').value;
	pwd = document.getElementById('pwd').value;
	
	

	
		

	//alert(document.getElementById(obj).value)
	params = "fname=" + fname + "&lname=" + lname + "&email=" + email+"&pwd="+pwd+"&submit=yes";
	request = new ajaxRequest()
	request.open("post","feedback.php", true)
	request.setRequestHeader("content-type","application/x-www-form-urlencoded")
	request.setRequestHeader("Content-length", params.length)
	request.setRequestHeader("Connection", "close")
	request.onreadystatechange = function()
	{
		if (this.readyState == 4)
		{
		 
			if (this.status == 200)
			{
				if (this.responseText != null)
				{
					//alert(this.responseText);
				     document.getElementById('txtHint').innerHTML=this.responseText
					 //document.getElementById('txtHint').innerHTML='* error with your data';
					 					
				}
				else alert("Ajax error: No data received")
				
			}
			else {alert( "Ajax error: " + this.statusText);
			}
		}
	}
	request.send(params)

}





function ajaxRequest()
{
	try
	{
		var request = new XMLHttpRequest()
	}
	catch(e1)
	{
		try
		{
			request = new ActiveXObject("Msxml2.XMLHTTP")
		}
		catch(e2)
		{
			try
			{
				request = new ActiveXObject("Microsoft.XMLHTTP")
			}
			catch(e3)
			{
				request = false
			}
		}
	}
	return request
}