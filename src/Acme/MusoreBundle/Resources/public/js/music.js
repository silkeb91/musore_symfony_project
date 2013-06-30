init()
function init(){
    var artist = "{{ album.product.artist.name }}".toLowerCase();
    var current = 1;
    var previewLink = "{{ album.albumTracks[1].single.previewLink }}";
    var link = 'bundles/acmemusore/' + "music_preview/" + artist + "/" + previewLink;

    alert(link);
    var song = new Audio(link);

    var container = $('.container');
    var mute = $('#previous');
    var muted = $('#next');

    var duration = song.duration;

    checkSong(song, fullLink);
}

function checkSong(song, fullLink){
    if (song.canPlayType('audio/mpeg;')) {
        song.type= 'audio/mpeg';
        song.src= fullLink;

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
