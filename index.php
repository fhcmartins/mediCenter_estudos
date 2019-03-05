<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <script src="main.js"></script>

    <title>MediCenter</title>
</head>
<body>
    <header> <!-- Irá fazer parte do layout do cabeçalho. -->
        <div class="container"> <!-- Irá servir como padrão de alinhamento para todo o site. -->
            <div class="logo">
                <a href=""><img src="assets/images/logo_clinica.png" alt="Logo MediCenter" width="200px"></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li class="active"><a href="">HOME</a></li> <!-- O class active irá mostar qual o menu está ativo -->
                        <li><a href="">BLOG</a></li>
                        <li><a href="">PAGES</a></li>
                        <li><a href="">DEPARTMENTS</a></li>
                        <li><a href="">TIMETABLE</a></li>
                        <li><a href="">GALERY</a></li>
                        <li><a href="">CONTACT</a></li>
                        <li><a href="">SHOP</a></li>
                    </ul>
                
                </nav>
            </div>
        </div>
    </header>

    <section id="banner"> <!-- Quaisquer sessões do site ficão dentro das tags section. -->
        <div class="container column">
            <!-- As duas divs abaixo deverão ter altura, só que somente a segunda terá um tamnho
            fixo. Logo, a primeira terá o seu tamanho variável, trabalhando de acordo com o tamnho
            da segunda div. -->
            <div class="banner_headline">
                <h1>Top notch experiense</h1>
                <h2>Medicenter is a responsive template perfect for all screen sizes</h2>
            </div>
            <div class="banner_options">
                <div class="banner1">
                    <div class="banner_title">Emergency Case</div>
                    <div class="banner_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet metus in velit mollis
                        aliquam non ac ipsum. Praesent vestibulum congue ante, vitae euismod massa venenatis eu. Donec varius dignissim nibh
                        id blandit.</div>
                    <a href="">Read More</a>
                </div>
                <div class="banner2">
                    <div class="banner_title">Doctors timetable</div>
                    <div class="banner_desc">Proin mattis rutrum enim eleifend laoreet. Suspendisse malesuada, dui sed tempus efficitur,
                        ex ante venenatis mi, eu suscipit ipsum nisl et neque. Sed aliquam justo quis est lobortis, vel imperdiet tellus porttitor.</div>
                    <a href="">Read More</a>
                </div>
                <div class="banner3">
                    <div class="banner_title">Opening Hours</div>
                    <div class="hours_desc">
                        <div class="week_days">
                            Mounday - Thursday
                        </div>
                        <div class="schedules">
                            8:00 - 17:00
                        </div>
                    </div>
                    <div class="hours_desc">
                        <div class="week_days">
                            Friday
                        </div>
                        <div class="schedules">
                            9:00 - 18:00
                        </div>
                    </div>
                    <div class="hours_desc">
                        <div class="week_days">
                            Saturday
                        </div>
                        <div class="schedules">
                            9:30 - 17:30
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="geral">
        <div class="container">
            <section>
            <div class="widget_title">
                        <div class="widget_title_text">Latest News</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body">
                        xxx
                    </div>
            </section>
            <aside>
                <div class="widget"> <!-- Irá "representar" os titulos das sessões e tbém servirá de base para a section superior.. -->
                    <div class="widget_title">
                        <div class="widget_title_text">Departments</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body">
                        xxx
                    </div>

                    <div class="widget_title">
                        <div class="widget_title_text">Make an Appointment</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body">
                        xxx
                    </div>
                </div>
            </aside>
        </div>
    </section>
</body>
</html>