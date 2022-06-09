var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var kontainer = document.getElementById('kontainer');

keyword.addEventListener('keyup',function(){

    //make ajax

    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
            kontainer.innerHTML = xhr.responseText
        }
    }
    

    xhr.open('GET','ajax/film.php?keyword='+keyword.value,true)
    xhr.send();

})