function previewImage(){
    const thumbnail = document.querySelector('#thumbnail');
    const imgPreview = document.querySelector('#img-preview');
    imgPreview.style.display = 'block';
    imgPreview.style.width = '150px';
    var oFReader = new FileReader();
    oFReader.readAsDataURL(thumbnail.files[0]);
    
    oFReader.onload = function (oFREvent){
        imgPreview.src = oFREvent.target.result;
    };

}