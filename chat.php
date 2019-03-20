<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style23.css">
<title>Chatbot</title>
<style  >
body { 
	color: #ffffff; font-weight: bold; font-size: 68px; background:rgb(120, 120, 120); 
	background-image: url('robot1.jpg');  background-repeat: repeat-x;


}
span { 
	color: #711; 
} 
::-webkit-input-placeholder { 
	color: #711 
}
#main { 
	position: fixed;  top: 20; right: 0%; width: 600px; 
	border: 0px solid #421; padding: 40px ; 
}
#main div { 
	margin: 10px ; 
} 
#input { 
	border: 10; background: #EBE547; padding: 25px; border: 10px solid #499 display:inline-block; font-size: 38px; 

}
#myVideo {
    position: fixed;
    left:  0;
    bottom: 0;
    max-height: 92.7%;
    min-width: 45%; 
     

}

#myVideo1 {
    position: fixed;
    right: 0;
    top: 20;
    bottom: 0;
    min-width: 50%; 
    max-height: 10%;
}
</style>
</head>
<body >	
	<?php include 'menu.php'; ?>
	<img src="constr.gif"  autoplay muted loop id="myVideo">
 
 
</video>


<video autoplay muted loop id="myVideo1">
  <source src="cat
  .mp4" type="video/mp4">
 
</video>
<div id="main" align="center">
	<div>user: <span id="user" ></span></div>
	<div style="margin-top: 40px;">chatbot: <span id="chatbot"  ></span></div>
	<div align="center" style="margin-top: 55px; margin-left: 60px;"><input id="input" type="text" placeholder="say anything..." autocomplete="off"/></div>
</div>
<script type="text/javascript">
var trigger = [
	["hi","hey","hello","hii"], 
	["when lab external starts"],
	["how are you", "how is life", "how are things"],
	["what are the exam dates","exam","exam dates"],
	["College Timings","college timings"],
	["Courses Offered","courses offered"],
	["placements","placement"],
	["ranking"],
	["where do you live"],
	["what are you doing", "what is going on"],
	["how old are you"],
	["who are you", "are you human", "are you bot", "are you human or bot"],
	["who created you", "who made you"],
	["your name please",  "your name", "may i know your name", "what is your name"],
	["i love you","love you","i love you a lot"],
	["happy", "good"],
	["bad", "bored", "tired"],
	["help me", "tell me story", "tell me joke"],
	["ah", "yes", "ok", "okay", "nice", "thanks", "thank you"],
	["bye", "good bye", "goodbye", "see you later"]
];
var reply = [
	["Hi","Hey","Hello"], 
	["starts from 1st December to 14th December"],
	["Fine", "Pretty well", "Fantastic"],
	["20,21,22 November"],
	["8:30 to 4:10"],
	["CSE,ECE,MECH,ISE,EEE"],
	["ABOUT 90% of the students get placed in various companies like Accenture,Infosys and Cognizant"],
	["Placed in top 10 colleges in Vtu karnataka"],
	["I like to live in clouds"],
	["Nothing much", "About to go to sleep", "Can you guest?", "I don't know actually"],
	["I am 1 day old"],
	["I am just a bot", "I am a bot. What are you?"],
	["Ravi ", "My God"],
	["I am nameless", "I don't have a name"],
	["I love you too", "Me too"],
	["Have you ever felt bad?", "Glad to hear it"],
	["Why?", "Why? You shouldn't!", "Try watching TV"],
	["I will", "What about?"],
	["Tell me a story", "Tell me a joke", "Tell me about yourself", "You are welcome"],
	["Bye", "Goodbye", "See you later"]
];
var alternative = ["I don't know..."];
document.querySelector("#input").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("input").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			var product = alternative[Math.floor(Math.random()*alternative.length)];
		}
	}
	document.getElementById("chatbot").innerHTML = product;
	speak(product);
	document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
</script>
</body>
</html>