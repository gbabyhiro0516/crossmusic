<?php

   #code

$(function() {
    var $clickable = $('.ripple');

    $clickable.on('mousedown', function(e) {
        var _self   = this;
        var x       = e.offsetX;
        var y       = e.offsetY;

        var $effect = $(_self).find('.ripple__effect');
        var w       = $effect.width();
        var h       = $effect.height();

        $effect.css({
            left: x - w / 2,
            top: y - h / 2
        });

        if (!$effect.hasClass('is-show')) {
            $effect.addClass('is-show');
            setTimeout(function() {
                $effect.removeClass('is-show');
            }, 750);
        }
        return false;
    });
});

$("#search-btn").click(function() {
    var searchForm = document.getElementById("search-form") ;
    searchForm.id = "searchFocus" ;
    var searchBtn = document.getElementById("search-btn") ;
    searchBtn.id = "searchFocus1" ;
});

document.getElementById("home").style.display = "block";
document.getElementById("search").style.display = "none";
document.getElementById("library").style.display = "none";
document.getElementById("premium").style.display = "none";
document.getElementById("question").style.display = "block";
document.getElementById("result").style.display = "none";
document.getElementById("look").style.display = "none";
document.getElementById("related").style.display = "none";
document.getElementById("lyric").style.display = "none";
document.getElementById("result2").style.display = "none";
document.getElementById("result1").style.display = "none";
document.getElementById("artist-look").style.display = "none";

