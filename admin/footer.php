

                </div>
    </div>
</div>
<!-- Javascript -->
<script src="<?=$url?>static/bundles/libscripts.bundle.js"></script>
<script src="<?=$url?>static/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="<?=$url?>static/bundles/apexcharts.bundle.js"></script>

<!-- page js file -->
<script src="<?=$url?>static/bundles/mainscripts.bundle.js"></script>
<script src="<?=$url?>static/js/index.js"></script>
<script src="<?=$url?>static/js/pages/calendar.js"></script>
<script src="<?=$url?>static/vendor/summernote/dist/summernote.js"></script>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>


</body>

</html>
