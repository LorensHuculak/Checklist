


$(document).ready(function(){
   
    // CHECKBOX CSS IF MARKED
$(document).ready(function () {

    $('.state1').css('textDecoration', 'line-through');
    $('.state1').attr('class', 'state1 g-mr-5 g-color-gray-light-v2');
  
        
});
       

$(".deleteCourse").click(function(event){


     event.preventDefault();
 //BUTTON WAS CLICKED
var $courseid = $(this).attr("data-id");
     var $element = $(this).parent().parent();
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'courseid': $courseid },
 url: "ajax/remove_ajax.php", 
 success: function(msg) {


 $element.remove();

 },
 error: function() {

 }
 }); 

 });
    
    
    
    
 $(".deleteList").click(function(event){
  
 //BUTTON WAS CLICKED
var $listname = $(this).attr("data-id");
var $element = $(this).parent().parent();
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'listname': $listname },
 url: "ajax/remove_list.php", 
 success: function(msg) {


 $element.parent().parent().parent().parent().remove();

 },
 error: function() {
 // what to do when call fails

 }
 }); 

 });    
    
    
$(".deleteTask").click(function(event){
     
 //BUTTON WAS CLICKED
     var $tasksid = $(this).attr("data-id");
     var $element = $(this).parent().parent();
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'tasksid': $tasksid },
 url: "ajax/remove_task.php", 
 success: function(msg) {


 $element.parent().parent().parent().parent().remove();

 },
 error: function() {

 }
 }); 

 }); 
    
//CHECKBOX MARK AJAX
    
$(".checktask").click(function(event){

 //BUTTON WAS CLICKED
     var $taskid = $(this).attr("data-id");
      $(document).on('change', 'input:checkbox', function () {
        var input = $(this).closest("li").find('.g-mr-5');
           // var counter = $(this).closest("li").find('.u-label');
        if (this.checked) {
            $(input).css('textDecoration', 'line-through');
            $(input).attr('class', 'g-mr-5 g-color-gray-light-v2');
            $(input).attr("id", "striped");
          //  $(counter).css("opacity", "0.3");

        } else {
            $(input).css('textDecoration', 'none');
            $(input).attr("id", "notstriped");
             $(input).attr('class', 'g-mr-5 g-color-gray-dark-v1');
            //$(counter).css("opacity", "1")
        }
    })
        
       
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'taskid': $taskid },
 url: "ajax/check_task.php", 
 success: function(msg) {



 },
 error: function() {

 }
 }); 

 }); 
    
    
//ADD MEMBER / ADMIN
    
    $(".addmin").click(function(event){
    
 //BUTTON WAS CLICKED
     var $userid = $(this).attr("data-id");
        var $clickcount = 0;

        
    
    $(this).each(function() {
        
        if($(this).attr('id') == 'studentico') {
            
           $(this).attr("class","addmin fa fa-user");
                       $(this).attr("id","adminico");
       
           
        } else {
          $(this).attr("class","addmin fa fa-user-o"); 
                       $(this).attr("id","studentico");
          
        }                 
                 })
        
       
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'userid': $userid },
 url: "ajax/change_account.php", 
 success: function(msg) {



 },
 error: function() {
 // what to do when call fails

 }
 }); 

 });
    
    
    //FOLLOW LIST AJAX
    
      $(".followbutton").click(function(event){
  
 //BUTTON WAS CLICKED
               event.preventDefault();
     var $listid = $(this).attr("data-id");
          
        
    
    $(this).each(function() {
        
        if($(this).attr('id') == 'followed') {
            
           $(this).attr("class","followbutton fa fa-chain-broken u-line-icon-pro u-line-icon-pro g-color-red");
                       $(this).attr("id","broken");
       
           
        } else {
          $(this).attr("class","followbutton fa fa-link u-line-icon-pro u-line-icon-pro g-color-primary"); 
                       $(this).attr("id","followed");
          
        }                 
                 })
        
       
        
       
 //SUBMIT DATA USING AJAX CALL
$.ajax({
 type: "POST",
data: { 'listid': $listid },
 url: "ajax/follow_user.php", 
 success: function(msg) {



 },
 error: function() {


 }
 }); 

 }); 
               
               
    
    
});
