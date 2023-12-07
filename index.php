<?php
/**
 *  Template Name: index
 *
 */
echo get_header();?>


 <!-- ========================================
Main Banner Sectionr start
======================================== -->


<?php
    $hero = get_field('hero');
    if ( have_posts()) {
        the_post();
?>

<div class="mainheader">
    <div class="container-fluid pt-5">
        <div class="row align-items-end">
            <div class="col-md-4"> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/Header-dog.png" alt="" class="img-fluid"> 
            </div>
            <div class="col-md-8 px-lg-5 mobile-pt"> 
                <h1 class="finaltext text-left">  
                <?php echo $hero['heading_one'];?>
                        <span class="yellotext">
                            <?php echo $hero['heading_two'];?>
                        </span>
                </h1>

                <h2 class="finaltext text-left pr-5"> 
                    <?php echo $hero['heading_three'];?>
                </h2>

                <h2 class="finaltext text-left">  
                    <?php echo $hero['heading_four'];?>
                </h2>

                <h2 class="finaltext text-left pr-6">  
                    <?php echo $hero['heading_five'];?>
                </h2>

                <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/text.png" alt="" class="img-fluid"> -->
                    
                <div class="row mt-5">
                    <div class="col-md-4 border-end text-center mx-auto"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/img/empty-1.png" alt="" class="img-fluid">
                        <h2 class="empty"><?php echo $hero['icon_title_one'];?></h2>   
                    </div>

                    <div class="col-md-4 border-end text-center"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/img/empty-2.png" alt="" class="img-fluid">
                        <h2 class="empty"><?php echo $hero['icon_title_two'];?></h2>   
                    </div>

                    <div class="col-md-4 text-center"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/img/empty-3.png" alt="" class="img-fluid">
                        <h2 class="empty"><?php echo $hero['icon_title_three'];?></h2>   
                    </div>

                </div>

                <p class="text-white pt-4  GothamLight ">
                    <b>
                        <?php echo $hero['para_heading'];?>
                    </b>
                    <?php echo $hero['paragraph'];?>
                    <span style="color:#fcd307;">
                        <?php echo $hero['para_yellow'];?>
                    </span> 
                </p>                
            </div>
           
        </div>   
    </div>  
</div>
<?php }?>

<!-- yellow line -->
<div class="yellowline">
    <div class="container">
        <div class="row">
            <div class="col-md-12 yellowline_text text-center"><?php echo get_field('yellow_section');?></div>
        </div>
    </div>
</div>

 <!-- ========================================
Main Banner Sectionr End
======================================== -->

<!-- say Customer -->
<div class="say_customer">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">  
                <div class="saytitle">
                    <?php echo get_field('slider_title');?>
                </div>
            </div>
        </div>
        
        <!-- Click-Carousel -->
        
        <div class="container-fluid">
            <div class="row slider">
                <?php
                $args = array(
                    'post_type' => 'card',
                    'post_status' => 'publish',
                    'posts_per_page' => '6'
                );
                $cards_loop = new WP_Query( $args );
                if ( $cards_loop->have_posts() ) :
                    while ( $cards_loop->have_posts() ) : $cards_loop->the_post();
                        // $cards_loop->the_post();
                        $cardid = get_the_id();
                        // Set variables
                        $name = get_post_meta($cardid,'name',true);
                        $image = get_post_meta($cardid,'img',true);
                        //$image = get_post_meta($cardid,'101',true);
                        $description = get_post_meta($cardid,'description',true);
                        $rating = get_post_meta($cardid,'ratting',true);
                        $color = get_post_meta($cardid,'color',true);
                        ?>
                        <div class="col-md-12">
                            <div class="details">
                                <div class="row bg-<?php echo $color; ?>">
                                    <div class="col-sm-8 p-2">
                                        <p class="mb-0 card-font text-white font-styled"><?php echo $description; ?></p>              
                                        <p class="text-end m-auto text-white"><?php echo $name; ?></p>
                                        <p class="img-fluid"><?php echo $rating; ?></p>
                                    </div>
                                    <div class="col-sm-4 m-auto p-2">
                                        <img src="<?php echo $image;  ?>" alt="" class="dog-height img-fluid-dog m-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    endwhile;
                endif;
                // Reset Post Data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    
        <div class="container px-5 pb-5">
            <div class="row text-center">
                <div class="col-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-Review.png" alt="" class="img-fluid">
                </div>
                <div class="col-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/truest-pilot.png" alt="" class="img-fluid">
                </div>
                <div class="col-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/google_review.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
</div>
    
    


<!-- Problem -->

<?php 
    $problem_section = get_field('problem_section');
