<link rel="stylesheet" href="./projectcss/music.css">
<title>Mini Project</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<div class="player">
    <div class="header">
        Music <span>Player</span>
    </div>
    <div class="img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHH_mk1W1dmMF63_Zo1Bf3PHF0xTwdFNzEhA&usqp=CAU"
            id="thumb">
    </div>
    <div class="details">
        <h3 id="title"></h3>
        <p id="musician"></p>
    </div>
    <audio id="song">
        <source href="music.mp3" type="audio/mp3">
        </source>
    </audio>

    <div class="time">
        <span id="start">0:00</span>
        <span id="end">4:33</span>
    </div>
    <input type="range" id="progress" value="0">

    <div class="action">

        <button onclick="prevPlay()">
            <i class="bx bx-skip-previous"></i>
        </button>

        <button onclick="playPause()" class="play" id="play">
            <i class="bx bx-play"></i>
        </button>

        <button onclick="nextPlay()">
            <i class="bx bx-skip-next"></i>
        </button>

    </div>


    <script src="./projectscript/music.js"></script>