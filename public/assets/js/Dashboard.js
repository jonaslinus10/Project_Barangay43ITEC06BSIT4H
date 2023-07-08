$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
      if(this.checked){
        checkbox.each(function(){
          this.checked = true;                        
        });
      } else{
        checkbox.each(function(){
          this.checked = false;                        
        });
      } 
    });
    checkbox.click(function(){
      if(!this.checked){
        $("#selectAll").prop("checked", false);
      }
    });
  });

function getId(user_id){

  $('#userId').val(user_id);
  console.log(user_id);
}

function getDeleteId(user_id){

  $('#userDeleteId').val(user_id);
  console.log(user_id);
}