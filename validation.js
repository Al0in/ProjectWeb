  function validateForm() {
    var a = document.forms["Form"]["name"].value;
    var b = document.forms["Form"]["Category"].value;
    var c = document.forms["Form"]["NOR"].value;
    var d = document.forms["Form"]["NOT"].value;
	var e = document.forms["Form"]["Rent"].value;
    var f = document.forms["Form"]["Location"].value;
    var g = document.forms["Form"]["Description"].value;
	var h= document.forms["Form"]["pic"].value;

 count=0;
 text="Please Fill ";
 count1=0;
 text1="";

    if (a === null || a === ""){
	text+="Property Name, ";
	count++;}
	if (d === null || d === "" ){
	text+="Nubmer of , ";
	count++;}
	if (e === null || e === ""){
	text+="Rent, ";
	count++;}
	if (b === null || b === ""){
	text+="Category, ";
	count++;}
	if (h=== null || h === "" ){
   text+="Photo, ";
	count++;}
	
	if (c === null || c === ""){
	text+="Number of Rooms, ";
	count++;}
	 if (f === null || f === ""){
	text+="Location, ";
	count++;}
	 if (g === null || g === ""){
	text+="Description, ";
	count++;}

	if (a.startsWith("0") || a.startsWith("1")|| a.startsWith("2")|| a.startsWith("3")|| a.startsWith("9")|| a.startsWith("4")|| a.startsWith("5")|| a.startsWith("6")|| a.startsWith("7")|| a.startsWith("8"))
	{text1+="\nName field cannot start with numbers";
count1++;}

if(d<0 || c<0){
    text1+="\nNumbers cannot be negtive";
    count1++;
}
    	
	
  
  
  
  if(count>0 || count1>0) {
  if(count>0)
  alert(text+"Thank you");
  if(count1>0)
	  alert(text1);
  }

  }
