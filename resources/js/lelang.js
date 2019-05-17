$('#upload-video').change(function(){
  var file = this.files[0];
  var reader = new FileReader();
  reader.onload = function(e){
    $("#preview-video").attr('src', e.target.result);
  }
  reader.readAsDataURL(file);
});
