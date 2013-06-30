$(document).ready(init);
function init(){
    album = "";
    link = "";

    container = $('.container');
    mute = $('#previous');
    muted = $('#next');

    duration = song.duration;

    checkSong();
}
song = new Audio('music_preview/agnus%20&%20julia%20stone/big_jet_plane.mp3');

function checkSong(){
    if (song.canPlayType('audio/mpeg;')) {
        song.type= 'audio/mpeg';
        song.src= 'music_preview/agnus%20&%20julia%20stone/big_jet_plane.mp3';

    } else {
        alert("mislukt");
    }

    $('#play').click(function(e) {
        e.preventDefault();
        song.play();

        $(this).replaceWith('<a class="button" id="pause" href="" title="">||</a>');
        $('#seek').attr('max',song.duration);
    });

    $("#seek").bind("change", function() {
        song.currentTime = $(this).val();
        $("#seek").attr("max", song.duration);
    });

    song.addEventListener('timeupdate',function (){
        curtime = parseInt(song.currentTime, 10);
        $("#seek").attr("value", curtime);
    });

    $("#pause").click(function(e){
        e.preventDefault();
        alert(parseInt(song.currentTime, 10));
        curtime = parseInt(song.currentTime, 10);
        song.pause();
        alert(parseInt(song.currentTime, 10));
        $(this).replaceWith('<a class="button" id="play" href="" title=""></a>');
        $('#seek').attr('max',song.duration);
    });
}



