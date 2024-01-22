<?php
/*
Template Name: home

*/
?>
<?php get_header(); ?>
    <main>
        <section id="first-screen">
            <div class="d-flex flex-column justify-content-around first-screen">
                <img src="#" alt="logo">
                <p>BEST SOLUTION <br>
                    <span>FOR HOUSE and OFFICE</span>
                </p>
                <a href="#second-screen"><button>Узнать больше</button></a>
            </div>
        </section>
        <section id="second-screen">
                <div class="question">
                <div class="d-flex justify-content-around">
                    <p>Instalation of air conditioners</p>
                    <a href="#form"><button>Заказать звонок</button></a>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="pult" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.46.03.png" alt="pult">
                        </div>
                        <div class="col-md-6">
                            <h1>Установка и настройка кондиционеров в Санкт-Петербурге</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, reiciendis architecto ullam provident nobis dolore et esse dolores officia debitis, sapiente laboriosam iure. Asperiores sequi optio laboriosam fuga nisi adipisci maiores voluptates quasi. Qui totam minima laudantium maiores ipsam ratione distinctio voluptate tenetur? Distinctio eveniet sequi quasi adipisci, maxime ipsum voluptatem dolore laboriosam ad magnam vel? Iste, ut cupiditate? Tempora recusandae modi et laudantium, ratione ipsum quo optio rerum voluptatum! Unde earum magnam possimus, tenetur dolorem pariatur vitae maxime harum rerum ab eligendi officiis sequi eveniet perferendis vero facilis eum maiores. Expedita rerum tenetur adipisci! Eum nostrum nihil qui ab!</p>
                        </div>
                        </div>
                </div>
                
            
        </section>
        <section id="third-screen">
            <div class="container">
                <h3>Преимущества работы</h3>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="circle">
                            1
                        </div>
                        <h4>Преимущество</h4>
                        <p>Описание преимущества</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="fourth-screen">
            <h3>Наши проекты</h3>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.40.40.png" alt="example">
                </div>
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.40.56.png" alt="example">
                </div>
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.40.40.png" alt="example">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.44.02.png" alt="example">
                </div>
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.46.03.png" alt="example">
                </div>
                <div class="col-md-4 col-sm-12">
                    <img class="case" src="<?php bloginfo('template_url'); ?>/assets/images/Screenshot 2024-01-21 at 01.40.40.png" alt="example">
                </div>
            </div>
        </section>
        <section id="form">
            <div class="container">
                <h2>Свяжитесь с нами</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Заполните форму и мы свяжемся с вами в бдижайшее время</p>
                    </div>
                    <div class="col-md-6">
                        
                            <?php echo do_shortcode('[contact-form-7 id="4b57b50" title="Контактная форма 1"]') ?>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
<!--
    //<?php get_footer(); ?>-->