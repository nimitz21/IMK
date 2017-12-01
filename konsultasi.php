<?php
    include 'nav.html'  
?>

<link rel="stylesheet" href="css\konsultasi.css">

<div id="wrapper">
    <div id="menu">
    		<p class="konsultasi"><b>Konsultasi</b></p>
        <p class="logout"><a id="exit" href="selesaiKonsultasi.php" onclick="finishConsultation();"><b>X</b></a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
    	<div>
        <p class="chat botBubble">
            <b class="bot-chat">Lisa: </b>Halo, nama saya Lisa.<br>
            Saya adalah chatbot yang akan membantu anda dalam mengetahui penyakit yang mungkin anda derita.<br>
            Anda bisa memulai dengan menyebutkan gejala-gejala yang anda alami.<br>
            Untuk mulai menambahkan gejala, silahkan ketikkan "tambah gejala".<br>
            Untuk mengetahui penyakit, silahkan ketikkan "lihat hasil".<br>
            Untuk berhenti dan menutup chatroom, tekan tombol "X" di pojok kanan atas<br>
            <br>
            <span class="option" onclick="chooseOption('tambah gejala');"> -> Tambah Gejala</span><br>
        </p>
      </div>
    </div>
     
    <form class="message-box" onsubmit="return addChat();">
        <input name="usermsg" type="text" id="usermsg" size="63" autocomplete="off" autofocus />
        <input id="submit" name="submitmsg" type="submit" id="submitmsg" value="Send"/>
    </form>
</div>

</body>
</html>

<script type="text/javascript">
    var msgBox = document.getElementById("usermsg");
    var chatBox = document.getElementById("chatbox"); 
    var tambahGejala = false;
    var gejalaCount = 0;
    var gejala = [];

    function replyChat(chat) {
    	var reply;
        var replyNum = Math.floor(Math.random() * 2);
    	if (!tambahGejala) {
    		if (chat.toLowerCase() == "tambah gejala") {
	    		tambahGejala = true;
	    		reply = "Masukkan gejala yang Anda alami satu per satu.";
	    	} else if (chat.toLowerCase() == "lihat hasil") {
                if (replyNum == 0) {
                    reply = "Tambah gejala terlebih dahulu."
                } else {
                    reply = "Anda belum menambahkan gejala."
                }
	    		reply += "<br><br><span class=\"option\" onclick=\"chooseOption('tambah gejala')\";> -> Tambah gejala</span>";
	    	} else {
                if (replyNum == 0) {
                    reply = "Saya tidak mengenali perintah tersebut."
                } else {
                    reply = "Saya tidak mengerti maksud Anda."
                }
	    		reply += "<br> Untuk mulai menambahkan gejala, silahkan ketikkan \"tambah gejala\".<br> Untuk mengetahui penyakit, silahkan ketikkan \"lihat hasil\".<br>Untuk berhenti dan menutup chatroom, tekan tombol \"X\" di pojok kanan atas<br><br><span class=\"option\" onclick=\"chooseOption('tambah gejala')\";> -> Tambah gejala</span>";
	    	}
    	} else {
    		if (chat.toLowerCase() == "lihat hasil") {
    			tambahGejala = false;
    			var i = 0;
    			while (i < gejala.length && (gejala[i].toLowerCase() == "perut panas" || gejala[i].toLowerCase() == "mual" || gejala[i].toLowerCase() == "kembung" || gejala[i].toLowerCase() == "sendawa" || gejala[i].toLowerCase() == "muntah")) {
    				++i;
    			}
    			console.log(i);
    			if (i == gejala.length) {
                    if (replyNum == 0) {
                        reply = "Berdasarkan gejala yang diberikan, penyakit yang mungkin anda derita adalah:";
                    } else {
                        reply = "Menurut analisis, Anda mungkin menderita penyakit sebagai berikut:";
                    }
    				reply += "<br>1. Maag<br><br><span class=\"option\" onclick=\"chooseOption('tambah gejala')\";> -> Tambah gejala</span>" 
    			} else {
                    if (replyNum == 0) {
                        reply = "Saya tidak mengetahui penyakit dengan gejala-gejala yang anda berikan.";    
                    } else {
                        reply = "Saya tidak mengenali penyakit dengan gejala-gejala seperti itu"
                    }
                    gejalaCount = 0;
                    gejala = [];
    			}
    		} else {
    			gejala[gejalaCount] = chat; 
    			++gejalaCount;
    			reply= "Gejala " + gejalaCount + ":<br>" + chat + "<br><br><span class=\"option\" onclick=\"chooseOption('lihat hasil')\";> -> Lihat hasil</span>";
    		}
    	}
    	chatBox.innerHTML += "<div><p class='chat botBubble'><b class='bot-chat'>Lisa: </b>" + reply + "<br></p></div>";
    }

    function addChat() {
        if (msgBox.value != "") {
            chatBox.innerHTML += "<div><p class='chat myBubble'><b class='my-chat'>Saya: </b>" + msgBox.value + "<br></p></div>";
            replyChat(msgBox.value);
            chatbox.scrollTop = chatbox.scrollHeight;
            msgBox.value = "";
        }
        return false;
    }

    function finishConsultation() {
    	var answer = confirm("Apakah Anda yakin ingin menyelesaikan konsultasi?");
    	return answer;
    }

    function chooseOption(option) {
        chatBox.innerHTML += "<div><p class='chat myBubble'><b class='my-chat'>Saya: </b>" + option + "<br></p></div>";
        replyChat(option);
        chatbox.scrollTop = chatbox.scrollHeight;
    }
</script>