function _(query){
  return document.querySelector(query);
  }
  function _all(query){
  return document.querySelectorAll(query);
  }
  let songList = [
  {
  
  
      audio:"soha.mp3",
      songname:"",
      artistname:""
  
  },
      {
          audio:"soha.mp3",
          songname:"bird",
          artistname:"soha"
  
  
      }
  ];
  
  let currentSongIndex = 0;
  
  let player = _(".player"),
  toggleSongList = _(".player .toggle-list");
  
  let main = {
  audio:_(".player .main audio"),
  
  seekbar:_(".player .main input"),
  // songname:_(".player .main .details h2"),
  // artistname:_(".player .main .details p"),
  prevControl:_(".player .main .controls .prev-control"),
  playPauseControl:_(".player .main .controls .play-pause-control"),
  nextControl:_(".player .main .controls .next-control")
  }
  
  toggleSongList.addEventListener("click", function(){
  toggleSongList.classList.toggle("active");
  player.classList.toggle("activeSongList");
  });
  
  _(".player .player-list .list").innerHTML = (songList.map(function(song,songIndex){
  return `
      <div class="item" songIndex="${songIndex}">
        
          <div class="details">
             
          </div>
      </div>
  `;
  }).join(""));
  
  let songListItems = _all(".player .player-list .list .item");
  for(let i=0;i<songListItems.length;i++){
  songListItems[i].addEventListener("click",function(){
      currentSongIndex = parseInt(songListItems[i].getAttribute("songIndex"));
      loadSong(currentSongIndex);
      player.classList.remove("activeSongList");
  });
  }
  
  
  
  function loadSong(songIndex){
  let song = songList[songIndex];
  // main.songname.innerText = song.songname;
  // main.artistname.innerText = song.artistname;
  main.audio.setAttribute("src","assets/audio/"+song.audio);
  main.seekbar.setAttribute("value",0);
  main.seekbar.setAttribute("min",0);
  main.seekbar.setAttribute("max",0);
  main.audio.addEventListener("canplay",function(){
      main.audio.play();
      if(!main.audio.paused){
          main.playPauseControl.classList.remove("paused");
          reset();
      }
      main.seekbar.setAttribute("max",parseInt(main.audio.duration));
      main.audio.onended = function(){
          main.nextControl.click();
      }
  })
  }
  
  
  
  
  setInterval(function(){
  main.seekbar.value = parseInt(main.audio.currentTime);
  },1000);
  
  main.prevControl.addEventListener("click",function(){
  currentSongIndex--;
  if(currentSongIndex < 0){
      currentSongIndex = songList.length + currentSongIndex;
  }
  loadSong(currentSongIndex);
  });
  main.nextControl.addEventListener("click",function(){
  currentSongIndex = (currentSongIndex+1) % songList.length;
  loadSong(currentSongIndex);
  });
  main.playPauseControl.addEventListener("click",function(){
  if(main.audio.paused){
      main.playPauseControl.classList.remove("paused");
      main.audio.play();
      start();
  } else {
      main.playPauseControl.classList.add("paused");
      main.audio.pause();
      pause();
  }
  });
  main.seekbar.addEventListener("change",function(){
  main.audio.currentTime = main.seekbar.value;
  });
  loadSong(currentSongIndex);
  
  
  
  
  
  
  $(document).ready(function() {
      if ($("div").prop('muted', false)){
      $("#mute").attr('class', 'fas fa-volume-up');
      main.audio.play();
    }
  
  $("#mute").click( function (){
    if( $("div").prop('muted') ) {
      $("div").prop('muted', false);
      $("#mute").attr('class', 'fas fa-volume-up');
      main.audio.play();
  
    } else {
      $("div").prop('muted', true);
      $("#mute").attr('class', 'fas fa-volume-mute');
      main.audio.pause();
    }
  });
  });
  
  
  
  
  // time srart 
  
  
  
  
  
  
  "use strict";
  
  let hour = 0;
  let minute = 0;
  let second = 0;
  let millisecond = 0;
  
  let cron;
  
  
  document.form_main.start.onclick = () => start();
  document.form_main.pause.onclick = () => pause();
  document.form_main.reset.onclick = () => reset();
  
  function start() {
    pause();
    cron = setInterval(() => { timer(); }, 10);
  }
  
  function pause() {
    clearInterval(cron);
  }
  
  function reset() {
    hour = 0;
    minute = 0;
    second = 0;
    millisecond = 0;
    document.getElementById('minute').innerText = '00';
    document.getElementById('second').innerText = '00';
  }
  
  function timer() {
    if ((millisecond += 10) == 1000) {
      millisecond = 0;
      second++;
    }
    if (second == 60) {
      second = 0;
      minute++;
    }
    if (minute == 60) {
      minute = 0;
      hour++;
    }
    document.getElementById('minute').innerText = returnData(minute);
    document.getElementById('second').innerText = returnData(second);
  }
  
  function returnData(input) {
    return input > 10 ? input : `0${input}`
  }
  
  
  
  