?>

<div class="problem">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">  
            <div class="problem_heading"><?php echo $problem_section['name']?></div>
            </div>    
        </div>

        <div class="row px-lg-5 pt-4 mb-5 align-items-end">
            <div class="col-md-7 pt-4 ">
            <div class="problemtext"><?php echo $problem_section['description']?></div>

             <div class="problemimg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/problem-1.png" alt="" class="img-fluid mt-5">
             </div>

            </div>


            <div class="col-md-5 pt-4"> <img src="<?php echo get_template_directory_uri(); ?>/img/problem-2.png" alt="" class="img-fluid">   </div>
        </div>
    
        <div class="row ">
            <div class="col-md-12">  
                <div class="problem_heading"><?php echo $problem_section['notice']?></div>
            </div>    
        </div>    
    </div>
</div>

<!-- Solution -->
<?php $solution_section = get_field('solution_section'); ?>
    <div class="solution">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">  
                    <h1 class="solution_heading">
                        <?php echo $solution_section['title'];?>
                        <span style="font-size:20px;"> TM</span>  
                    </h1>
                </div>    
            </div>
    
            <div class="row px-lg-0 pt-4 align-items-end">
                <div class="col-md-7 mr-5 pr-5">
                <h2 class="solution_heading text-uppercase"><?php echo $solution_section['heading'];?></h2>  
                <div class="solutiontext pb-5">
                <?php echo $solution_section['description'];?>
                 </div>
    
                 <div class="solutionimg pb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/solutions-1.png" alt="" class="img-fluid ">
                 </div>
    
                </div>
    
    
                <div class="col-md-5"> <img src="<?php echo get_template_directory_uri(); ?>/img/solutions-2.png" alt="" class="img-fluid">   </div>
            </div>    
        </div>
        
        
        
        
        </div>   

<!-- HAPPIER -->
<?php $happier = get_field('happier');?>
 <div class="happier">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-12 mb-5">  
                    <div class="happier_dog"><?php echo $happier['name'];?></div>
                </div>
        
                <div class="col-md-4 mt-2">     
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-1.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> 89.2% MORE DIGESTIBLE </div>
                            <p class="happier_text px-2"> See and smell the difference with smell, easy to pick, almost odourless poos. </p>
                        </div>
                    </div>
        
        
                    
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-2.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> PROTECTED PROTEINS </div>
                            <p class="happier_text px-2"> Protected proteins are more nutritious and easier to digest. It's double the benefits. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-3.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> TASTIER </div>
                            <p class="happier_text px-2"> Like a show cooked stew, freshPRES preserves the smell and taste of our real-food ingredients. Try the tastetest challenge today.  </p>
                        </div>
                    </div>
        
                </div>
        
        
        
        
                <div class="col-md-4 m-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/main_happier_dog.png" alt="" class="img-fluid">
                    <div class="col-md-12 text-center">  
                        <div class="button">
                            <button type="button" class="btn btn-warning">LEARN MORE</button>
                        </div>
                        <div class="happier_icon mt-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/payment_icons.png" alt="" class="img-fluid">
                        </div>
        
                    </div>
                </div>
        
                <div class="col-md-4 mt-2">
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-4.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> NUTRIENTS RICH </div>
                            <p class="happier_text px-2"> Low temperatures preserves more vitamins,minerals and essential fatty acids for healthier, happier dogs for life. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-5.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> HYPOALLERGENIC </div>
                            <p class="happier_text px-2"> Made without chicken,beef or other allergy and itchy, scratchy skin inducing ingredients. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/happier-icon-6.png" alt="" class="img-fluid img_icons">
                        </div>
                        <div class="col-md-9">
                            <div class="healthier mt-1 px-2"> GRAIN FREE. RUBBISH FREE  </div>
                            <p class="happier_text px-2"> No added grains, gluten, artificial preservatives, colourings and other nasties. Goodness in. Goodness out. </p>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-12">  
                    <div class="container">
                       <div class="happier_dog mt-3 px-lg-4"><?php echo $happier['heading']?></div>
                    </div>
                </div>
        
            </div>
        </div>
</div>


