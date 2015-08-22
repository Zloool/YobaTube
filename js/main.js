 function changetape(tape, id, hostaddr){
	 document.getElementById("penis").src= "http://"+hostaddr+"/"+tape;
	 history.pushState(null, null, 'http://'+hostaddr+'/index.php?id='+id);
	 //ÍÅ ÎÁÍÎÂËßÅÒ ÍÀÇÂÀÍÈÅ È ÎÏÈÑÀÍÈÅ ÏÎÔÈÊÑÈÒÜ
 }