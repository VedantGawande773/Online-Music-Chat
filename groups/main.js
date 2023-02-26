var data = [
    [1,'Faded','Alan Walker'],
    [2,'Believer','Imagine Dragons'],
    [3,'Shape of You','Ed Sheeran']
]

var curr = 1;
var song_mp3 = new Audio('songs/1.mp3');
var song_poster;
var song_name;
var song_artist;
var isPlaying = false;

function song_play(song_id){
    song_mp3.pause();
    curr = song_id;
    isPlaying = true;
    song_mp3 = new Audio('songs/'+ song_id +'.mp3');
    song_mp3.play();
    song_poster = document.querySelector('#song_poster');
    song_poster.innerHTML = '<img src="poster/'+song_id+'.png">';
    song_name = document.querySelector('#song_name');
    song_name.innerHTML = data[song_id - 1][1];
    song_artist = document.querySelector('#song_artist');
    song_artist.innerHTML = data[song_id - 1][2];

}

function song_pause(){
    if(isPlaying == false){
        song_mp3.play();
        isPlaying = true;
    }
    else{
        song_mp3.pause();
        isPlaying = false;
    }
}

function song_repeat(){
    song_mp3.pause();
    song_mp3.currentTime = 0;
    song_mp3.play();
}

function song_skip(){
    song_mp3.pause();
    song_mp3.currentTime += 5;
    song_mp3.play();
}

