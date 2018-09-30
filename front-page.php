<?php
/*
  Template Name: front-page
 */	


$heading_about = get_field('heading_about');
$description_about = get_field('description_about');
	
$heading_main_picture = get_field('heading_main_picture');
$heading_main_picture_line2 = get_field('heading_main_picture_line2');	

$skill_percentage1 = get_field('skill_percentage1');
$skill_percentage2 = get_field('skill_percentage2');
$skill_percentage3 = get_field('skill_percentage3');
$skill_percentage4 = get_field('skill_percentage4');
$skill_percentage5= get_field('skill_percentage5');
$skill_percentage6= get_field('skill_percentage6');
$skill_percentage7= get_field('skill_percentage7');
$skill_percentage8= get_field('skill_percentage8');

$skill_name1 = get_field('skill_name1');
$skill_name2 = get_field('skill_name2');
$skill_name3 = get_field('skill_name3');
$skill_name4 = get_field('skill_name4');
$skill_name5= get_field('skill_name5');
$skill_name6= get_field('skill_name6');
$skill_name7= get_field('skill_name7');
$skill_name8= get_field('skill_name8');


$heading1 = get_field('heading1');
$heading2 = get_field('heading2');
$heading3 = get_field('heading3');
$heading4 = get_field('heading4');
$heading5 = get_field('heading5');


$url_img1 = get_field('url_img1');
$url_img2 = get_field('url_img2');
$url_img3 = get_field('url_img3');
$url_img4 = get_field('url_img4');
$url_img5 = get_field('url_img5');


$img1 = get_field('img1');
$img2 = get_field('img2');
$img3 = get_field('img3');
$img4 = get_field('img4');
$img5 = get_field('img5');



$description1 = get_field('description1');
$description2 = get_field('description2');
$description3 = get_field('description3');
$description4 = get_field('description4');
$description5 = get_field('description5');

// psd to html section
// 
$psd_heading = get_field('psd_heading');
$psd_description = get_field('psd_description');


$psd__picture_heading1 = get_field('psd__picture_heading1');
$psd__picture_heading2 = get_field('psd__picture_heading2');
$psd__picture_heading3 = get_field('psd__picture_heading3');

$psd__picture_img1 = get_field('psd__picture_img1');
$psd__picture_img2 = get_field('psd__picture_img2');
$psd__picture_img3 = get_field('psd__picture_img3');

$psd_url_img1 = get_field('psd_url_img1');
$psd_url_img2 = get_field('psd_url_img2');
$psd_url_img3 = get_field('psd_url_img3');

$psd_description1 = get_field('psd_description1');
$psd_description2 = get_field('psd_description2');
$psd_description3 = get_field('psd_description3');

// psd to html end


// incomplited section
$incomplete_projects_heading = get_field('incomplete_projects_heading');
$incomplete_projects_description = get_field('incomplete_projects_description');


$heading__picture_incomplete1 = get_field('heading__picture_incomplete1');
$heading__picture_incomplete2 = get_field('heading__picture_incomplete2');


$picture_incomplete_project1 = get_field('picture_incomplete_project1');
$picture_incomplete_project2 = get_field('picture_incomplete_project2');


$url_incomplete_project1 = get_field('url_incomplete_project1');
$url_incomplete_project2 = get_field('url_incomplete_project2');


$incomplete_project_description1 = get_field('incomplete_project_description1');
$incomplete_project_description2 = get_field('incomplete_project_description2');


	
	
	
	

	
	

//end incomplited

get_header(); ?>






<section class="mainPicture">

    <div id="typed-strings">
        <span>
            <h1>
                <?php echo $heading_main_picture ?>
                <br /><em>
                    <?php echo $heading_main_picture_line2 ?></em></h1>
        </span>

    </div>

    <span id="typed"></span>
</section>


<?php
if( have_posts() ) {
  while( have_posts() ) {
  the_post();
    the_content();
  }
}
?>

<section class="mySkills">

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage1 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #d35400;"><span>
                <?php echo $skill_name1 ?></span></div>
        <div class="skillbar-bar" style="background: #e67e22;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage1 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage2 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #2980b9;"><span>
                <?php echo $skill_name2 ?></span></div>
        <div class="skillbar-bar" style="background: #3498db;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage2 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage3 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #06568e;"><span>
                <?php echo $skill_name3 ?></span></div>
        <div class="skillbar-bar" style="background: #0769ad;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage3 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage4 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #E8D44C;"><span>
                <?php echo $skill_name4 ?></span></div>
        <div class="skillbar-bar" style="background: #f0db4f;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage4 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage5 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #333333;"><span>
                <?php echo $skill_name5 ?></span></div>
        <div class="skillbar-bar" style="background: #525252;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage5 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage6 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #27ae60;"><span>
                <?php echo $skill_name6 ?></span></div>
        <div class="skillbar-bar" style="background: #2ecc71;"></div>
        <div class="skill-bar-percent Single Count">
            <?php echo $skill_percentage6 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage7 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #124e8c;"><span>
                <?php echo $skill_name7 ?></span></div>
        <div class="skillbar-bar" style="background: #4288d0;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage7 ?>
        </div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="<?php echo $skill_percentage8 ?>%">
        <i></i>
        <div class="skillbar-title" style="background: #53567D;"><span>
                <?php echo $skill_name8 ?></span></div>
        <div class="skillbar-bar" style="background: #787cb4;"></div>
        <div class="skill-bar-percent Count">
            <?php echo $skill_percentage8 ?>
        </div>
    </div> <!-- End Skill Bar -->

