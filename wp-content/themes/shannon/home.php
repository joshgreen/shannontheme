<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shannon
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main max" role="main">
      <section class="hero">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="slide-Homeconstruction">
               <div class="text-box">
                 <h1>Saftey is not expensive.<br>It’s priceless.</h1>
                 <p class="intro">Our core business activities include groundworks and demolition, sewer and drainage, RC slabs and frames, finishes and fit-outs, rail infrastructure, rail track renewals, and utilities infrastructure.</p>
                 <a href="" class="button-yellow-chevron">Contact us</a>
             </div>
            </li>
            <li>
               <div class="slide-Homehaulage">
                <div class="text-box">
                  <h1>Your goods delivered on time. Everytime.</h1>
                  <p class="intro">Shannon Haulage was formed in 1994 and has provided both internal support to group companies and external specialist haulage and logistics services to the market across Europe.</p>
                  <a href="" class="button-yellow-chevron">Contact us</a>
              </div>
            </li>
            <li>
              <div class="slide-Hometraining">
               <div class="text-box">
                 <h1>Training, testing and certifications.</h1>
                 <p class="intro">At Shannon Training we specialise in delivering a wide range of training courses for construction companies, large or small, as well as complete training requirements for all industrial and commercial organisations such as road works.</p>
                 <a href="" class="button-yellow-chevron">Contact us</a>
             </div>
            </li>
          </ul>
        </div>
        <div class="custom-navigation">
          <a href="#" class="flex-prev" title="Previous"><img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="Previous"></a>
          <div class="custom-controls-container"></div>
          <a href="#" class="flex-next" title="Next"><img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="Next"></a>
        </div>
      </section>



        <section class="site-quote">
          <blockquote>
            <div>
              <h2>Our Mission</h2>
            </div>
            <div>
              <p>To deliver high quality construction services on time, within budget and in a safe manner through professionalism, pro-active management practices and clear commercial dealing.</p>
            </div>
          </blockquote>
        </section>

      <section class="story bg-white">
        <div class="story-image construction">
        </div>
        <div class="story-text">
          <h2 class="green">Shannon Construction</h2>
          <p>Shannon Construction Limited is an experienced Building & Civil Engineering Contractor serving the needs of Developers, Contractors and private Clients on medium to large sized projects.</p>

          <p>Our core business activities include groundworks and demolition, sewer and drainage, RC slabs and frames, finishes and fit-outs, rail infrastructure, rail track renewals, and utilities infrastructure.</p>
        </div>
      </section>

      <section class="story bg-black">
           <div class="bm">
             <div class="story-image haulage"></div>
           </div>
           <div class="tp">
             <div class="padding">
               <h2 class="white">Shannon Haulage</h2>
               <p class="white">Shannon Haulage was formed in 1994 and has provided both, internal support to group companies and external specialist haulage and logistics services to the market across Europe.</p>
               <p class="white">The current fleet is comprised of a variety of modern vehicles ranging from bulk haulage tippers to specialist lorry mounted logistics units and heavy plant transporters.</p>

             </div>
           </div>
      </section>

      <section class=" reverse">


      </section>

      <section class="story bg-white">
        <div class="story-image training">
        </div>
        <div class="story-text">
          <h2 class="green">Shannon Training</h2>
          <p>At Shannon Training we specialise in delivering a wide range of training courses for construction companies, large or small, as well as complete training requirements for all industrial and commercial organisations such as road works.</p>

          <p>As a company we pride ourselves on being market leaders in training with our training centre currently being one of the busiest in the London region!</p>
        </div>
      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php

get_footer();
