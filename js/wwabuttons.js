var lastId;	//keep track of last id to come through


function Display(id)
{
	
			//if element is already displayed... do nothing
	if(document.getElementById(id).style.display=="block"){}
		
			
	else
		{	
			//hidding previous form
			if(lastId!=null)
			{document.getElementById(lastId).style.display="none";}
			
			
			//revealing selected form
			document.getElementById(id).style.display="block";	
		
				
					//hard coded Header Change
					if(id=='insertForm')
					{document.getElementById("header").innerHTML="Insert Form";}		
				
					if(id=='retrieveForm')
					{document.getElementById("header").innerHTML="Retrieve Form";}	
		
		
			//assign last id
			lastId=id;	
		}
}
