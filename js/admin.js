	// function to aprove request by admin
	function approve_req(x)
	{
		
		var xhttp = new XMLHttpRequest();
		var d = "id="+x;
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     alert(this.response);
		    	if(this.response=="approved")
		    	{
		    		document.getElementById(x).innerHTML ="<i class='fa  fa-check'></i> Approved";
		    		
		    	}
		    	else if(this.response=="notapproved"){
		    		alert("Error while approval.Please try again.");
		    		
		    	}
		    	else{
		    		alert(this.response);
		    	}
		      //document.getElementById(id).style.display = "none";
		    }
		  };
		xhttp.open("POST", "approve_req.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send(d);
	}
