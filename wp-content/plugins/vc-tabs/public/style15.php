<?php
if (!defined('ABSPATH'))
    exit;

function oxi_responsive_tabs_shortcode_function_style15($styleid, $userdata, $styledata, $listdata) {
    $oxi_fixed_header = get_option('oxi_addons_fixed_header_size');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            margin: 0 0 0 0;
            width: 100%;
            float: left;
            border-radius: <?php echo $styledata[45]; ?>px;
            overflow: hidden;
            background-color: <?php echo $styledata[25]; ?>;
            -webkit-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
            -o-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
            -ms-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
            -moz-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
            box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            width: calc(100% - <?php echo $styledata[35]; ?>%);
            float: <?php echo $styledata[51]; ?>;
            list-style: none;
            text-align: center;
            overflow: hidden;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{
            width: 100%;
            list-style: none;
            cursor: pointer;
            display: block;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -o-flexbox;
            display: -moz-flexbox;
            display: flex;
            -webkit-box-align:   center;
            -ms-flex-align:   center;
            -o-flex-align:   center;
            -moz-flex-align:   center;
            align-items:   center;
            margin-bottom: <?php echo $styledata[19]; ?>px;
            padding: <?php echo $styledata[15]; ?>px 12px;
            text-align: left;
            color: <?php echo $styledata[3]; ?>;
            background-color:  <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight:  <?php echo $styledata[13]; ?>;
            font-style: <?php echo $styledata[53]; ?>;
            line-height: 100%;
            -webkit-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -moz-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -o-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -moz-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li .oxi-icons{
            font-size: <?php echo $styledata[17]; ?>px !important;
            margin-right: 10px !important;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li:last-child{
            margin-bottom: 0;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: <?php echo $styledata[35]; ?>%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -o-flexbox;
            display: -moz-flexbox;
            display: flex;
            -webkit-box-align:   center;
            -ms-flex-align:   center;
            -o-flex-align:   center;
            -moz-flex-align:   center;
            align-items:   center;
            cursor: pointer;
            display: none;
            line-height: 100%;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[15]; ?>px 10px;
            font-weight: <?php echo $styledata[13]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-style: <?php echo $styledata[53]; ?>;
            -webkit-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -moz-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -o-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            -ms-box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
            box-shadow: inset 3px -36px 52px -24px rgba(255, 255, 255, 0.28);
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            background-color:<?php echo $styledata[9]; ?>;
            border-radius: 5px 5px 0 0;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?> i{
            font-size: <?php echo $styledata[17]; ?>px !important;
            margin-right: 10px !important;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            float: left;
            width: 100%;
            display: none;           
            padding: <?php echo $styledata[27]; ?>px <?php echo $styledata[29]; ?>px <?php echo $styledata[31]; ?>px <?php echo $styledata[33]; ?>px ;
            text-align: <?php echo $styledata[43]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{
            font-size: <?php echo $styledata[21]; ?>px;
            color: <?php echo $styledata[23]; ?>;
            font-weight: <?php echo $styledata[41]; ?>;
            line-height: <?php echo $styledata[37]; ?>;
            font-family: <?php echo ctu_font_familly_special_charecter($styledata[39]); ?>;
            margin-bottom: 0;
            margin-top:0;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
                overflow: visible;
                border-radius:  0;
                background-color: transparent;
                -webkit-box-shadow: none;
                -o-box-shadow: none;
                -ms-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                display: block;
                overflow: visible;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                width: 100%;
                float: left;
                display: block;
                border-radius: 5px;
                -webkit-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -o-box-shadow: <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -ms-box-shadow:  <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -moz-box-shadow:  <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                margin-bottom: 10px;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                margin-bottom: 10px;
                border-radius: 0 0 5px 5px;
                -webkit-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -o-box-shadow:    <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -ms-box-shadow:    <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                -moz-box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;
                box-shadow:   <?php echo $styledata[55]; ?>px <?php echo $styledata[57]; ?>px <?php echo $styledata[47]; ?>px <?php echo $styledata[59]; ?>px <?php echo $styledata[49]; ?>;

            }
        }
        <?php echo $styledata[71]; ?>
    </style>
    <div class="ctu-ultimate-wrapper-<?php echo $styleid; ?>">
        <div class="ctu-ulimate-style-<?php echo $styleid; ?>">
            <?php
            if ($userdata == 'admin') {
                $adminclass = 'oxilab-ab-id';
            } else {
                $adminclass = '';
            }
            foreach ($listdata as $value) {
                echo '   <div class="vc-tabs-li" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '" >
                                    ' . ctu_icon_font_selector($value['css']) . '
                                      ' . ctu_html_special_charecter($value['title']) . '
                                </div>';
            }
            echo '</div>';
            echo '<div class="ctu-ultimate-style-' . $styleid . '-content">';
            foreach ($listdata as $value) {
                echo '<div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
                                      ' . ctu_icon_font_selector($value['css']) . '
                                      ' . ctu_html_special_charecter($value['title']) . '
                                </div>
                        <div class="ctu-ulitate-style-' . $styleid . '-tabs ' . $adminclass . '" id="ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                            ' . ctu_html_special_charecter($value['files']) . '';
                if ($userdata == 'admin') {
                    ?>
                    <div class="oxilab-admin-absulote">
                        <div class="oxilab-style-absulate-edit">
                            <form method="post"> 
                                <input type="hidden" name="item-id" value="<?php echo $value['id']; ?>">
                                <button class="btn btn-primary" type="submit" value="edit" name="edit" title="Edit">Edit</button>
                                <?php echo wp_nonce_field("oxitabseditdata"); ?>
                            </form>
                        </div>
                        <div class="oxilab-style-absulate-delete">
                            <form method="post">
                                <input type="hidden" name="item-id" value="<?php echo $value['id']; ?>">
                                <button class="btn btn-danger" type="submit" value="delete" name="delete" title="Delete">Delete</button>
                                <?php echo wp_nonce_field("oxitabsdeletedata"); ?>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                echo '</div> ';
            }
            echo '</div>';
            if (empty($styledata[63])) {
                $initialopen = ':first';
            } else if ($styledata[63] == 'none') {
                $initialopen = '';
            } else {
                $initialopen = $styledata[63];
            }
            ?>
        </div> 

        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li<?php echo $initialopen; ?>").addClass("active");
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?><?php echo $initialopen; ?>").addClass("active");
                jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs<?php echo $initialopen; ?>").show();
                jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li").click(function () {
                    if (jQuery(this).hasClass('active')) {
                        return false;
                    } else {
                        jQuery(".ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li").removeClass("active");
                        jQuery(this).toggleClass("active");
                        jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp("slow");
                        var activeTab = jQuery(this).attr("ref");
                        jQuery(activeTab).slideDown("slow");
                    }
                });
                jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").click(function () {
                    if (jQuery(this).hasClass('active')) {
                        return false;
                    } else {
                        jQuery(".ctu-ultimate-style-heading-<?php echo $styleid; ?>").removeClass("active");
                        jQuery(this).toggleClass("active");
                        jQuery(".ctu-ulitate-style-<?php echo $styleid; ?>-tabs").slideUp("slow");
                        var activeTab = jQuery(this).attr("ref");
                        jQuery(activeTab).slideDown("slow");
                        var headerheight = <?php echo $oxi_fixed_header; ?>;
                        jQuery('html, body').animate({
                            scrollTop: jQuery(".ctu-ultimate-wrapper-<?php echo $styleid; ?>").offset().top - headerheight
                        }, 2000);
                    }
                });

            });
        </script>
        <?php
    }
    