<!-- EXPECT -->
<?php $expect = get_field('expect');?>
<div class="expect">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 my-2">  
                <div class="expect_days"><?php echo $expect['name']?></div>
            </div>    
        </div>
    </div>

    <div class="container">


            <div class="row expectyellow p-3 m-2 mt-4 d-flex ">            
                        <div class="col-md-2 mt-4"> 
                        <div class="expecticon"> <img src="<?php echo get_template_directory_uri(); ?>/img/expect-1.png" alt="" class="img-fluid"> </div>
                        </div>

                        <div class="col-md-10 pl-2"> 
                        <h1 class="week"> WEEK 1 </h1>
                        <h2 class="week"> Licked clean, empty bowls </h2>

                            <div class="testimonial">
                            <p>“First time I've ordered this food for my dogs and so far they are loving it! I'm 
                                transitioning them from their old food and they are picking out the Angell PetCo. 
                                biscuits and leaving the rest”.</p>                        
                                <p class="tesimtonialname"> Kate and Barnie & Maisie </p>
                                <p class="ratingd"> <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid"></p>
                            </div>
                        </div>         
            </div>



            <div class="row expectyellow p-3 m-2 mt-4">            
                    <div class="col-md-2 mt-4"> 
                    <div class="expecticon"> <img src="<?php echo get_template_directory_uri(); ?>/img/expect-2.png" alt="" class="img-fluid"> </div>
                    </div>

                    <div class="col-md-10 pl-2"> 
                    <h1 class="week"> WEEK 2 </h1>
                    <h2 class="week"> MORE DIGESTIBLE, LEADING TO Small, Odourless, Easy to Pick Up PooS </h2>

                        <div class="testimonial">
                        <p>“What a discovery!! My dog has suffered with a fickle stomach for years....and fussy 
                            about what he ate too...(probably knew what was coming). Then I discovered 
                            Angell PetCo.....not only does he love his meals now ! But we have perfect "poo" !!”</p>                        
                            <p class="tesimtonialname"> Karen and Scout </p>
                            <p class="ratingd"> <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid"></p>
                        </div>
                    </div>         
            </div>


            <div class="row expectyellow p-3 m-2 mt-4">            
                <div class="col-md-2 mt-4"> 
                <div class="expecticon"> <img src="<?php echo get_template_directory_uri(); ?>/img/expect-3.png" alt="" class="img-fluid"> </div>
                </div>

                <div class="col-md-10 pl-2"> 
                <h1 class="week"> WEEK 3 </h1>
                <h2 class="week"> The start of a super shiny, silky smooth coat </h2>

                    <div class="testimonial">
                    <p>“My long coat GSD loves this food. Her coat is amazing and stomach troubles she 
                        had prior to eating the Superior Adult have since disappeared.”</p>                        
                        <p class="tesimtonialname"> Amanda and Jessie </p>
                        <p class="ratingd"> <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid"></p>
                    </div>
                </div>         
            </div>


            <div class="row expectyellow p-3 m-2 mt-4">            
                <div class="col-md-2 mt-4"> 
                <div class="expecticon"> <img src="<?php echo get_template_directory_uri(); ?>/img/expect-4.png" alt="" class="img-fluid"> </div>
                </div>

                <div class="col-md-10 pl-2"> 
                <h1 class="week"> For life </h1>
                <h2 class="week"> Slim, happier, healthier dog and fewer vet visits </h2>

                    <div class="testimonial">
                    <p>“Roxy's been on the Superior Adult for 5 years. Vet says shes in tip top condition. Verypleased with her. Teeth are very good. Perfect weight, heart, ears, eyes etc Said he wished more dogs that came in were in the same condition. Thanks Lynsey and team"</p>                        
                        <p class="tesimtonialname"> Sheila and Roxy </p>
                        <p class="ratingd"> <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid"></p>
                    </div>
                </div>         
            </div>


            <div class="row">
                <div class="col-md-12 my-2 mt-5">  
                    <div class="expect_days"><?php echo $expect['heading']?></div>
                </div>    
            </div>


    </div>



   
</div>