function home() {
    document.getElementById("home").style.display = "block";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "block";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";
}
function search() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "block";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "block";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    var target2 = document.getElementById("searchFocus2");
    target2.value = "";
}
function library() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "block";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "block";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";
}
function premium() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "block";
    document.getElementById("question").style.display = "block";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";
}
function artistLook(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "block";
    document.getElementById("artist-look").innerHTML = '<i onclick="home()" class="fas fa-arrow-left" title="戻る" style="position: absolute;left: 10px;top: 10px;font-size: 20px;color: #419be0"></i><div id="artist-inner"></div>';

    if (clicked_id == '00001') {
        document.getElementById("artist-inner").innerHTML = '<div style="width: 100%;height: 380px;"><img src="https://e-cdns-images.dzcdn.net/images/artist/f4daf253b92a1a9646844c5162e2a968/300x300.jpg" style="width: 100%;height: 380px;"><h1 style="color: white;text-align: center;margin-top: -150px;font-size: 40px;font-family:"MS Pゴシック",sans-serif;">Ed Sheeran</h1><p style="text-align: center;"><input type="button" style="margin-top: -10px;" title="search" value="フォロー" id="library-btn"></p></div><div style="margin-top: 40px;"><h3 style="margin-left: 2%;">人気曲</h3><div style="margin-left: 10px;margin-top: -25px;" id="result1-artist"></div><div style="margin-left: 10px;margin-top: 10px;width: 96%;"><h3>Ed Sheeranとは</h3><p>Ed Sheeranは、イギリスのシンガーソングライターです。ルーパーとアコースティックギターを用いる演奏を得意とし、多くの人を魅了しました。代表曲は、Shape of youです。</p></div><br><br><br></div>';

        searchWordArtist({term: 'Ed Sheeran',limit: 7});
    }if (clicked_id == '00002') {
        document.getElementById("artist-inner").innerHTML = '<div style="width: 100%;height: 370px;"><img src="https://pbs.twimg.com/profile_images/1192953833011339266/EOyF-epb_400x400.jpg" style="width: 100%;height: 370px;"><h1 style="color: white;text-align: center;margin-top: -150px;font-size: 40px;font-family:"MS Pゴシック",sans-serif;">YOASOBI</h1><p style="text-align: center;"><input type="button" style="margin-top: -10px;" title="search" value="フォロー" id="library-btn"></p></div><div style="margin-top: 15px;"><h3 style="margin-left: 40px;">人気曲</h3><div style="margin-left: 10px;margin-top: -25px;" id="result1-artist"></div><div style="margin-left: 10px;margin-top: 10px;width: 96%;"><h3>YOASOBIとは</h3><p>YOASOBIは、Ayuseとikuraこと幾多りらによる音楽ユニットです。小説を音楽にするという新しい曲の作り方で多くの人の支持を集めています。代表曲は、夜に駆けるです。</p></div><br><br><br></div>';

        searchWordArtist({term: 'YOASOBI',limit: 7});
    }if (clicked_id == '00003') {
        document.getElementById("artist-inner").innerHTML = '<div style="width: 100%;height: 380px;"><img src="https://pbs.twimg.com/profile_images/1345808029116108800/ZWLT25o9.jpg" style="width: 100%;height: 380px;"><h1 style="color: white;text-align: center;margin-top: -150px;font-size: 40px;font-family:"MS Pゴシック",sans-serif;">菅田将暉</h1><p style="text-align: center;"><input type="button" style="margin-top: -10px;" title="search" value="フォロー" id="library-btn"></p></div><div style="margin-top: 40px;"><h3 style="margin-left: 10px;">人気曲</h3><div style="margin-left: 10px;margin-top: -25px;" id="result1-artist"></div><div style="margin-left: 10px;margin-top: 10px;width: 96%;"><h3>菅田将暉とは</h3><p>菅田将暉は、日本の歌手です。「まちがいさがし」や「星を仰ぐ」などのヒット曲を出しました。代表曲は、さよならエレジーです。</p></div><br><br><br></div>';

        searchWordArtist({term: '菅田将暉',limit: 7});
    }if (clicked_id == '00004') {
        document.getElementById("artist-inner").innerHTML = '<div style="width: 100%;height: 370px;"><img src="http://www.hanpen-blog.com/wp-content/uploads/2018/04/20180415003344-1.jpg" style="width: 100%;height: 370px;"><h1 style="color: white;text-align: center;margin-top: -150px;font-size: 40px;font-family:"MS Pゴシック",sans-serif;">Maroon5</h1><p style="text-align: center;"><input type="button" style="margin-top: -10px;" title="search" value="フォロー" id="library-btn"></p></div><div style="margin-top: 40px;"><h3 style="margin-left: 10px;">人気曲</h3><div style="margin-left: 10px;margin-top: -25px;" id="result1-artist"></div><div style="margin-left: 10px;margin-top: 10px;width: 96%;"><h3>Maroon5とは</h3><p>Maroon5は、アメリカ合衆国カリフォルニア州ロサンゼルスで結成されたバンドです。世界中の人に愛され、「世界で最も売れたアーティスト集団」と呼ばれるようになりました。代表曲は、Sugarです。</p></div><br><br><br></div>';

        searchWordArtist({term: 'Maroon5',limit: 7});
    }if (clicked_id == '00005') {
        document.getElementById("artist-inner").innerHTML = '<div style="width: 100%;height: 390px;"><img src="https://2xmlabs.com/wp-content/uploads/2018/03/5hbCvODm_400x400.jpg" style="width: 100%;height: 390px;"><h1 style="color: white;text-align: center;margin-top: -150px;font-size: 40px;font-family:"MS Pゴシック",sans-serif;">星野源</h1><p style="text-align: center;"><input type="button" style="margin-top: -10px;" title="search" value="フォロー" id="library-btn"></p></div><div style="margin-top: 40px;"><h3 style="margin-left: 10px;">人気曲</h3><div style="margin-left: 10px;margin-top: -25px;" id="result1-artist"></div><div style="margin-left: 10px;margin-top: 10px;width: 96%;"><h3>星野源とは</h3><p>星野源は、日本のシンガーソングライターです。「SUN」や、「アイデア」は、広い世代に好まれました。代表曲は、恋です。</p></div><br><br><br></div>';

        searchWordArtist({term: '星野源',limit: 7});
    }
}

var searchWordArtist = function getInfo(options) {
    var params = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };
        
    if (options && options.term) {
        params.term = options.term;
    }
        
    if (options && options.limit) {
        params.limit = options.limit;
    }
          
    $.ajax({
        url: 'https://itunes.apple.com/search',
        method: 'GET',
        data: params,
        dataType: 'jsonp',
            
        success: function(json) {
            showDataArtist(json);
        }
    });
};