</section>
<article id="o-mnie" class="aboutMe">
    <h2>
        <?php echo $heading_about; ?>
    </h2>
    <p>
        <?php echo $description_about; ?>
    </p>
</article>

<section class="portfolio" id="projekty">
    <div>
        <h2>
            <?php echo $heading1; ?>
        </h2>
        <a<?php echo " " . $url_img1; ?>>
            <?php  if( !empty($img1) ): ?>
            <img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" />
            <?php endif; ?>
            </a>
            <p>
                <?php the_field('description1'); ?>
            </p>
    </div>
    <div>
        <h2>

            <?php echo $heading2; ?>
        </h2>
        <a<?php echo " " .$url_img2; ?>>
            <?php  if( !empty($img2) ): ?>

            <img src="<?php echo $img2['url']; ?>" alt="<?php echo $img2['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $description2; ?>
            </p>
    </div>
    <div>
        <h2>

            <?php echo $heading3; ; ?>
        </h2>
        <a<?php echo " " .$url_img3; ?>>
            <?php    if( !empty($img3) ): ?>

            <img src="<?php echo $img3['url']; ?>" alt="<?php echo $img3['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $description3; ?>
            </p>
    </div>

    <div>
        <h2>

            <?php echo $heading4; ?>
        </h2>
        <a<?php echo " " .$url_img4; ?>>
            <?php   if( !empty($img4) ): ?>

            <img src="<?php echo $img4['url']; ?>" alt="<?php echo $img4['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $description4; ?>
            </p>
    </div>

    <div>
        <h2>

            <?php echo $heading5; ?>
        </h2>
        <a<?php echo " " .$url_img5; ?>>
            <?php      if( !empty($img5) ): ?>

            <img src="<?php echo $img5['url']; ?>" alt="<?php echo $img5['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $description5; ?>
            </p>
    </div>


</section>
<!-- psd section -->
<article class="psdToHtml">
    <h2>
        <?php echo $psd_heading; ?>
    </h2>
    <p>
        <?php echo $psd_description; ?>
    </p>

</article>
<section class="psdPictures" id="projektyPsd">

    <div>
        <h2>

            <?php echo $psd__picture_heading1; ?>
        </h2>
        <a<?php echo " " .$psd_url_img1; ?>>
            <?php      if( !empty($psd__picture_img1) ): ?>

            <img src="<?php echo $psd__picture_img1['url']; ?>" alt="<?php echo $psd__picture_img1['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $psd_description1; ?>
            </p>
    </div>

    <div>
        <h2>

            <?php echo $psd__picture_heading2; ?>
        </h2>
        <a<?php echo " " .$psd_url_img2; ?>>
            <?php      if( !empty($psd__picture_img2) ): ?>

            <img src="<?php echo $psd__picture_img2['url']; ?>" alt="<?php echo $psd__picture_img2['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $psd_description2; ?>
            </p>
    </div>
    <div>
        <h2>

            <?php echo $psd__picture_heading3; ?>
        </h2>
        <a<?php echo " " .$psd_url_img3; ?>>
            <?php      if( !empty($psd__picture_img3) ): ?>

            <img src="<?php echo $psd__picture_img3['url']; ?>" alt="<?php echo $psd__picture_img3['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $psd_description3; ?>
            </p>
    </div>

</section>
<!-- psd end -->
<!-- imcomplited section -->
<article class="incomplited">
    <h2>
        <?php echo $incomplete_projects_heading; ?>
    </h2>
    <p>
        <?php echo $incomplete_projects_description; ?>
    </p>

</article>
<section class="incomplitedPictures">

    <div>
        <h2>

            <?php echo $heading__picture_incomplete1; ?>
        </h2>
        <a<?php echo " " .$url_incomplete_project1; ?>>
            <?php      if( !empty($picture_incomplete_project1) ): ?>

            <img src="<?php echo $picture_incomplete_project1['url']; ?>" alt="<?php echo $picture_incomplete_project1['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $incomplete_project_description1; ?>
            </p>
    </div>

    <div>
        <h2>

            <?php echo $heading__picture_incomplete2; ?>
        </h2>
        <a<?php echo " " .$url_incomplete_project2; ?>>
            <?php      if( !empty($picture_incomplete_project2) ): ?>

            <img src="<?php echo $picture_incomplete_project2['url']; ?>" alt="<?php echo $picture_incomplete_project2['alt']; ?>" />

            <?php endif; ?>
            </a>
            <p>
                <?php echo $incomplete_project_description2; ?>
            </p>
    </div>


</section>
<!-- incomplited end -->
<?php get_footer(); ?>