<!-- MIRACLE -->
<?php $miracle = get_field('miracle');?>
<div class="miracle">
    <div class="container-fluid px-lg-4 ">
        <div class="row">
            <div class="col-md-12 mb-5 px-5">  
                <div class="miracle_nutrition"><?php echo $miracle['title_a'];?><br><?php echo $miracle['title_b'];?></div>
                <div class="miracle_text pt-4"><?php echo $miracle['name'];?></div>
            </div>
        
            <div class="row m-1">
                <div class="col bg-light m-3">
                   <div class="miracle_line  p-2"> SKIN AND HOT SPOTS </div>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/dog-problem-img-1.png" alt="" class="img-fluid">
                   <div class="miracle_bramble  p-2"> Heather Green & Bramble </div>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid p-2">
                   <div class="miracle_food  p-2"> Our Golden Oldie will be 15 in April. As a youngster, she hadterrible hot spots 
                    and itchy skin but since making the switch shehasn't looked back. Proof you are what you eat. Her skin is great and her coat superb. The vet calls her the 'Wonder Dog' she's in such great 
                    condition. I've 
                    recommended your foodto so many dog owners and they’re
                    always  amazed by it. </div>
                </div>

                <div class="col col-half-offset bg-light m-3">
                    <div class="miracle_line p-2"> DELICATE TUMMY </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog-problem-img-2.png" alt="" class="img-fluid">
                    <div class="miracle_bramble p-2"> Charlotte Leng & Jasper </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid p-2">
                    <div class="miracle_food  p-2">  I love your food! 
                        Jasper, an assistance
                        dog that didn't make
                        the grade and he had 
                        a very troublesome
                        tummy. I tried other brands trying to find anything that would help. It was so distressing. I eventually
                        found your food and noticed an improvement straight away. Jasper went from watery poop
                        everyday to small and 
                        normal. He's now so 
                        healthy I would never 
                        change. In fact I have 
                        recommend your food 
                        to several of my friends
                        with dogs and they all 
                        love it. </div>
                </div>

                <div class="col col-half-offset bg-light m-3">
                    <div class="miracle_line p-2"> FUSSY EATER </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog-problem-img-3.png" alt="" class="img-fluid">
                    <div class="miracle_bramble  p-2"> Heather Green & Bramble </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid p-2">
                    <div class="miracle_food  p-2">  Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back. Proof you are what you eat. Her skin is great and her coat superb. The vet calls her the 'Wonder Dog' she's in such great 
                        condition. I've 
                        recommended your foodto so many dog owners and they’re
                        always  amazed by it. </div>
                </div>

                <div class="col col-half-offset bg-light m-3 ">
                    <div class="miracle_line p-2"> BREATH </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog-problem-img-4.png" alt="" class="img-fluid">
                    <div class="miracle_bramble  p-2"> Heather Green & Bramble </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid p-2">
                    <div class="miracle_food  p-2">  Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back. Proof you are what you eat. Her skin is great and her coat superb. The vet calls her the 'Wonder Dog' she's in such great 
                        condition. I've 
                        recommended your foodto so many dog owners and they’re
                        always  amazed by it. </div>
                </div>

                <div class="col col-half-offset bg-light m-3">
                    <div class="miracle_line p-2"> DIGESTIVE </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog-problem-img-5.png" alt="" class="img-fluid">
                    <div class="miracle_bramble  p-2"> Heather Green & Bramble </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid p-2">
                    <div class="miracle_food  p-2">  Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back. Proof you are what you eat. Her skin is great and her coat superb. The vet calls her the 'Wonder Dog' she's in such great 
                        condition. I've 
                        recommended your foodto so many dog owners and they’re
                        always  amazed by it. </div>
                </div>

                <div class="col-md-12 text-center mt-5">  
                    <div class="button">
                        <button type="button" class="btn miracle_btn">LEARN MORE</button>
                    </div>
                    <div class="miracle_icon mt-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/payment_icons.png" alt="" class="img-fluid">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/customer-1.png" alt="" class="img-fluid m-1">
    
                </div>

            </div>
        </div>    
    </div>
</div> 




<!-- results -->

<div class="results">
    <div class="container-fluid px-lg-4 ">
        <div class="row">
            <div class="col-md-12 mb-5">  
                <div class="results_dog"><?php echo get_field('real_dogs');?></div>
            </div>
            <div class="row m-0">
                <div class="col-md-4">
               
                  <div class="results_line p-4 m-3 bg-light">

                    Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Alison

                  </div>
                  <div class="results_line p-4 m-3 bg-light">

                     Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by David


                  </div>
                  <div class="results_line p-4 m-3 bg-light">

                     Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Michelle

                  </div>
                  <div class="results_line p-4 m-3 bg-light">

                   Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                        and itchy skin but since making the switch shehasn't looked back.<br>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Elizbieta

                  </div>
                    
                </div>


                <div class="col-md-4">

                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Frederique

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                        Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Molly

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Sarah

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                        Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Joan

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Minnies mum Jade

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by David

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid m-1">by Mrs. Applerley

                    </div>
                    <div class="results_line p-4 m-3 bg-light">

                         Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.Our Golden Oldie will be 15 in April. As a youngster, she had terrible hot spots 
                            and itchy skin but since making the switch shehasn't looked back.<br>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rate.png" alt="" class="img-fluid ">by Elizbita

                    </div>

                </div>


            </div>
        </div>
    </div>        
</div>



