/**
 * 
 */
    function showDB(btn){
 
    var myPHPRequest = new XMLHttpRequest();
    myPHPRequest.onreadystatechange = function () {
   	if (myPHPRequest.readyState === 4 && myPHPRequest.status == 200) 
	{
      	    document.getElementById(btn).innerHTML = myPHPRequest.responseText;
      	    document.getElementById(btn).style.display = 'none';
	}};
    myPHPRequest.open('GET', 'testProject.php');
    myPHPRequest.send();
    }