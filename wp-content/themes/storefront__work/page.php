<?php
/* 
	The template for displaying all pages
*/

get_header();
?>

 <section class="main-screen">
    <div class="swiper my-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="swiper-slide__image" src="<?php the_field('first_slider_image'); ?>" alt="first slide">
        </div>
        <div class="swiper-slide">
          <img class="swiper-slide__image" src="<?php the_field('second_slider_image'); ?>" alt="second slide">
        </div>
        <div class="swiper-slide">
          <img class="swiper-slide__image" src="<?php the_field('third_slider_image'); ?>" alt="third slide">
        </div>
      </div>
    <div class="swiper-pagination"></div>
    </div>
  </section>
  <section class="products">
    <div class="container">
      <h1 class="products__title">
        <?php the_field('products_title'); ?>
      </h1>
      <p class="products__text">
        <?php the_field('products_sub_title'); ?>
        <span class="products__span">
          <?php the_field('products_sub_title_hidden'); ?>
        </span>
      </p>
      <button class="products__button">
        <?php the_field('products_read_more_button'); ?>
      </button>
      <div class="products__items">
        <div class="products__items-item">
          <a href="#" class="products__items-link">
            <div class="products__items-wrap">
              <img class="products__items-image" src="<?php the_field('first_product_image'); ?>" alt="Eyebrow shadow">
            </div>
            <h3 class="products__items-title">
              <?php the_field('product_name'); ?>
            </h3>
            <div class="products__items-info">
              <div class="products__items-label">
                <?php the_field('product_quantity'); ?>
              </div>
              <div class="products__items-price">
                <span class="products__items-price__span">
                  ₪
                </span>
                <p class="products__items-price__num">
                  <?php the_field('product_price'); ?>
                </p>
              </div>
            </div>
          </a>
          <button class="products__item-btn">
            <?php the_field('buy_button'); ?>
          </button>
        </div>
        <div class="products__items-item">
          <a href="#" class="products__items-link">
            <div class="products__items-wrap">
              <img class="products__items-image products__items-image--inner" src="<?php the_field('second_product_image'); ?>" alt="Aqua primer">
            </div>
            <h3 class="products__items-title">
              <?php the_field('product_name_two'); ?>
            </h3>
            <div class="products__items-info">
              <div class="products__items-label products__items-label--disable">
                <?php the_field('product_quantity_two'); ?>
              </div>
              <div class="products__items-price">
                <span class="products__items-price__span">
                  ₪
                </span>
                <p class="products__items-price__num">
                  <?php the_field('product_price_two'); ?>
                </p>
              </div>
            </div>
          </a>
          <button class="products__item-btn">
            <?php the_field('buy_button'); ?>
          </button>
        </div>
        <div class="products__items-item">
          <a href="#" class="products__items-link">
            <div class="products__items-wrap">
              <img class="products__items-image" src="<?php the_field('third_product_image'); ?>" alt="Aqua primer">
            </div>
            <h3 class="products__items-title">
              <?php the_field('product_name'); ?>
            </h3>
            <div class="products__items-info">
              <div class="products__items-label">
                <?php the_field('product_quantity'); ?>
              </div>
              <div class="products__items-price">
                <span class="products__items-price__span">
                  ₪
                </span>
                <p class="products__items-price__num">
                  <?php the_field('product_price'); ?>
                </p>
              </div>
            </div>
          </a>
          <button class="products__item-btn">
            <?php the_field('buy_button'); ?>
          </button>
        </div>
      </div>
    </div>
  </section>

<?php 
  $name = $email = $gender = $comment = $website = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php 
  get_footer();
?>