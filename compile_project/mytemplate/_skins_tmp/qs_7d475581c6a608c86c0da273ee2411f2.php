<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>比特大作战</title>

    <!-- load stylesheets -->
    
    <!--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300,400">&lt;!&ndash; Google web font "Open Sans", https://www.google.com/fonts/specimen/Open+Sans &ndash;&gt;-->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css"> <!-- Font Awesome, https://fortawesome.github.io/Font-Awesome/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                       <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushBash.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushCpp.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushCSharp.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushCss.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushDelphi.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushDiff.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushGroovy.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushJava.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushPhp.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushPlain.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushPython.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushRuby.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushScala.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushSql.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushVb.js"></script>
    <script type="text/javascript" src="../include/js/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <link type="text/css" rel="stylesheet" href="../include/js/syntaxhighlighter/styles/shCore.css"/>
    <link type="text/css" rel="stylesheet" href="../include/js/syntaxhighlighter/styles/shThemeDefault.css"/>
    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery, https://jquery.com/download/ -->

    <script>
        $(document).ready(function () {
            $(document).on('change',"#select_type",function (event) {
                var sel_val = $("#select_type").val();
                if(sel_val == '' || sel_val == undefined)
                {
                    alert('未知错误');
                }
                else if(sel_val == 'all')
                {
                    $("#testContent").html('请选择你的策略');
                }
                else if(sel_val == 1)
                {
                    $("#testContent").html('');
                    var d = document.getElementById('testContent');
                    var html = [];
                    var content = '<pre class="brush: c-sharp;toolbar:false;">' + "Stategy T1: {\n&nbsp;&nbsp;&nbsp;&nbsp;return 1;\n}" + '</pre>';
                    html.push(content);
                    d.innerHTML = html.join('');
                    SyntaxHighlighter.highlight();

                }
                else if(sel_val == 2)
                {
                    $("#testContent").html('');
                    var d = document.getElementById('testContent');
                    var html = [];
                    var content = '<pre class="brush: c-sharp;toolbar:false;">' + "Stategy T2: {\n&nbsp;&nbsp;&nbsp;&nbsp;i = RANDOM(3);\n&nbsp;&nbsp;&nbsp;&nbsp;if (i == 3){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;else{\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;\n&nbsp;&nbsp;&nbsp;&nbsp;}\n}" + '</pre>';
                    html.push(content);
                    d.innerHTML = html.join('');
                    SyntaxHighlighter.highlight();
                }
                else if(sel_val == 3)
                {
                    $("#testContent").html('');
                    var d = document.getElementById('testContent');
                    var html = [];
                    var content = '<pre class="brush: c-sharp;toolbar:false;">' + "Stategy T3: {\n&nbsp;&nbsp;&nbsp;&nbsp;if (CUR == 1){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;\n&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;else{\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return B[CUR-1];\n&nbsp;&nbsp;&nbsp;&nbsp;}\n}" + '</pre>';
                    html.push(content);
                    d.innerHTML = html.join('');
                    SyntaxHighlighter.highlight();
                }
                else if(sel_val == 4)
                {
                    $("#testContent").html('');
                    var d = document.getElementById('testContent');
                    var html = [];
                    var content = '<pre class="brush: c-sharp;toolbar:false;">' + "Stategy T4:{\n&nbsp;&nbsp;&nbsp;&nbsp;if (CUR == 1){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;\n&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;else {\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = RANDOM(9);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i == 9){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else{\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return B[CUR-1];\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;}\n}" + '</pre>';
                    html.push(content);
                    d.innerHTML = html.join('');
                    SyntaxHighlighter.highlight();
                }
                else if(sel_val == 5)
                {
                    $("#testContent").html('');
                    var d = document.getElementById('testContent');
                    var html = [];
                    var content = '<pre class="brush: c-sharp;toolbar:false;">' + "Stategy T5:{\n&nbsp;&nbsp;&nbsp;&nbsp;i = 1;\n&nbsp;&nbsp;&nbsp;&nbsp;k = 1;\n&nbsp;&nbsp;&nbsp;&nbsp;while ((k < CUR) && (i == 1)) \n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (B[k] == 0){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 0;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = k + 1;\n&nbsp;&nbsp;&nbsp;&nbsp;}\n&nbsp;&nbsp;&nbsp;&nbsp;return i;\n}" + '</pre>';
                    html.push(content);
                    d.innerHTML = html.join('');
                    SyntaxHighlighter.highlight();
                }
            })
            $("#submit_btn").click(function (event) {
                var sel_val = $("#select_type").val();
                if(sel_val == 'all' || sel_val =='' || sel_val == undefined)
                {
                    alert('请先选择你的策略');
                    window.parent.location.reload();
                    return ;
                }
            })
        })
    </script>
    <script type="text/javascript">
        SyntaxHighlighter.config.clipboardSwf = 'scripts/clipboard.swf';
