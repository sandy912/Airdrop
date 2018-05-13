<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src = "<?php echo base_url();?>js/script.js"></script>
<script  src ="<?php echo base_url();?>js/new-age.js"></script>
<script src="<?php echo base_url();?>js/inc/TimeCircles.js"></script>
<script>
$( '.js-float-label-wrapper' ).FloatLabel();
$("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.5,
    "fg_width": 0.01,
    "circle_bg_color": "#60686F",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#ff7466",
            "show": true
        },
        "Hours": {
            "text": "Hours",
            "color": "#ff99f5",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#adedff",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#9b99ff",
            "show": true
        }
    }
});
</script>


</body>
</html>