function showDataArtist(json) {

    if (json.results.length != 0) {
        var result1Artist = document.getElementById("result1-artist");
        html = '<br>'
                
        for (var i = 0, len = json.results.length; i < len; i++) {
            var resultWord = json.results[i];
        
            html += '<div style="width: 96%;height: 80px;margin-top: 10px;" id=' + resultWord.trackId + ' onclick="view(this.id)">';
            html += '<img style="width: 80px;height: 80px;" src="' + resultWord.artworkUrl100 + '"><br>';
            html += '<div style="margin-left: 110px;margin-top: -100px;"><h4 class="track-title" style="font-weight: 90;">' + resultWord.trackName + '</h4>';
            html += '<h4 style="color: rgb(105, 105, 105);margin-top: -15px;font-weight: 90;" class="track-title">' + resultWord.artistName + '</h4>';
            html += '</div></div>';
        }
        html += '<br><br><br>';
    }
    result1Artist.innerHTML = html;
}

document.onkeypress = enter;
function enter(){
    if( window.event.keyCode == 13 ){
        var target1 = document.getElementById("searchFocus1");
        var word1 = target1.value;
        target1.value = "";
        if(word1 == "") {
            var target2 = document.getElementById("searchFocus2");
            var word2 = target2.value;
            searchWord({term: word2,limit: 20});

            $('#result2').html('');

            var input = '<h2 style="margin-left: 10px;margin-top: 70px;">検索結果</h2><button type="button" id="btn-video" class="ripple" style="float: left;color: white;border: none;" onclick="songLook()">Songs<span class="ripple__effect is-black"></span></button><button type="button" id="btn-video" class="ripple" style="float: left;margin-left: 20px;color: #419be0;border: solid 1px #419be0;border-top: none;border-left: none;border-right: none;">Videos<span class="ripple__effect is-black"></span></button><br><br>';
            $('#result2').append(input);

            $.get(
                "https://www.googleapis.com/youtube/v3/search",{
                part: 'snippet, id',
                q: word2 + 'official video',
                type:'video',
                key: 'AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0'},
                function(data){                
                    $.each(data.items, function(i, item){
                        var output = searchWordVideo(item);
                        $('#result2').append(output);
                    });
                }
            );
        }else {
            var target2 = document.getElementById("searchFocus2");
            target2.value = word1;
            searchWord({term: word1,limit: 20});

            $('#result2').html('');

            var input = '<h2 style="margin-left: 10px;margin-top: 70px;">検索結果</h2><button type="button" id="btn-video" class="ripple" style="float: left;color: white;border: none;" onclick="songLook()">Songs<span class="ripple__effect is-black"></span></button><button type="button" id="btn-video" class="ripple" style="float: left;margin-left: 20px;color: #419be0;border: solid 1px #419be0;border-top: none;border-left: none;border-right: none;">Videos<span class="ripple__effect is-black"></span></button><br><br>';
            $('#result2').append(input);

            $.get(
                "https://www.googleapis.com/youtube/v3/search",{
                part: 'snippet, id',
                q: word1 + 'official video',
                type:'video',
                key: 'AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0'},
                function(data){
                    $.each(data.items, function(i, item){
                        var output = searchWordVideo(item);
                        $('#result2').append(output);
                    });
                }
            );
        }
    }
}

function searchWordVideo(item) {
    var title = item.snippet.title;
    var img = item.snippet.thumbnails.medium.url;
    var channelTitle = item.snippet.channelTitle;
    var videoId = item.id.videoId;

    var output = '<div style="width: 96%;height: 80px;margin-left: 2%;margin-top: 10px;" id=' + videoId + ' onclick="viewVideo(this.id)"><img style="width: 120px;height: 80px;" src="' + img + '"><br><div style="margin-left: 150px;margin-top: -100px;"><h4 class="video-title" style="font-weight: 90;">' + title + '</h4><h4 style="color: rgb(105, 105, 105);margin-top: -15px;font-weight: 90;" class="video-title">' + channelTitle + '</h4></div></div>';

    return output;
}


var searchWord = function getInfo(options) {
    var params = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };
        
    if (options && options.term) {
        params.term = options.term;
    }
        
    if (options && options.limit) {
        params.limit = options.limit;
    }
          
    $.ajax({
        url: 'https://itunes.apple.com/search',
        method: 'GET',
        data: params,
        dataType: 'jsonp',
            
        success: function(json) {
            showData(json);
        },

        error:function () {
            document.getElementById("home").style.display = "none";
            document.getElementById("search").style.display = "block";
            document.getElementById("library").style.display = "none";
            document.getElementById("premium").style.display = "none";
            document.getElementById("question").style.display = "none";
            document.getElementById("result").style.display = "block";
            document.getElementById("look").style.display = "none";
            document.getElementById("related").style.display = "none";
            document.getElementById("lyric").style.display = "none";
            document.getElementById("result2").style.display = "none";
            document.getElementById("result1").style.display = "block";
            document.getElementById("artist-look").style.display = "none";
            document.getElementById("result1").innerHTML = '<i onclick="home()" class="fas fa-arrow-left" title="戻る" style="margin-left: 10px;margin-top: 10px;float: left;font-size: 20px;color: white;"></i><p style="margin-left: 10px;margin-top: 20px;">インターネット接続がありません。</p>';
        }
    });
};

