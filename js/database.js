
 function showPanelByID(id){
	if(id.id == "browseBtn"){
     browseBtn.style.display = 'block';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
	 operationsBtn.style.display = 'none';
    } else if(id.id == "structureBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'block';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'none';
    } else if(id.id == "sqlBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'block';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'none';
    } else if(id.id == "searchBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'block';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'none';
    } else if(id.id == "insertBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'block';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'none';
    } else if(id.id == "exportBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'block';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'none';
    } else if(id.id == "importBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'block';
     operationsBtn.style.display = 'none';
    } else if(id.id == "operationsBtn"){
     browseBtn.style.display = 'none';
	 structureBtn.style.display = 'none';
	 sqlBtn.style.display = 'none';
	 searchBtn.style.display = 'none';
	 insertBtn.style.display = 'none';
	 exportBtn.style.display = 'none';
	 importBtn.style.display = 'none';
     operationsBtn.style.display = 'block';
    }
 }
