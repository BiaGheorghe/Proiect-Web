var i=0;
var playerContainer=document.getElementById("player-info");
var btnj=document.getElementById("btnj");

btnj.addEventListener("click", function(){
    var ourRequest = new XMLHttpRequest();
    
ourRequest.open('GET','test.txt');
ourRequest.onload=function(){
    var ourData = JSON.parse(ourRequest.responseText);
    renderHTML(ourData,i);
    i+=2;
    if(i>ourData.length-1){
    
        btnj.classList.add("hide-me");
    }
    
};
ourRequest.send();

});

 	
function renderHTML(data,i){
		
		if(i==0){
		var htmlString1="";

        htmlString1+= "<p id='par' class='p1'>"+(i+1)+"."+" "+data[i].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Score:"+data[i].Scor;
       
        htmlString1+=".</p><hr>";
		
		var htmlString2="";

        htmlString2+=  "<p id='par' class='p2'>"+(i+2)+"."+" "+data[i+1].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Score:"+data[i+1].Scor;
       
        htmlString2+=".</p><hr>";
		}else
			
		if(i==2){
		var htmlString1="";

        htmlString1+= "<p id='par' class='p3'>"+(i+1)+"."+" "+data[i].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Score:"+data[i].Scor;
       
        htmlString1+=".</p><hr>";
		
		var htmlString2="";

        htmlString2+=  "<p id='par'>"+(i+2)+"."+" "+data[i+1].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Score:"+data[i+1].Scor;
       
        htmlString2+=".</p><hr>";
		}
		else{
        var htmlString1="";

        htmlString1+= "<p id='par'>"+(i+1)+"."+" "+data[i].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Score:"+data[i].Scor;
       
        htmlString1+=".</p><hr>";
		
	
        var htmlString2="";

        htmlString2+=  "<p id='par'>"+(i+2)+"."+" "+data[i+1].Username+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Score:"+data[i+1].Scor;
       
        htmlString2+=".</p><hr>";
		}

    playerContainer.insertAdjacentHTML('beforeend',htmlString1);
    playerContainer.insertAdjacentHTML('beforeend',htmlString2);

}

