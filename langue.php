<?php 
echo "<div class=\"blurred-circle\">
    <form id=\"langueForm\" method=\"POST\">
        <select class=\"langue\" name=\"langue\">
            <option class=\"slangue\" value=\"fr\" " . ($_SESSION['langue'] === 'fr' ? 'selected' : '') . ">FR</option>
            <option class=\"slangue\" value=\"en\" " . ($_SESSION['langue'] === 'en' ? 'selected' : '') . ">EN</option>
            <option class=\"slangue\" value=\"es\" " . ($_SESSION['langue'] === 'es' ? 'selected' : '') . ">ES</option>
        </select>
    </form>
</div>

<script>
    document.querySelector('.langue').addEventListener('change', function() {
        document.getElementById('langueForm').submit();
    });
</script>";
?>