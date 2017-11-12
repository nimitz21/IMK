<?php
    include 'nav.html'  
?>

<link rel="stylesheet" href="css\konsultasi.css">

<div id="wrapper">
    <div id="menu">
        <p class="logout"><a id="exit" href="#"><b>X</b></a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
        <p class="chat">
            <b class="bot-chat">Lisa: </b>Halo, nama saya Lisa.<br>
            Saya adalah chatbot yang akan membantu anda dalam mengetahui penyakit yang mungkin anda derita.<br>
            Anda bisa memulai dengan menyebutkan gejala-gejala yang anda alami.<br>
        </p>
    </div>
     
    <form class="message-box" action="" onsubmit="return addChat();">
        <input name="usermsg" type="text" id="usermsg" size="63" autocomplete="off" autofocus />
        <input id="submit" name="submitmsg" type="submit" id="submitmsg" value="Send"/>
    </form>
</div>

</body>
</html>

<script type="text/javascript">
    var i = 0;
    var botChat = [];
    botChat[0] = "Saya belum bisa mendiagnosa penyakit yang mungkin anda idap karena gejala yang anda sebutkan terlalu sedikit. Tolong tambahkan gejala lainnya.";
    botChat[1] = "Penyakit yang mungkin anda idap adalah maag. Apakah ada gejala lain yang ingin anda tambahkan?";
    botChat[2] = "Gejala-gejala anda sebutkan tidak sesuai dengan penyakit-penyakit yang saya ketahui. Mohon datang ke klinik untuk didiagnosa dokter secara langsung.";
    botChat[3] = "Terima kasih. Jika anda memiliki kritik dan saran silahkan menghubungi kami di poliklinikdear@gmail.com.";
    var msgBox = document.getElementById("usermsg");
    var chatBox = document.getElementById("chatbox"); 

    function addChat() {
        if (msgBox.value != "") {
            chatBox.innerHTML += "<p class='chat'><b class='my-chat'>Saya: </b>" + msgBox.value + "<br></p>";
            chatbox.scrollTop = chatbox.scrollHeight;
            msgBox.value = "";
            chatBox.innerHTML += "<p class='chat'><b class='bot-chat'>Lisa: </b>" + botChat[i] + "<br></p>";
            ++i;
        }
        return false;
    }
</script>