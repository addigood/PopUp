<html>
<head>
<title>Popup Form</title>
<style type="text/css">
#form_wrapper {
    display:none;
}​
</style>
</head>




<a title="%s" class="show_form" href="#"> ABC </a>

<div id="form_wrapper">
HHHHH
    <form id="contactus" action="javascript:submit_form()" method="post" accept-charset="UTF-8">
    
    </form>
</div>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
<script type="text/javascript">
$('a.show_form').on('click', function() {
    $('#form_wrapper').show();
});​​​​​
</script>
</html>