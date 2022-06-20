<?
$site_language = get_bloginfo( 'language' );
// получаем картинку
$post_thumb_id = get_post_thumbnail_id();
$post_thumb_url = wp_get_attachment_image_src($post_thumb_id,'medium', true);
// получим картинки людей
$people = get_post_meta(get_the_ID(), 'people', true);
$people_img_arr = explode(',',$people);
$people_img_id = $people_img_arr[0];
$people_img = wp_get_attachment_image_src($people_img_id,'medium', true);
$sale = get_post_meta(get_the_ID(), 'sale', true);
// получим иконку типа квеста
$categories = get_categories( array('type'=>'quests','taxonomy'=>'genre') );

?>
<div class="flex-col-md-4">
    <a class="add-favorites user_favorite" data-id="224"></a>
    <div class=" item item--real scrollable-objects__list__item">
        <div class="quest-statuses"></div>
        <!-- <a href="/ru/?city=moscow&quest_type=questy-po-gorodu&quest=<?= $quest['prefix'] ?>"> -->
        <a href="<? the_permalink() ?>">
            <div class="image">
                <? if($site_language!="en-US"): ?>
                <div class="selphie">
                    <div class="selphie-wrapper">
                        <img src="<?= $people_img[0] ?>" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <?php if (($sale != '')&&($sale != '0')) : ?>
                    <span class="sale">
                        <?php echo $sale; ?><sub>%</sub><i>sale</i>
                    </span>
                <?php endif; ?>
                <div class="img" style="background-image:url(<?= $post_thumb_url[0] ?>);background-position: top center;"></div>
                <div data-seo-attr="#L3F1ZXN0L3V6bmlraS1wb2R6ZW1lbHlhLw==" data-hide-attr="href">
                    <div class="<? echo ($quest['prefix'] == "#") ? 'content_empty' : 'content' ?>">
                        <div class="module-title">
                            <div class="module-rating with-icon">
                                <span class="rating" data-rating=""><img src="<?bloginfo('template_url');?>/images/icons/<?= $categories[0]->slug ?>.png"></span>
                            </div>
                            <div class="text">
                                <div class="<? echo ($quest['prefix'] == "#") ? 'place_empty' : 'place' ?>">
                                    <span><?= get_post_meta(get_the_ID(), 'lozung', true) ?></span>
                                </div>
                                <span class="title"><?= get_the_title() ?></span>
                                <div class="division"><?= get_post_meta(get_the_ID(), 'lozung', true); ?></div>
                            </div>
                        </div>
                        <? if ($quest['prefix'] != "#") { ?>

                            <div class="module-stats">
                                <div class="description"><?= get_post_meta(get_the_ID(), 'short_descr', true) ?>
                                </div>
                                <div class="address"><?= get_post_meta(get_the_ID(), 'adres', true) ?></div>
                                <? if($site_language!="en-US"): ?>
                                <div class="subway-item">
                                    <div class="icon <?= get_post_meta(get_the_ID(), 'subway_color', true) ?>"><?=_e('m')?></div>
                                    <?= get_post_meta(get_the_ID(), 'metro', true) ?>
                                </div>
                                <? endif; ?>
                            </div>

                        <? } ?>
                    </div>
                </div>
            </div>
        </a>
        <div class="module-price" style="<? echo ($quest['prefix'] == "#") ? 'padding:18px 0px;' : '' ?>">
            <? if ($quest['prefix'] != "#") { ?>

                <div class="price flex-row align-c">
                    <div class="flex-col-md-6 flex-col-sm-12">
                        <div class="flex-row">
                            <div class="flex-col-md-6 flex-col-sm-6">
                                <? if($site_language!="en-US"): ?>
                                <i class="fa fa-rub txt-dark2"></i>
                                <? else: ?>
                                <i class="fa fa-usd txt-dark2"></i>
                                <? endif; ?>
                                <p class="title title-sub mini mr-b-0 text-center"
                                   data-rgen-sm="medium"><?= get_post_meta(get_the_ID(), 'price', true) ?></p>
                            </div>
                            <div class="flex-col-md-6 flex-col-sm-6">
                                <img class="group inline" alt="количество игроков" src="<?=bloginfo('template_url')?>/images/group.png">
                                <p class="title title-sub mini mr-b-0 text-center"
                                   data-rgen-sm="medium"><?= get_post_meta(get_the_ID(), 'group', true) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-md-6 flex-col-sm-12">
                        <div class="flex-row">
                            <div class="flex-col-md-6 flex-col-sm-6">
                                <div class="bg-color1 rd sq50 mr-auto flex-cc">
                                    <p class="mr-b-0 title small txt-white"><?= get_post_meta(get_the_ID(), 'age', true) ?><sup>+</sup></p>
                                </div>
                            </div>
                            <div class="flex-col-md-6 flex-col-sm-6">
                                <i class="fa fa-map-marker txt-dark2"></i>
                                <p class="title title-sub mini mr-b-0 text-center"><?= get_post_meta(get_the_ID(), 'distance', true) ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="<? the_permalink() ?>"
                   class="button"><?=_e('About Quest')?></a>
            <? } else { ?>
                <p class="title title-sub mini mr-b-0 lh-1 text-center v-razrabotke" data-rgen-sm="medium">СОВСЕМ
                    СКОРО</p>
            <? } ?>
        </div>
    </div>


    <!-- // END : Info object //  -->
</div><!-- // END : column //  -->