<?php $our_story = get_field('our_story');?>
<div class="story story-bg">
    <div class="container text-white">
     
            <h2 class="text-center font-styled story-heading pb-5"><?php echo $our_story['title'];?></h2>
    
        <div class="row px-4">
            <div class="col-md-8 pt-3">
                <p class="">We just presumed we’d feed Ziggy raw. Our new curless Cockapoo puppy. 
                    It’s what his breeder recommended. Its reviews were great. And our neighbour 
                    swore it transformed Luna, her working Lab. </p>
                <p>But then we discovered its risks. ‘Over half raw dog foods contaminated with
                    traces of deadly bacteria,’ like salmonella, listeria or e-coli*. </p>
                <p class="pb-5">And we knew raw wasn’t an option for us.</p>
                <p>You see, one of our daughters is immunosuppressed. Even if we could avoid
                    cross-contamination, Ziggy could still infect her with just a lick or a kiss.</p>
                <p>How could we stop that? </p>
                <p class="pb-5">Undeterred, we were determined to find a healthy, affordable but safe 
                    alternative. So everyone could thrive. </p>
                <p>But after hunting high and low and wasting a fortune on premium, 
                    prescription, pre-biotic, novel protein, high protein and hypoallergenic 
                    recipes, we were no further forward. </p>
                <p>His poo’s were like brown Wr Whippy’s. </p>
                <p>Then a chance meeting with the Angell’s, our angels, changed everything. </p>
                <p class="pb-5">Robert and Jill were two veterans of the dog food industry who’d already 
                    revolutionised the pet food industry once. They were the first to use Fish as a main protein source. And they produced the first ever fish skin dental 
                    treats in their kitchen Aga. They won many awards. </p>
                <p>
                    And with their help, we set out to revolutionise the dog food industry again. 
                    To find a new way to do dry dog food. A better way. One that offered the 
                    health benefits of raw, but without the risks, cost or fuss. </p>
                <p><b>The freshPRES</b>™ way.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/story_dog-1.png" alt="" class="img-fluid mt-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/story_dog-2.png" alt="" class="img-fluid mt-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/story_dog-3.png" alt="" class="img-fluid mt-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/story_dog-4.png" alt="" class="img-fluid mt-4">
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-6 mt-2 mb-2 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_story.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>




<!-- FREQUENTLY ASKED QUESTIONS -->
<?php $frequently_asked = get_field('frequently_asked');?>
<div class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12 yellowline_text text-center"> <h1><?php echo $frequently_asked['name'];?></h1>  </div>
        </div>
    </div>

            <div class="container">
              
                <div class="accordion">
                  <dl>
                    <dt>
                      <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">  What’s different about ANGELL PETCO DOG food? </a>
                    </dt>
                    <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                      <p>Lorem ipsum dolor sit amet, consectetur <a href="https://www.google.com">Test</a>adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                      <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
                    </dd>
                    <dt>
                      <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                        What’s special about the ingredients that you use?</a>
                    </dt>
                    <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                   
                    </dd>
                    <dt>
                      <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                        Does your dog food contain wheat?
                      </a>
                    </dt>
                    <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                      <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
                    </dd>
                  </dl>
                </div>
              </div>
        
   
              <div class="container-fluid mt-5 pt-5">
                <div class="row">
                    <div class="col-md-4"> 
                    <div class="bg-background1 align-items-end">  </div>
                    </div>

                    
                    <div class="col-md-8"> 
                        <div class="row">
                            <div class="col-md-1 mb-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/White-env.png" alt="" class="img-fluid img_icons">
                            </div>
                            <div class="col-md-10 mt-3">
                                <p class="address1 text-wrap"><?php echo $frequently_asked['address'];?></p>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-1 mb-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/white-h.png" alt="" class="img-fluid img_icons">
                            </div>
                            <div class="col-md-10 mt-3">
                                <p class="address1"><?php echo $frequently_asked['contact'];?></p>
                            </div>
                        </div> 



                     </div>

                </div>
            </div>




    

</div>


<!-- Confidence -->
<?php $confidence = get_field('confidence');?>
<div class="confidence">
    <div class="container-fluid px-lg-4 ">
        <div class="row">
            <div class="col-md-12 mb-5">  
                <div class="confidence_dog"><?php echo $confidence['title'];?></div>
            </div>

            <div class="row">
                <div class="col-md-5 text-end">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/28days.png" alt="" class="img-fluid ">
                </div>
                <div class="col-md-6 confidence_line pt-4">
                    <?php echo $confidence['heading_one'];?><br>
                    <?php echo $confidence['heading_two'];?>
                </div>
            </div>
           <div class="row">
            
            <div class="col-md-12 confidence_text pt-5">
                <?php echo $confidence['description_one'];?><br> 
                <?php echo $confidence['description_two'];?></div>
            </div>
        </div>
    </div>  
</div>



<?php echo get_footer() ?> 