<?php get_header();?>
<?php /* Template name: index */?>

<section id="home">
        <div class="body"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-home">
                        <h1 id="typed"></h1>
                        <a href="#contato" class="rolagem">
                            <button type="button" class="btn-aqua">Fale comigo</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Skills</h2>

                    <div class="app">
                        <ul class="session-skill hs">
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-html5"></i>
                                    <p>HTML5</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-css3-alt"></i>
                                    <p>CSS3</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-js"></i>
                                    <p>JavaScript</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-sass"></i>
                                    <p>Sass</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-gulp"></i>
                                    <p>Gulp</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-wordpress"></i>
                                    <p>Wordpress</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-vuejs"></i>
                                    <p>Vue.js</p>
                                </div>
                            </li>
    
                            <li class="col-md-3">
                                <div class="card-skill">
                                    <i class="fab fa-angular"></i>
                                    <p>Angular</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projetos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Projetos</h2>

                    <div class="session-projetos carrossel-tipbar">
                        <div class="col-md-4">
                            <div class="card-projetos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/babyology.png" alt="Baby Ology">
                                <div class="link">
                                    <div>
                                        <a href="https://www.babyology.com.br" target="blank">Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-projetos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dok.png" alt="Dok calçados">
                                <div class="link">
                                    <div>
                                        <a href="https://www.dokcalcados.com.br" target="blank">Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-projetos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/institutofabioaraujo.png" alt="instituto Fábio Aráujo">
                                <div class="link">
                                    <div>
                                        <a href="https://www.institutofabioaraujo.com.br" target="blank">Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-projetos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/itspossible.png" alt="It's Possible">
                                <div class="link">
                                    <div>
                                        <a href="https://www.itspossible.com.br" target="blank">Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card-projetos">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/labof.png" alt="Labof">
                                <div class="link">
                                    <div>
                                        <a href="https://www.labof.com.br" target="blank">Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contato</h2>

                    <div class="session-contato">
                        <div class="col-md-6">
                            <div class="text-contato">
                                <p><i class="fas fa-envelope"></i> <a href="mailto:renanmurilosantosg@gmail.com" target="_blank">renanmurilosantosg@gmail.com</a></p>
                                <p><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5511979552650" target="_blank">(11) 97955-2650</a></p>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-contato">
                                <form action="">
                                    <div class="form-group">
                                        <label>Nome :</label>
                                        <input type="text" class="form-control" placeholder="Nome completo" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Endereço de email :</label>
                                        <input type="email" class="form-control" placeholder="Seu email" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Assunto :</label>
                                        <input type="text" class="form-control" placeholder="Assunto" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mensagem :</label>
                                        <textarea class="form-control" rows="5" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-enviar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-footer">
                        <p>© Todos os direitos reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php get_footer();?>