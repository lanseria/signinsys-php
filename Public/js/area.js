function loadArea(areaId,areaType) {
  $.post(ajaxurl,{'areaId':areaId},function(data){
    if(areaType=='city'){
     $('#'+areaType).html('<option value="-1">请选择专业/班级</option>');
   }
   if(areaType!='null'){
    $.each(data,function(no,items){
      $('#'+areaType).append('<option value="'+items.area_id+'">'+items.class_name+'</option>');
    });
  }
});
}
$('#province').click(function(){
  $(this).change(function(){
    var objectModel = {};
    var   value = $(this).val();
    var   type = $(this).attr('id');
    objectModel[type] =value;
    $.ajax({
      cache:false,
      type:"POST",
      url:"/index.php/Home/Ajax/getArea.html",
      dataType:"json",
      data:objectModel,
      timeout:30000,
      error:function(){
        alert("/index.php/Home/Ajax/getArea.html");
      },
      success:function(data){
        $("#city").empty();
        var count = data.length;
        var i = 0;
        var b="";
        for(i=0;i<count;i++){
         b+="<option value='"+data[i].areaId+"'>"+data[i].class_name+"</option>";
       }
       $("#city").append(b);
     }
   });
  });
}
);