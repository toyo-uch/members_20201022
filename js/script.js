$(function(){

    //IDがclickの要素に、クリックされた時の動きを設定する
    $('#click').click(function(){

        var d = {
            name:'名前',
            group:'グループ'
        };

        var p = {
            url:'save.php', //読み込むファイルを指定
            type:'POST',
            data:d
        };

        $.ajax(p).done(function(a,b,r){
            console.log(r.responseText);
        });

        return false;
    });


});
