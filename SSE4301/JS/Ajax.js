
function insert() {
$.ajax({
type: "POST",//方法
url:"../PHP/conn_database.php" ,//表单接收url
data:  $('#form1').serialize(),
success: function () {
//提交成功的提示词或者其他反馈代码
var result=document.getElementById("success"); result.innerHTML="成功!";
},
error : function() {
//提交失败的提示词或者其他反馈代码
var result=document.getElementById("success"); result.innerHTML="失败!";
}
});
}
    
