        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url('')?>/assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url('')?>/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
		<script src="<?= base_url('')?>/assets/js/scripts.js"></script>
		<script>
			$(document).ready(function () {
$('#dtVerticalScrollExample').DataTable({
"scrollY": "200px",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});

		</script>
    </body>
</html>
