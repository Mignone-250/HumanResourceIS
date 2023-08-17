<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myform").on("submit", function(){
    $("#pageloader").fadeIn();
  });//submit
});
</script>
<style>
#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
</style>
</head>
<body>

<div id="pageloader">
   <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
</div>

<form id="myform">
  <input type="text" name="fname" id="fname" value="" />
  <input type="submit" value="Submit" />
</form>

</body>
</html>