function past_result() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "block";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "block";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "block";
    document.getElementById("artist-look").style.display = "none";
}
        
function showData(json) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "block";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "block";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result1").style.display = "block";
    document.getElementById("result2").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    if (json.results.length != 0) {
        var result1 = document.getElementById("result1");
        html = '<h2 style="margin-left: 10px;margin-top: 70px;">検索結果</h2>';
        html += '<button type="button" id="btn-video" class="ripple" style="float: left;color: #419be0;border: solid 1px #419be0;border-top: none;border-left: none;border-right: none;">Songs<span class="ripple__effect is-black"></span></button>';
        html += '<button type="button" onclick="videoLook()" id="btn-video" class="ripple" style="float: left;margin-left: 20px;color: white;border: none;">Videos<span class="ripple__effect is-black"></span></button><br><br>';
                
        for (var i = 0, len = json.results.length; i < len; i++) {
            var resultWord = json.results[i];
        
            html += '<div style="width: 96%;height: 80px;margin-left: 2%;margin-top: 10px;" id=' + resultWord.trackId + ' onclick="view(this.id)">';
            html += '<img style="width: 80px;height: 80px;" src="' + resultWord.artworkUrl100 + '"><br>';
            html += '<div style="margin-left: 110px;margin-top: -100px;"><h4 class="track-title" style="font-weight: 90;">' + resultWord.trackName + '</h4>';
            html += '<h4 style="color: rgb(105, 105, 105);margin-top: -15px;font-weight: 90;" class="track-title">' + resultWord.artistName + '</h4>';
            html += '</div></div>';
        }
        html += '<br><br><br>';
    }
    result1.innerHTML = html;
}

function videoLook() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "block";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "block";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("result2").style.display = "block";
    document.getElementById("artist-look").style.display = "none";
}

function songLook() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "block";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "block";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "block";
    document.getElementById("artist-look").style.display = "none";
}

function view(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "block";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    var view_song = 'https://itunes.apple.com/lookup?id=' + clicked_id;
    var parts = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };

    $.ajax({
        url: view_song,
        method: 'GET',
        data: parts,
        dataType: 'jsonp',
                
        success: function(json) {
            looks(json);
        },
        error:function () {
            document.getElementById("home").style.display = "none";
            document.getElementById("search").style.display = "none";
            document.getElementById("library").style.display = "none";
            document.getElementById("premium").style.display = "none";
            document.getElementById("question").style.display = "none";
            document.getElementById("result").style.display = "none";
            document.getElementById("look").style.display = "block";
            document.getElementById("related").style.display = "none";
            document.getElementById("lyric").style.display = "none";
            document.getElementById("result2").style.display = "none";
            document.getElementById("result1").style.display = "none";
            document.getElementById("artist-look").style.display = "none";
            document.getElementById("look").innerHTML = '<i onclick="past_result()" class="fas fa-arrow-left" title="戻る" style="margin-left: 10px;margin-top: 10px;float: left;font-size: 20px;color: white;"></i><p style="color: white;margin-left: 10px;margin-top: 10px;">インターネット接続がありません。</p>';
        }
    });
}

