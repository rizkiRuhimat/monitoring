</div>
<hr>
<footer>
    <p class="small" style="text-align:center ;"> Copyrigth &copy; <?= date('Y'); ?></p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?= BASEURL; ?>js/datatables.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>js/script.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
</body>

</html>