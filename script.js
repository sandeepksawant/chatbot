function sendMsg(){
let msg = document.getElementById("msg").value;
if(msg=="") return;

document.getElementById("chat").innerHTML += "<b>You:</b> "+msg+"<br>";

fetch("chat.php",{
method:"POST",
headers:{'Content-Type':'application/x-www-form-urlencoded'},
body:"message="+msg
})
.then(res=>res.text())
.then(data=>{
document.getElementById("chat").innerHTML += "<b>Bot:</b> "+data+"<br>";
});

document.getElementById("msg").value="";
}
