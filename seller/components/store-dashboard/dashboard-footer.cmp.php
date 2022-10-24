
</div>

<!-- Javascript -->
<script src="../static/seller/assets/bundles/libscripts.bundle.js"></script>    
<script src="../static/seller/assets/bundles/vendorscripts.bundle.js"></script>

<script src="../static/seller/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../static/seller/assets/bundles/c3.bundle.js"></script>


<!-- page js file -->
<script src="../static/seller/assets/bundles/mainscripts.bundle.js"></script>
<script src="../static/seller/js/index8.js"></script>
<script src="../static/vendor/summernote/dist/summernote.js"></script>


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