//        		SyntaxHighlighter.all();
    </script>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <section class="tm-section-intro">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-wrapper-center">
                            <h1 class="tm-section-intro-title">比 特 大 作 战</h1>
                            <p class="tm-section-intro-text"><font style="font-size:28px;">由 A 和 B 两方进行</font>
                                <br><font style="font-size:26px;">每个回合 A 和 B 可以选择 0 (背叛)或 1 (合作)，共进行 N 个回合；<br>如果第 n ( 1 ≤ n ≤ N )个回合A和 B 的选择分别为 An 和 Bn ，<br>则他们在这个回合的得分 SA(n) 和 SB(n) 由下表决定：</font>
                                <table>
                                <tr><img src="img/strategy.png" alt="Image" class="img-fluid" style="width: 60%;height: 120px;"></tr>
                                <tr><font style="font-size:28px;">A 和 B 的总分为 N 个回合格各自的得分之和</font></tr>
                                </table>
                            </p>
                            <a href="#tm-section-2" class="tm-btn-white-big">开始游戏</a>
                        </div>            
                    </div>
                </section>
            </div>
            <div class="row" id="tm-section-2"  >
                <br>
                <div align="center"><button class="tm-bordered-btn" style="font-size: 28px;" disabled>策 略 介 绍</button></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <!-- slider -->
                    <section>
                        <div id="tmCarousel" class="carousel slide tm-carousel" data-ride="carousel" data-interval="false"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->
                            <ol class="carousel-indicators">
                                <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="2" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="3" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="4" class=""></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">永 远 合 作</h2>
                                            <p class="tm-carousel-item-text">
                                                不管对方选择什么，我方每次都只选1。</p>
                                        </div>
                                    </div>                               
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">随 机 选 择</h2>
                                            <p class="tm-carousel-item-text">
                                                每次以某种概率随机选择1，否则选择0。
                                            </p>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">针 锋 相 对</h2>
                                            <p class="tm-carousel-item-text">
                                                先选择1，以后每一次都选择对方的上一次选择。
                                            </p>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">老 实 人 探 测 器</h2>
                                            <p class="tm-carousel-item-text">
                                                先选择1，以后每一次都选择对方的上一次选择，并随机性选0。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">永 不 原 谅</h2>
                                            <p class="tm-carousel-item-text">
                                                一直选择1，一旦对方选择0，则一直选0。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div><!-- row -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                <h2 class="tm-carousel-item-title">请 选 择 你 的 策 略</h2>
                <p class="tm-section-subtitle">你可以从系统给出的五种策略中选择任意一种，<br>在点击提交之后我们将会将你所选择的策略与系统的随机策略进行pk。</p>
            </div>
            <center>
            <form action="battle.php" method="post" class="tm-contact-form" style="width: 50%;height: 700px;">
                <!--<div class="form-group">-->
                <div align="left">
                    <select class="form-control" style="width: 50%;align-content: center" id="select_type">
                        <option value="all">请 选 择</option>
                        <option value="1">永 远 合 作</option>
                        <option value="2">随 机 选 择</option>
                        <option value="3">针 锋 相 对</option>
                        <option value="4">永 不 原 谅</option>
                        <option value="5">老 实 人 探 测 器</option>
                    </select>
                </div>
                <br>
                <div id="testContent" name="contact_message" class="form-control" rows="6" placeholder="Message" required style="height: 350px;">请选择你的策略</div>
                <!--</div>-->
                <br>
                <button type="submit" class="btn tm-bordered-btn pull-xs-right" id="submit_btn">提 交</button>
            </form>
            </center>
        </div>
                     <!-- col -->
                        <!--<div class="tm-social-icons-container">-->
                            <!--<a href="#" class="tm-social-icon-link"><i class="fa fa-facebook tm-social-icon"></i></a>-->
                            <!--<a href="#" class="tm-social-icon-link"><i class="fa fa-google-plus tm-social-icon"></i></a>-->
                            <!--<a href="#" class="tm-social-icon-link"><i class="fa fa-twitter tm-social-icon"></i></a>-->
                            <!--<a href="#" class="tm-social-icon-link"><i class="fa fa-behance tm-social-icon"></i></a>-->
                            <!--<a href="#" class="tm-social-icon-link"><i class="fa fa-linkedin tm-social-icon"></i></a>-->
                        <!--</div>-->

                <!--</section>-->

            <!--</div>-->

            <!--<div class="row">                -->
                <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                    -->
                    <!--<hr>-->
                <!--</div>-->
            <!--</div>-->
        <script src="js/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap, http://v4-alpha.getbootstrap.com/ -->
        <script src="js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        <script>
            $(document).ready(function(){
                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
                /* Enable swiping for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }
                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });              
                           
            });
        </script>
</body>
</html>