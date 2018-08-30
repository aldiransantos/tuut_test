
<footer>
    <h1 class="logo-footer">TUUT</h1>

    <ul class="redes-sociais">
        <li class="facebook"></li>
        <li class="instagram"></li>
    </ul>
</footer>

<script type="text/javascript" src="assets/js/accordion.js"></script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

<?php wp_footer(); ?>

</body>
</html>