function looks(json) {
    if (json.results.length != 0) {
        html  = '<div>';
              
        for (var i = 0, len = json.results.length; i < len; i++) {
            var result = json.results[i];
            var look = document.getElementById("look"); 
            var sourceStr = result.artworkUrl100;
            var targetStr = "100x100bb.jpg";
            var regExp = new RegExp( targetStr, "g" ) ;
            var img = sourceStr.replace( regExp , "450x450bb.jpg" );

            html += '<i class="fas fa-arrow-left" style="margin: 10px;color: white;font-size: 20px;float: left;" onclick="past_result()"></i><i class="fas fa-ellipsis-h" style="margin-left: 305px;margin-top: 10px;color: white;font-size: 20px;float: left;" id="' + result.trackId + '" onclick="preview_song(this.id)"></i><br><br>';
            html += '<p style="text-align: center;"><img src="' + img + '" style="width: 320px;height: 320px;box-shadow: 2px 2px 10px black;"></p>';
            html += '<div style="width: 100%;"><h2 style="color: white;text-align: center;" id="title1">' + result.trackName + '</h2><h3 id="title1" style="color: rgb(105, 105, 105);text-align: center;margin-top: -15px;">' + result.artistName + '</h3>';
            html += '<div style="text-align: center;margin-top: 5px;"><div class="seek"><div class="fill"></div></div><div class="time">00:00 <span>/</span> 00:00</div>';
            html += '<div id="repeat-btns" style="margin-top: -5px;"><p style="text-align: center;"><span id="' + result.artistName + '" onclick="btn1(this.id)"><i class="fas fa-tv" style="margin:15px;font-size: 20px;"></i></span><span id="' + result.trackId + '" onclick="btn2(this.id)"><i style="margin:15px;font-size: 20px;" class="fas fa-microphone-alt"></i></span><span><button class="play-pause" id="play-pause" onclick="play()" style="margin: 15px"><i class="fa fa-play"></i></button></span><span onclick="btn3()"><i class="fas fa-star" style="margin: 15px;font-size: 20px;"></i></span><span id="' + result.trackViewUrl + '" onclick="btn4(this.id)"><i style="margin: 15px;font-size: 20px;" class="fas fa-download"></i></span></p></div>';
            html += '<br><br><br></div>';
            html += '<audio src="' + result.previewUrl + '" id="audio" style="display: none;"></audio>';
        }
        html += '</div>';
    }
    look.innerHTML = html;
}

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function viewVideo(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "block";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    $.get(
        "https://www.googleapis.com/youtube/v3/videos?id=" +clicked_id + "&key=AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0&part=snippet,contentDetails,statistics,status",{
            part: 'snippet, id'},
            function(data){
                $.each(data.items, function(i, item){
                    var title = item.snippet.title;
                    var channelTitle = item.snippet.channelTitle;

                    var videoInner = '<i class="fas fa-arrow-left" style="margin: 10px;color: white;font-size: 20px;float: left;" onclick="past_result()"></i><i class="fas fa-ellipsis-h" style="margin-left: 305px;margin-top: 10px;color: white;font-size: 20px;float: left;" id="' + clicked_id + '" onclick="preview_video(this.id)"></i><br><br><div id="videoInput" style="box-shadow: 2px 2px 10px black;margin-left: 3%;width: 94%;height: 270px;"></div><div style="width: 100%;"><h2 style="color: white;text-align: center;" id="title1">' + title + '</h2><h3 id="title1" style="color: rgb(105, 105, 105);text-align: center;margin-top: -15px;">' + channelTitle + '</h3><div style="text-align: center;margin-top: 5px;"><div class="seek"><div class="fill"></div></div><div class="time">00:00 <span>/</span> 02:00</div><div id="repeat-btns" style="margin-top: -5px;"><p style="text-align: center;"><span id="' + channelTitle + '" onclick="btn1Video(this.id)"><i class="fas fa-tv" style="margin:15px;font-size: 20px;"></i></span><span id="' + clicked_id + '" onclick="btn2Video(this.id)"><i style="margin:15px;font-size: 20px;" class="fas fa-microphone-alt"></i></span><span id="play"><button onclick="playVideo()" style="margin: 15px;"><i class="fa fa-play"></i></button></span><span onclick="btn3()"><i class="fas fa-star" style="margin: 15px;font-size: 20px;"></i></span><span id="' + clicked_id + '" onclick="btn4Video(this.id)"><i style="margin: 15px;font-size: 20px;" class="fas fa-download"></i></span></p></div><div id="repeat-btns1" style="margin-top: -5px;display: none;"><p style="text-align: center;"><span id="' + channelTitle + '" onclick="btn1(this.id)"><i class="fas fa-tv" style="margin:15px;font-size: 20px;"></i></span><span id="' + clicked_id + '" onclick="btn2(this.id)"><i style="margin:15px;font-size: 20px;" class="fas fa-microphone-alt"></i></span><span id="pause"><button onclick="pauseVideo()" style="margin: 15px;"><i class="fa fa-pause"></i></button></span><span onclick="btn3()"><i class="fas fa-star" style="margin: 15px;font-size: 20px;"></i></span><span id="' + clicked_id + '" onclick="btn4Video(this.id)"><i style="margin: 15px;font-size: 20px;" class="fas fa-download"></i></span></p></div><br><br><br></div>';
                    document.getElementById("look").innerHTML = videoInner;

                    ytPlayer = new YT.Player(
                        'videoInput',
                        {
                            videoId: clicked_id,
                            playerVars: {
                                controls: 0,
                                showinfo: 0,
                                end: 120
                            }
                        }
                    );

                });
            }
    );
}

