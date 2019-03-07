<!DOCTYPE html>
    <style>
        #maine {
            width: 1200px;
            margin-right: auto;
            margin-top: 10px;
            margin-left: auto;
            border-radius: 8px;
            font-family: yekan;

        }

        #maine::after {
            content: " ";
            clear: both;
            display: block;
        }

        .color {
            color: #6d717a;
        }

       

        .fontsm {
            font-size: 10pt
        }

        .yekan {
            font-family: yekan;
            color: rgba(59, 62, 61, 0.42);
        }

        .yekan2 {
            font-family: yekan;
        }

        @font-face {
            font-family: 'yekan';
            src:url(<?=URL1?>fonts/Yekan.eot);
            src:url(<?=URL1?>fonts/Yekan.eot?#iefix) format("embedded-opentype"),url(<?=URL1?>fonts/Yekan.woff) format("woff"),url(<?=URL1?>fonts/Yekan.ttf) format("truetype"),url(<?=URL1?>fonts/Yekan.svg#BYekan) format("svg");
            font-weight: normal;
            font-style: normal
        }

      
        div, span, ul {
            text-align: right;
            direction: rtl;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

      

        ul {
            margin: 0;
        }

     

     




    </style>
    <script src="css/FlipClock-master/compiled/flipclock.min.js"></script>
</head>
<body style="margin: 0 ;background: #eee">


<div div id="maine">

    <?php require ('box.php'); ?>
    <?php require ('box1.php'); ?>
    <?php require ('tab.php'); ?>

</div>



