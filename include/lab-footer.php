
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
    <script>

    $('.knob').knob({
        draw: function() {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv) // Angle
                    ,
                    sa = this.startAngle // Previous start angle
                    ,
                    sat = this.startAngle // Start angle
                    ,
                    ea // Previous end angle
                    , eat = sat + a // End angle
                    ,
                    r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor &&
                    (sat = eat - 0.3) &&
                    (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor &&
                        (sa = ea - 0.3) &&
                        (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });

     $('#linecustom1').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#a095e5',
        fillColor: '#a095e5',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e2a8df',
        spotRadius: 0
    });

    $('#linecustom2').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#75c3f2',
        fillColor: '#75c3f2',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#8dbfe0',
        spotRadius: 0
    });

    $('#linecustom3').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#fc7b92',
        fillColor: '#fc7b92',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e0b89d',
        spotRadius: 0
    });
</script>


</body>
</html>