function btn1Video(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "block";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    $('#related').html('');

    var input = '<i class="fas fa-arrow-left" title="戻る" style="margin-left: 10px;color: white;font-size: 20px;margin-top: 10px;" onclick="past_look()"></i><br><br><h2 style="margin-left: 10px;margin-top: 10px;">関連曲</h2>';
    $('#related').append(input);

    $.get(
        "https://www.googleapis.com/youtube/v3/search",{
        part: 'snippet, id',
        q: clicked_id + 'official video',
        type:'video',
        key: 'AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0'},
        function(data){
            $.each(data.items, function(i, item){
                var output = shows_related_video(item);
                $('#related').append(output);
            });
        }
    );
}

function shows_related_video(item) {
    var title = item.snippet.title;
    var img = item.snippet.thumbnails.medium.url
    var channelTitle = item.snippet.channelTitle;
    var videoDate = item.snippet.publishedAt;
    var videoId = item.id.videoId;

    var output = '<div style="width: 96%;height: 80px;margin-left: 2%;margin-top: 10px;" id=' + videoId + ' onclick="viewVideo(this.id)"><img style="width: 120px;height: 80px;" src="' + img + '"><br><div style="margin-left: 150px;margin-top: -100px;"><h4 class="video-title" style="font-weight: 90;">' + title + '</h4><h4 style="color: rgb(105, 105, 105);margin-top: -15px;font-weight: 90;" class="video-title">' + channelTitle + '</h4></div></div>';

    return output;
}

function btn2Video(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "block";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    $.get(
        "https://www.googleapis.com/youtube/v3/videos?id=" +clicked_id + "&key=AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0&part=snippet,contentDetails,statistics,status",{
            part: 'snippet, id'},
            function(data){
                $.each(data.items, function(i, item){
                    var title = item.snippet.title;
                    var channelTitle = item.snippet.channelTitle;
                    var img = item.snippet.thumbnails.medium.url;

                    var output = '<i class="fas fa-times" style="margin-left: 10px;color: white;font-size: 15px;margin-top: 10px;" onclick="past_look()"></i><div><p><img src="' + img + '" style="width: 110px;height: 70px;margin-left: 10px;margin-top: 5px;"></p><h4 id="title1" style="margin-left: 140px;margin-top: -90px;width: 150px;">' + title + '</h4><p id="title1" style="color: rgb(105, 105, 105);margin-left: 140px;margin-top: -13px;width: 150px;">' + channelTitle + '</p></div><div style="margin-top: 40px;margin-left: 10px;"><h1 style="color: white;">歌詞を取得できませんでした。</h1><h4 style="text-align: center;color: rgb(105, 105, 105);margin-top: 100px;">&copy;By Crossnet</h4></div>';

                    document.getElementById("lyric").innerHTML = output;
                });
            }
    );
}

function btn4Video(clicked_id) {
    window.open('https://www.youtube.com/watch?v=' + clicked_id, '_blank');
}

function playVideo() {
    ytPlayer.playVideo();
    document.getElementById("repeat-btns").style.display = "none";
    document.getElementById("repeat-btns1").style.display = "block";
}

function pauseVideo() {
    ytPlayer.pauseVideo();
    document.getElementById("repeat-btns").style.display = "block";
    document.getElementById("repeat-btns1").style.display = "none";
}

