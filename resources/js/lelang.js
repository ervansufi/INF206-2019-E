$('#upload-image').change(function(){
  var file = this.files[0];
  if (!file) {
    $("#thumbnail img").attr('src', '');
  }
  var reader = new FileReader();
  reader.onload = function(e){
    $("#thumbnail img").attr('src', e.target.result);
  }
  reader.readAsDataURL(file);
});

$('#thumbnail').click(function(){
  $('#upload-image').click();
})
