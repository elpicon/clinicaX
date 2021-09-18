<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form>
    <input id="foro" list="foros" />
    <datalist id="foros">
        <option data-ejemplo="Editor" value="HTML">
        <option data-ejemplo="Estilo" value="CSS">
        <option data-ejemplo="Cliente" value="Javascript">
        <option data-ejemplo="Programacion" value="PHP">
    </datalist>
</form>

<script>
$("#foro").on('input', function () {
   var val=$('#foro').val();
   var ejemplo = $('#foros').find('option[value="'+val+'"]').data('ejemplo');
   alert(ejemplo);
});
    </script>
</datalist>
</body>
</html>