function preview_video(clicked_id) {
    $("#preview-box").fadeIn("fast"); 

    $.get(
        "https://www.googleapis.com/youtube/v3/videos?id=" +clicked_id + "&key=AIzaSyCNB-vTMEKDJx7JOIPh2LkgP3wQOEQVLg0&part=snippet,contentDetails,statistics,status",{
            part: 'snippet, id'},
            function(data){
                $.each(data.items, function(i, item){
                    var title = item.snippet.title;
                    var thumb = item.snippet.thumbnails.high.url;
                    var channelTitle = item.snippet.channelTitle;
                    var videoDate = item.snippet.publishedAt;
                    var viewCount = item.statistics.viewCount;
                    var likeCount = item.statistics.likeCount;

                    document.getElementById("preview-box").innerHTML = '<i class="fas fa-times" style="margin-left: 10px;color: white;font-size: 15px;margin-top: 10px;" onclick="not_preview_song()"></i><p style="color: white;text-align: center;margin-top: 10px;font-size: 25px;">' + title + '</p><p style="text-align: center;margin-top: 10px;"><img src="' + thumb + '" style="width: 190px;height: 150px;"></p><p style="text-align: center;">アーティスト名：　' + channelTitle + '</p><p style="text-align: center;">ID：　' + clicked_id + '</p><p style="text-align: center;">公開日：　' + videoDate + '</p><p style="text-align: center;">再生回数：　' + viewCount + '回</p><p style="text-align: center;">高評価数：　' + likeCount + '回</p>';
                });
            }
    );
}

function preview_song(clicked_id) {
    $("#preview-box").fadeIn("fast"); 

    var view_song = 'https://itunes.apple.com/lookup?id=' + clicked_id;
    var parts = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };

    $.ajax({
        url: view_song,
        method: 'GET',
        data: parts,
        dataType: 'jsonp',
                
        success: function(json) {
            thisPreviewSong(json);
        }
    });
}

function thisPreviewSong(json) {
    if (json.results.length != 0) {
        html  = '<div>';
              
        for (var i = 0, len = json.results.length; i < len; i++) {
            var result = json.results[i];
            var previewBox = document.getElementById("preview-box"); 
            var sourceStr = result.artworkUrl100;
            var targetStr = "100x100bb.jpg";
            var regExp = new RegExp( targetStr, "g" ) ;
            var img = sourceStr.replace( regExp , "250x250bb.jpg" );

            html += '<i class="fas fa-times" style="margin-left: 10px;color: white;font-size: 15px;margin-top: 10px;" onclick="not_preview_song()"></i><p style="color: white;text-align: center;margin-top: 10px;font-size: 25px;">' + result.trackName + '</p>';
            html += '<p style="text-align: center;margin-top: 10px;"><img src="' + img + '" style="width: 150px;height: 150px;"></p>';
            html += '<p style="text-align: center;">アーティスト名：　' + result.artistName + '</p>';
            html += '<p style="text-align: center;">収録アルバム：　' + result.collectionName + '</p>';
            html += '<p style="text-align: center;">ID：　' + result.trackId + '</p>';
            html += '<p style="text-align: center;">発売日：　'  + result.trackHdPrice + '</p>';
            html += '<p style="text-align: center;">価格：　' + result.trackPrice + '円</p>';
        }
        html += '</div>';
    }
    previewBox.innerHTML = html;
}

function not_preview_song() {
    $("#preview-box").fadeOut("fast"); 
}

function play() {
    const audio = document.getElementById("audio");
    const playPause  = document.getElementById("play-pause");
    let fillbar = document.querySelector(".fill");
    let currentTime = document.querySelector(".time");

    if (! audio.paused ) {
        playPause.innerHTML = '<i class="fas fa-play"></i>';
        audio.pause();
    } else {
        playPause.innerHTML = '<i class="fas fa-pause"></i>';
        audio.play();
    }
    audio.addEventListener("timeupdate", function() {
        let position = audio.currentTime / audio.duration;
        fillbar.style.width = position * 100 + "%";
        convertTime(Math.round(audio.currentTime));
    });

    function convertTime(seconds) {
        let min = Math.floor(seconds / 60);
        let sec = seconds % 60;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;
        currentTime.textContent = min + ":" + sec;
        totalTime(Math.round(audio.duration));
    }
      
    function totalTime(seconds) {
        let min = Math.floor(seconds / 60);
        let sec = seconds % 60;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;
        currentTime.textContent += " / " + min + ":" + sec;
    }

    audio.addEventListener("ended", ()=>{
        audio.currentTime = 0;
        playPause.innerHTML = '<i class="fas fa-play"></i>';
    });
}

function btn1(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "block";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    search_related({term: clicked_id,limit: 20});
}

