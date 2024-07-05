
            </div><!--container-fluid-->
        </div><!--main-content-->
    </div><!--wrapper-->

    <!-- Javascript -->
    <script src=" assets/bundles/libscripts.bundle.js "></script>
    <script src=" assets/bundles/vendorscripts.bundle.js "></script>
    <script src=" assets/bundles/chartist.bundle.js "></script>
    <script src=" assets/bundles/knob.bundle.js "></script> <!-- Jquery Knob-->
    <script src=" assets/bundles/flotscripts.bundle.js "></script> <!-- flot charts Plugin Js -->
    <script src=" assets/bundles/easypiechart.bundle.js "></script> <!-- easypiechart Plugin Js -->
    <script src=" assets/bundles/mainscripts.bundle.js "></script>
    <script src=" assets/bundles/datatablescripts.bundle.js "></script>
    <script src=" assets/vendor/toastr/toastr.js "></script>
    <script src=" assets/vendor/flot-charts/jquery.flot.selection.js "></script>
    <script src=" assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js "></script>
    <script src=" assets/vendor/nestable/jquery.nestable.js "></script> <!-- Jquery Nestable -->
    <script src=" assets/vendor/sweetalert/sweetalert.min.js "></script> <!-- SweetAlert Plugin Js -->
    <script src=" assets/js/index.js "></script>
    <script src=" assets/js/pages/ui/sortable-nestable.js "></script>
    <script src=" assets/js/pages/ui/dialogs.js "></script>
    <script src=" assets/js/pages/tables/jquery-datatable.js "></script>
    <script src=" assets/js/pages/forms/form-wizard.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.html5.min.js "></script>
    <script src=" assets/vendor/jquery-datatable/buttons/buttons.print.min.js "></script>
    <script src=" assets/vendor/jquery-validation/jquery.validate.js "></script> <!-- Jquery Validation Plugin Css -->
    <script src=" assets/vendor/jquery-steps/jquery.steps.js "></script> <!-- JQuery Steps Plugin Js -->
    <script src=" assets/vendor/parsleyjs/js/parsley.min.js "></script>
    <script>
        $(document).ready(function () {
            $('.star').on('click', function () {
                $(this).toggleClass('star-checked');
            });

            $('.ckbox label').on('click', function () {
                $(this).parents('tr').toggleClass('selected');
            });

            $('.btn-filter').on('click', function () {
                var $target = $(this).data('target');
                if ($target != 'all') {
                    $('.table tr').css('display', 'none');
                    $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
                } else {
                    $('.table tr').css('display', 'none').fadeIn('slow');
                }
            });
        });
    </script>


</body>
</html>
