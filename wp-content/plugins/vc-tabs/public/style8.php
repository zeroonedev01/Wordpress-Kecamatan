<?php
if (!defined('ABSPATH'))
    exit;

function oxi_responsive_tabs_shortcode_function_style8($styleid, $userdata, $styledata, $listdata) {
    $oxi_fixed_header = get_option('oxi_addons_fixed_header_size');
    ?>
    <style>
        .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
            width: 100%;
            float: left;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?>{
            margin: 0 0 0 0;
            width: 100%;
            float: left;
            list-style: none;            
            display: -webkit-box;
            display: -ms-flexbox;
            display: -o-flexbox;
            display: -moz-flexbox;
            display: flex;
            text-align: center;
            -webkit-box-pack: <?php echo $styledata[17]; ?>;
            -ms-flex-pack: <?php echo $styledata[17]; ?>;
            -o-flex-pack: <?php echo $styledata[17]; ?>;
            -moz-flex-pack: <?php echo $styledata[17]; ?>;
            justify-content: <?php echo $styledata[17]; ?>;
            margin-bottom: 0;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li{
            width: <?php echo $styledata[15]; ?>px;
            float: left;
            z-index: 2;
            position: relative;
            bottom: -1px;
            list-style: none;
            cursor: pointer;
            margin-bottom: 0;
            border-top: 1px solid;
            border-right: 1px solid;
            border-bottom: 1px solid;
            border-color: <?php echo $styledata[43]; ?>;
            padding: <?php echo $styledata[19]; ?>px 10px;
            text-align: center;
            color: <?php echo $styledata[3]; ?>;
            background-color:  <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            font-family:    <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
            font-weight: <?php echo $styledata[13]; ?>;
            line-height: 130%;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li:first-child{
            border-left: 1px solid <?php echo $styledata[43]; ?>;
        }
        .ctu-ulimate-style-<?php echo $styleid; ?> .vc-tabs-li.active{
            color: <?php echo $styledata[7]; ?>;
            background-color:  <?php echo $styledata[9]; ?>;
            border-bottom-color: <?php echo $styledata[9]; ?>;
        }
        .ctu-ultimate-style-<?php echo $styleid; ?>-content{
            width: 100%;
            float: left;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
            width: 100%;
            cursor: pointer;
            display: none;
            line-height: 100%;
            color: <?php echo $styledata[3]; ?>;
            background-color: <?php echo $styledata[5]; ?>;
            font-size: <?php echo $styledata[1]; ?>px;
            padding: <?php echo $styledata[19]; ?>px 10px;
            font-weight: <?php echo $styledata[15]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[11]); ?>;
        }
        .ctu-ultimate-style-heading-<?php echo $styleid; ?>.active{
            color: <?php echo $styledata[7]; ?>;
            background-color: <?php echo $styledata[9]; ?>;
            border-bottom: 1px solid <?php echo $styledata[43]; ?>;
        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
            display: none;
            border: 1px solid <?php echo $styledata[43]; ?>;           
            background-color:<?php echo $styledata[25]; ?>;           
            padding: <?php echo $styledata[27]; ?>px <?php echo $styledata[29]; ?>px <?php echo $styledata[31]; ?>px <?php echo $styledata[33]; ?>px ;


        }
        .ctu-ulitate-style-<?php echo $styleid; ?>-tabs p{
            font-size: <?php echo $styledata[21]; ?>px;
            color: <?php echo $styledata[23]; ?>;
            font-weight: <?php echo $styledata[39]; ?>;
            line-height: <?php echo $styledata[35]; ?>;
            font-family:  <?php echo ctu_font_familly_special_charecter($styledata[37]); ?>;
            text-align: <?php echo $styledata[41]; ?>;
        }
        @media only screen and (max-width: 900px) {
            .ctu-ultimate-wrapper-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ultimate-style-<?php echo $styleid; ?>-content{
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid <?php echo $styledata[43]; ?>;
            }
            .ctu-ulimate-style-<?php echo $styleid; ?> {
                display: none;
            }
            .ctu-ultimate-style-heading-<?php echo $styleid; ?>{
                display: block;
            }
            .ctu-ulitate-style-<?php echo $styleid; ?>-tabs{
                border:none;
            }
        }
        <?php echo $styledata[45]; ?>
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
                echo '<div class="vc-tabs-li" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '">
                                ' . ctu_html_special_charecter($value['title']) . ' 
                            </div>';
            }
            echo '</div>';
            foreach ($listdata as $value) {
                echo ' <div class="ctu-ultimate-style-' . $styleid . '-content">
                        <div class="ctu-ultimate-style-heading-' . $styleid . '" ref="#ctu-ulitate-style-' . $styleid . '-id-' . $value['id'] . '"> 
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
                echo '</div></div> ';
            }
            if (empty($styledata[47])) {
                $initialopen = ':first';
            } else if ($styledata[47] == 'none') {
                $initialopen = '';
            } else {
                $initialopen = $styledata[47];
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
    