var search_related = function getInfo(options) {
    var parts = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };
        
    if (options && options.term) {
        parts.term = options.term;
    }
        
    if (options && options.limit) {
        parts.limit = options.limit;
    }
          
    $.ajax({
        url: 'https://itunes.apple.com/search',
        method: 'GET',
        data: parts,
        dataType: 'jsonp',
            
        success: function(json) {
            shows_related(json);
        }
    });
}

function past_look() {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "block";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "none";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";
}

function shows_related(json) {
    if (json.results.length != 0) {
        var related = document.getElementById("related");
        html  = '<i class="fas fa-arrow-left" title="戻る" style="margin-left: 10px;color: white;font-size: 20px;margin-top: 10px;" onclick="past_look()"></i><br><br><h2 style="margin-left: 10px;margin-top: 10px;">関連曲</h2>';
                
        for (var i = 0, len = json.results.length; i < len; i++) {
            var resultWord = json.results[i];
        
            html += '<div style="width: 96%;height: 80px;margin-left: 2%;margin-top: 10px;" id=' + resultWord.trackId + ' onclick="view(this.id)">';
            html += '<img style="width: 80px;height: 80px;" src="' + resultWord.artworkUrl100 + '"><br>';
            html += '<div style="margin-left: 110px;margin-top: -100px;"><h4 style="font-weight: 90;">' + resultWord.trackName + '</h4>';
            html += '<h4 style="color: rgb(105, 105, 105);margin-top: -15px;font-weight: 90;">' + resultWord.artistName + '</h4>';
            html += '</div></div>';
        }
        html += '<br><br><br>';
    }
    related.innerHTML = html;
}

function btn2(clicked_id) {
    document.getElementById("home").style.display = "none";
    document.getElementById("search").style.display = "none";
    document.getElementById("library").style.display = "none";
    document.getElementById("premium").style.display = "none";
    document.getElementById("question").style.display = "none";
    document.getElementById("result").style.display = "none";
    document.getElementById("look").style.display = "none";
    document.getElementById("related").style.display = "none";
    document.getElementById("lyric").style.display = "block";
    document.getElementById("result2").style.display = "none";
    document.getElementById("result1").style.display = "none";
    document.getElementById("artist-look").style.display = "none";

    var view_song = 'https://itunes.apple.com/lookup?id=' + clicked_id;
    var parts = {
        lang: 'ja_jp',
        entry: 'music',
        media: 'music',
        country: 'JP',
    };

    $.ajax({
        url: view_song,
        method: 'GET',
        data: parts,
        dataType: 'jsonp',
                
        success: function(json) {
            thisLyricSong(json);
        }
    });
}

function thisLyricSong(json) {
    if (json.results.length != 0) {
        html  = '<div>';
              
        for (var i = 0, len = json.results.length; i < len; i++) {
            var result = json.results[i];
            var lyric = document.getElementById("lyric"); 
            var sourceStr = result.artworkUrl100;
            var targetStr = "100x100bb.jpg";
            var regExp = new RegExp( targetStr, "g" ) ;
            var img = sourceStr.replace( regExp , "70x70bb.jpg" );

            html += '<i class="fas fa-times" style="margin-left: 10px;color: white;font-size: 15px;margin-top: 10px;" onclick="past_look()"></i>';
            html += '<div><p><img src="' + img + '" style="width: 70px;height: 70px;margin-left: 10px;margin-top: 5px;"></p>';
            html += '<h4 style="margin-left: 100px;margin-top: -90px;width: 150px;" id="title">' + result.trackName + '</h4>';
            html += '<p style="color: rgb(105, 105, 105);margin-left: 100px;margin-top: -13px;width: 150px;" id="title">' + result.artistName + '</p></div>';
            html += '<div style="margin-top: 40px;margin-left: 10px;"><h1 style="color: white;">歌詞を取得できませんでした。</h1>';
            html += '<h4 style="text-align: center;color: rgb(105, 105, 105);margin-top: 100px;">&copy;By Crossnet</h4></div>';
        }
        html += '</div>';
    }
    lyric.innerHTML = html;
}

function btn3() {
    $("#errorbox").fadeIn("slow"); 
    setTimeout(countUp, 4000);
}

function countUp() {
    $("#errorbox").fadeOut("slow");
}

function btn4(clicked_id) {
    window.open(clicked_id, '_blank');
}

console.log("%c個人情報は、決して盗まないでください。", 'color: red; background: white; font-size: 30px;');

?>
