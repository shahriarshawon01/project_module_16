<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    $(".datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
        "searching": false,
        // "paging": false,
        "ordering": false,
        "info": false,
    });

    // Check all the permissions
    $("#checkPermissionAll").click(function() {
        if ($(this).is(':checked')) {
            $('input[type=checkbox]').prop('checked', true);
        } else {
            $('input[type=checkbox]').prop('checked', false);
        }
    });

    function checkPermissionByGroup(className, checkThis) {
        const groupIdName = $("#" + checkThis.id);
        const classCheckBox = $('.' + className + ' input');
        if (groupIdName.is(':checked')) {
            classCheckBox.prop('checked', true);
        } else {
            classCheckBox.prop('checked', false);
        }
        // implementAllChecked();
    }

    function checkSinglePermission(groupClassName, groupId, countTotalPermission) {
        const classCheckBox = $('.' + groupClassName + ' input');
        const groupIdCheckBox = $("#" + groupId);

        if ($('.' + groupClassName + ' input:checked').length == countTotalPermission) {
            groupIdCheckBox.prop('checked', true);
        } else {
            groupIdCheckBox.prop('checked', false);
        }
        // implementAllChecked();
    }
</script>
