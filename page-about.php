<?php get_header(); ?>

<main role="main">
  <section class="about__header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="about__header__wrap">
            <li>
              <span>Creative Video Production</span>
            </li>
            <li>
              <span class="gif">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about-gif-1.gif" alt="">
              </span>
              <span>Corporate Videos</span>
            </li>
            <li>
              <span>& Factual Content</span>
              <span class="gif">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about-gif-2.gif" alt="">
              </span>
            </li>
            <li>
              <span>Global Network Of Resources</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="about__content">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>What we make</h2>
          <div class="about__content__wrap">
            <div class="about__content__card">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/video-thumb-1.jpg" alt="">
              <div class="about__content__text">
                <h3>Investor Roadshow Videos</h3>
                <div class="btn-gradient btn-gradient-sm">
                  <a href="<?php echo esc_url(site_url('/corporate-videos/')); ?>">Learn More</a>
                </div>
              </div>
            </div>
            <div class="about__content__card">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/video-thumb-2.jpg" alt="">
              <div class="about__content__text">
                <h3>Documentaries</h3>
                <div class="btn-gradient btn-gradient-sm">
                  <a href="<?php echo esc_url(site_url('/documentaries/')); ?>">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about__content__bg">
      <svg fill="none" height="720" viewBox="0 0 1440 720" width="1440" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <radialGradient id="a" cx="0" cy="0" gradientTransform="matrix(1440.99930342 329.00075065 -490.01542037 2146.23181865 20.4998 35.5)" gradientUnits="userSpaceOnUse" r="1">
            <stop id="stop1" offset="0" stop-color="#be6cb6"/>
            <stop id="stop2" offset="1" stop-color="#5c9bc7"/>
        </radialGradient>
        <clipPath id="b">
            <path d="m0 0h1440v720h-1440z"/>
        </clipPath>
        <g clip-path="url(#b)">
            <path d="m-12 717.5-10-361.5 633-239-95 270.5 945.5-385.5v354l-777 317.5 40.5-263z" fill="url(#a)"/>
        </g>
      </svg>
    </div>
  </section>
  <section class="about__team">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Relay Partners</h2>
          <div class="about__team__wrap">
            <div class="about__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/card-jim.jpg);">
              <div class="about__card__front">
                <div class="about__card__title">
                  <p>Jim Fields</p>
                  <p>Founder & CEO</p>
                </div>
              </div>
              <div class="about__card__back">
                <p>Jim, born and raised in California and now a fluent Chinese speaker, has been living in China for 15 years, perfectly blending his quintessential American filmmaking roots with a deep understanding of Chinese culture. With a vibrant social media presence, boasting over 50k followers across platforms like YouTube, Xiaohongshu, and Bilibili, Jim has made a name as a formidable influencer and content creator. His company, Relay Video, is renowned for its corporate documentaries and short films, earning global accolades. Their portfolio includes award-winning documentaries and promotional videos that have captivated audiences worldwide, showcasing Jim's expertise in storytelling that transcends borders and cultures.</p>
              </div>
            </div>
            <div class="about__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/card-abe.jpg);">
              <div class="about__card__front">
                <div class="about__card__title">
                  <p>Abram Sitzer</p>
                  <p>Executive Producer, Head of Content</p>
                </div>
              </div>
              <div class="about__card__back">
                <p>Abram is the head of content at Relay Video, leading an international team in the conceptualization and execution of long and short form documentary, commercial, and VR/MR projects. Prior to joining Relay, Abram was Director of Content for Discovery Networks. Abram has produced over 200 documentaries, including many that you're familiar with such as: Marooned, Surviving Africa, Finding Light in the Dark, First Man Out, Killers of the Cosmos. His work has been recognized at the Cannes Film Festival, Spikes, the New York Film Festival, the Asian TV Awards, the Asian Academy Creative Awards, and the Golden Bell Awards, including 6 best documentary awards, and over 25 nominations for best documentary.</p>
              </div>
            </div>
            <div class="about__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/card-sophia.jpg);">
              <div class="about__card__front">
                <div class="about__card__title">
                  <p>Sophia Pederson</p>
                  <p>Executive Producer & COO</p>
                </div>
              </div>
              <div class="about__card__back">
                <p>Sophia is an American business leader in China. Sophia began her journey in the video industry over a decade ago, honing her skills and expertise in both American and Chinese markets. As an executive producer for over 5 years, Sophia has led numerous successful projects, collaborating with renowned actors and directors on both sides of the Pacific. Her journey began with various roles in both local and international firms until she joined forces with her business partner, Jim Fields, at Relay Video in 2016. Sophia has successfully navigated the complexities of working in both American and Chinese contexts, bringing a unique blend of cultural understanding and industry expertise to her projects. Her collaborations with renowned Chinese tech giants like Full Truck Alliance, Meituan, Kuaishou, POP MART, and Tencent Music and Entertainment have solidified her reputation as a trusted partner in the industry. Sophia's dedication to excellence and her ability to foster positive and productive collaborations make her an invaluable asset to any production team.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>