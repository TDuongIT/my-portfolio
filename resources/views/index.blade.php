<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/card.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img src="{{asset('uploads/2.png')}}" class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">自己紹介</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">経歴</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">スキルセット</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">制作実績</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacts">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                        トートゥン
                        <span class="text-primary">ズオン</span>
                    </h2>
                    <div class="subheading mb-5">
                        大阪府枚方市高田１丁目４－７－１ · 070-9072-5251 ·
                        <a href="mailto:name@email.com">tod25504@email.com</a>
                    </div>
                    <p class="lead mb-5">はじめまして。ベトナム出身のトーと申します。23歳です。
                        Thuy Loi Universityの情報技術学部を卒業しました。
                        IT分野で日本で働きたいと考えております。日本で働くためには日本語力が一番大切だと考え、そのため日本語をしっかり身につけるために、卒業後すぐに留学生として2024年10月来日し、日本語学校で勉強しています。
                        現在は約1年半、焼肉店でアルバイトをしており、日本語力を実践的に高めるために、日本人だけ環境で働いています。
                        その経験を通して、チームワークの大切さや、日本の働き方について少しずつ学んできました。
                        本日はどうぞよろしくお願いいたします。
                    </p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            {{-- <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">インターシップ</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" /> --}}
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">経歴</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">ホンクアン高校</h3>
                            {{-- <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p> --}}
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2017年9月 - 2020年8月</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">トゥイロイ大学</h3>
                            <div class="subheading mb-3">情報技術学部</div>
                            <p>主な学習内容: プログラミング、データベース、ネットワーク、アルゴリズムなどITの基礎を幅広く学びました。</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2020年10月 - 2024年10月</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">OCEAN TECH CO., LTD（インターン）　</h3>
                            <div class="subheading mb-3">フロントエンド開発・コーディング担当</div>
                            <p>主な学習内容: HTML / CSS / JavaScript を用いて、デザインデータをもとにしたWebページのコーディングを主に担当しました。</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2024年1月 - 2024年4月</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">大阪バイオメディカル専門学校</h3>
                            <div class="subheading mb-3">日本語学科</div>
                            <p>主な学習内容: 日本語能力試験（JLPT）対策、読解、聴解、語彙、文法、会話。</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2024年10月 - 2026年3月</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">大阪バイオメディカル専門学校</h3>
                            <div class="subheading mb-3">日本文化教養学科</div>
                            <p>主な学習内容: 日本のビジネスマナー、異文化コミュニケーション、高度な日本語表現、日本社会の仕組み。</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2026年4月 - 2027年3月　（卒業予定）</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">スキルセット</h2>
                    <div class="subheading mb-3">技術スタック | 言語・FW・ツール</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="devicon-php-plain colored" style="font-size: 3rem;"></i></li>
                        
                        <li class="list-inline-item"><i class="devicon-laravel-original colored" style="font-size: 3rem;"></i></li>
                        
                        <li class="list-inline-item"><i class="devicon-mysql-plain-wordmark colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-html5-plain colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-css3-plain colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-bootstrap-plain colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-javascript-plain colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-github-plain colored" style="font-size: 3rem;"></i></li>
                        <li class="list-inline-item"><i class="devicon-figma-plain colored" style="font-size: 3rem;"></i></li>
                    </ul>
                <div class="subheading mb-3">語学・資格</div>
                <ul class="fa-ul mb-0">
                    <li class="mb-2">
                        <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                        <strong>日本語能力試験 (JLPT) N2 合格</strong>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                        <strong>TOEIC 535点 取得</strong>
                    </li>
                </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="projects">
                <div class="resume-section-content">
                <h2 class="mb-5">制作実績</h2>
                <!-- Card Start -->
                <div class="card">
                    <div class="row ">

                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title">ジュエリーECサイト管理システム</h4>
                            
                            <p class="card-text">
                                <strong>【プロジェクト概要】</strong><br>
                                Web開発の根幹である<strong>MVCアーキテクチャ</strong>の仕組みを深く理解するため, フレームワークを使わずに<strong>純粋なPHP（Pure PHP）</strong>で構築したECサイトです。
                            </p>

                            <p class="card-text">
                                <strong>【こだわり・学習の目的】</strong><br>
                                ルーティング、コントローラーの制御、モデルによるデータベース連携など, Webアプリケーションの内部動作を一から自作しました。これにより, 大規模フレームワーク（Laravel等）を使用する際の基盤となる知識を習得しました。
                            </p>

                            <p class="card-text">
                                <strong>【技術スタック】</strong>
                                <ul style="font-size: 0.9rem; list-style-type: none; padding-left: 0;">
                                    <li><i class="fas fa-code text-primary"></i> <strong>Backend:</strong> PHP (Pure MVC Implementation)</li>
                                    <li><i class="fas fa-database text-primary"></i> <strong>Database:</strong> MySQL (PDO)</li>
                                    <li><i class="fas fa-laptop-code text-primary"></i> <strong>Frontend:</strong> Bootstrap 5 / JavaScript</li>
                                </ul>
                            </p>

                            <div class="mt-auto">
                                <a href="https://github.com/ToTungDuong/jewelry_shop.git" target="_blank" class="btn btn-outline-dark">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel start -->
                    <div class="col-md-5">
                        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselTest" data-slide-to="1"></li>
                                <li data-target="#CarouselTest" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.1.png')}}" alt="Jewelry Shop 1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.2.png')}}" alt="Jewelry Shop 2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.3.png')}}" alt="Jewelry Shop 3">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of carousel -->
                    </div>
                </div>
                <!-- End of card -->
                <hr class="my-4" style="border-top: 1px solid #eee;">
                                <!-- Card Start -->
                <div class="card ">
                    <div class="row ">

                    <div class="col-md-7 px-1">
                        <div class="card-block px-6">
                            <h4 class="card-title">母子用品販売サイト</h4>
                            
                            <p class="card-text">
                                <strong>【プロジェクト概要】</strong><br>
                                母子用品（マタニティ・ベビー用品）に特化した、個人で開発したECサイトです。Laravelフレームワークを活用し、一般ユーザー向けの購入フローから管理者向けの在庫・売上管理まで、実用的な機能を一通り構築しました。
                            </p>

                            <p class="card-text">
                                <strong>【こだわり・学習の目的】</strong><br>
                                Laravelフレームワークの基本構造を習得するために開発しました。Eloquent ORMによるデータベース操作や、Middlewareを用いた認証・権限管理（Admin/Userの分離）など、フレームワークの標準的な設計手法を実践しました。
                            </p>

                            <p class="card-text">
                                <strong>【技術スタック】</strong>
                                <ul style="font-size: 0.85rem; list-style-type: none; padding-left: 0;">
                                    <li><i class="fas fa-code text-success"></i> <strong>Backend:</strong> PHP (Laravel Framework)</li>
                                    <li><i class="fas fa-database text-success"></i> <strong>Database:</strong> MySQL (Eloquent ORM)</li>
                                    <li><i class="fas fa-laptop-code text-success"></i> <strong>Frontend:</strong> Bootstrap 5 / JavaScript / jQuery</li>
                                </ul>
                            </p>

                            <div class="mt-auto">
                                <a href="https://github.com/ToTungDuong/maternity_shop.git" target="_blank" class="btn btn-outline-dark btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel start -->
                    <div class="col-md-5">
                        <div id="CarouselBaby" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#CarouselBaby" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselBaby" data-slide-to="1"></li>
                                <li data-target="#CarouselBaby" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.1.png')}}" alt="Jewelry Shop 1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.2.png')}}" alt="Jewelry Shop 2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('uploads/project1.3.png')}}" alt="Jewelry Shop 3">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#CarouselBaby" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarouselBaby" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of carousel -->
                    </div>
                </div>
                <!-- End of card -->

                     
                </div>
            </section>
            <hr class="m-0" />

            <section class="resume-section" id="contacts"> <div class="resume-section-content">
            <h2 class="mb-5">お問い合わせ</h2>
            <p class="lead mb-5">
                ご興味をお持ちいただけましたら、以下の連絡先よりお気軽にお問い合わせください。<br>
            </p>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-contact mr-4 me-4">
                            <i class="fas fa-envelope text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <div>
                            <div class="subheading mb-0">メール</div>
                            <span>tod25504@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-contact mr-4 me-4">
                            <i class="fas fa-mobile-alt text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <div>
                            <div class="subheading mb-0">携帯電話</div>
                            <span>070-9072-5251</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 border rounded bg-light">
                <p class="mb-0 text-secondary" style="font-size: 0.9rem;">
                    <i class="fas fa-info-circle mr-2"></i> 
                    現在は新しいチャンスを探しております。お仕事のご依頼やカジュアルな面談など、いつでも歓迎いたします。
                </p>
            </div>
        </div>
    </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>