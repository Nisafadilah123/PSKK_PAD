</body>
<!-- <script>
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script> -->
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    });
});
</script>

</html>
