<!DOCTYPE html>
<html lang="ja">
    <head>
       <title>minimal - version 2.0 | Mani Labo</title>
       <meta http-equiv="content-type" charset="utf-8">
       <meta name="viewport" content="width=device-width">
       <meta name="description" content="とあるミニマリストのポートフォリオサイト。">
       <meta keywords="Mani Labo, まに, minimal, ミニマリスト,">
       <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
       <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon-180x180.png">
       <meta name="twitter:card" content="summary_large_image" />
       <meta name="twitter:site" content="@mani_transm" />
       <meta property="og:url" content="https://www.mani-labo.net/" />
       <meta property="og:title" content="minimal - version 2.0 | Mani Labo" />
       <meta property="og:description" content="とあるミニマリストのポートフォリオサイト。" />
       <meta property="og:image" content="https://www.mani-labo.net/images/minimal-artwork.png" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/responsive.css">
       <link rel="stylesheet" href="https://use.typekit.net/rqq1ipj.css">
       <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
       <script type="text/javascript" src="js/style.js"></script>
       <script>
  (function(d) {
    var config = {
      kitId: 'dgh5eud',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
    </head>
    <body>
      <div id="loading">
        <div id="animation">
          <span id="first">L</span>
          <span id="second">O</span>
          <span id="third">A</span>
          <span id="fourth">D</span>
          <span id="fifth">I</span>
          <span id="sixth">N</span>
          <span id="seventh">G</span>
        </div>
      </div>
      <div id="finish_sending">
        <div id="modal">
          <div id="modal-inner">
            <p>メールの送信が完了しました。</p>
            <button id="sent-button">CLOSE</button>
          </div>
        </div>
      </div>

      <header>
        <div id="top">
          <div id="background">
            <img src="images/header-background.jpg" alt="">
          </div>
          <div id="top-content">
            <img id="top-logo" src="images/logo-white.png">
            <p>The minimalist's portfolio web site.</p>
            <div class="scroll">
              <a href="#"><span></span>Scroll</a>
            </div>
          </div>
        </div>
      </header>
        <div id="left-content">
            <label for="menu-switch"></label>
            <input id="menu-switch" type="checkbox" name="switch" value="switch">
            <div id="menu-text">
              <span>▲</span>
              <span id="menu-text-margin"></span>
              <span>M</span>
              <span>I</span>
              <span>N</span>
              <span>I</span>
              <span>M</span>
              <span>A</span>
              <span>L</span>
              <span id="menu-text-margin"></span>
              <span>M</span>
              <span>E</span>
              <span>N</span>
              <span>U</span>
              <span id="menu-text-margin"></span>
              <span>▲</span>
            </div>
            <div id="left-content-inner">
                <div id="logo">
                    <img src="images/logo.png">
                </div>
                <div id="menu">
                  <ul>
                      <li><a href="#profile">PROFILE</a></li>
                      <li><a href="#works">WORKS</a></li>
                      <li><a href="#history">HISTORY</a></li>
                      <li><a href="#contact">CONTACT</a></li>
                  </ul>
                </div>
                <div id="sns-btn">
                    <ul>
                        <li><a href="https://twitter.com/mani_transm"><img src="images/twitter.png"></a></li>
                        <li><a href="https://github.com/maniCreate"><img src="images/github.png"></a></li>
                        <li><a href="https://www.mani-labo.net/"><img src="images/wordpress.png"></a></li>
                    </ul>
                </div>
            </div>
            <div id="left-content-bar"></div>
        </div>
        <div id="right-content">
            <div id="right-content-inner">
                <div id="profile" class="section-margin fadein">
                    <img src="images/profile-bg.png" id="profile-bg" class="content-bg">
                    <h2 class="content-title">PROFILE</h2>
                    <section class="flex">
                      <div id="profile-left">
                          <div id="profile-box">
                          <div id="sp-profile-image">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><img src="images/profile.png"></div>
                                    <div class="swiper-slide"><img src="images/profile_2.jpg"></div>
                                    <div class="swiper-slide"><img src="images/profile_3.jpg"></div>

                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                          </div>
                          <p id="job">Minimalist / Engineer</p>
                          <h2 id="name">Mani</h2>
                          <p id="description">
                          Web / iOS デベロッパー。<br>
                          個人でWebサイトやiOSアプリの制作をしてます。最近はUI/UXやデザインも勉強中。
                          </p>
                          <ul>
                              <li><img src="images/html.png"></li>
                              <li><img src="images/css.png"></li>
                              <li><img src="images/javascript.png"></li>
                              <li><img src="images/jquery.png"></li>
                              <li><img src="images/swift.png"></li>
                              <li><img src="images/firebase.png"></li>
                          </ul>
                      </div>
                      </div>
                      <div id="profile-right">
                          <div id="profile-image">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><img src="images/profile.png"></div>
                                    <div class="swiper-slide"><img src="images/profile_2.jpg"></div>
                                    <div class="swiper-slide"><img src="images/profile_3.jpg"></div>

                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                          </div>
                      </div>
                    </section>
                </div>
                <div id="works" class="section-margin fadein">
                    <img src="images/works-bg.png" class="content-bg">
                    <h2 class="content-title">WORKS</h2>
                    <div class="entry-list">
                      <article>
                          <a href="">
                          <div class="entry-image">
                              <img src="images/comming-soon.png">
                          </div>
                          <div class="entry-description">
                              <div class="entry-title">
                                  <h2>Nights</h2>
                              </div>
                              <p>夜景専用のカメラアプリ<br>を製作中。comming soon</p>
                              <p class="category">iOS</p>
                          </div>
                          </a>
                      </article>
                      <article>
                          <a href="https://www.mani-labo.net/">
                          <div class="entry-image">
                              <img src="images/minimal-thumb.png">
                          </div>
                          <div class="entry-description">
                              <div class="entry-title">
                                  <h2>ポートフォリオサイト<br>「minimal」</h2>
                              </div>
                              <p>「ミニマリスト」をテーマにした<br>第２作目のポートフォリオサイト</p>
                              <p class="category">iOS</p>
                          </div>
                          </a>
                       </article>
                       <article>
                           <a href="https://itunes.apple.com/jp/app/limit/id1441079872?mt=8">
                           <div class="entry-image">
                               <img src="images/limit-thumbnail.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>人生時計アプリ<br>「Limit」</h2>
                               </div>
                               <p>初めてのAppstore配信を果たしたアプリ。自分の寿命を１つのハートで表してくれる残酷なアプリ</p>
                               <p class="category">iOS</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="">
                           <div class="entry-image">
                               <img src="images/mani-labo.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>ポートフォリオサイト<br>「Gear」</h2>
                               </div>
                               <p>歯車をモチーフにした<br>第１作目のポートフォリオサイト</p>
                               <p class="category">WEB</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="">
                           <div class="entry-image">
                               <img src="images/timeless-thumbnail.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>スライドショーアプリ<br>「TimeLess」</h2>
                               </div>
                               <p>某保険会社のCMのような<br>スライドショーが作れるアプリ。</p>
                               <p class="category">iOS</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="">
                           <div class="entry-image">
                               <img src="images/dreamer-thumbnail.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>夢をタスク管理するアプリ<br>「Dreamer」</h2>
                               </div>
                               <p>初めて作ったiOSアプリ。<br>「夢をタスク管理して叶える」がテーマ。</p>
                               <p class="category">iOS</p>
                           </div>
                           </a>
                       </article>
                    </div>
                </div>
                <div id="history" class="section-margin fadein">
                    <img src="images/history-bg.png" class="content-bg">
                    <h2 class="content-title">HISTORY</h2>
                    <div class="entry-list">
                        <article>
                           <a href="https://manimani-life.com/entry/yahoo-developer-intern2019s">
                           <div class="entry-image">
                               <img src="https://i0.wp.com/manimani-life.com/wp-content/uploads/2019/01/lodge.jpg?w=800&ssl=1">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>Yahoo!黒帯・OSSデベロッパーインターンシップに参加</h2>
                               </div>
                               <p>Yahooさんで2週間インターンさせていただきました！</p>
                               <p class="category">2019.3.1</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="https://life-is-tech.com/news/news/201901-cpbl">
                           <div class="entry-image">
                               <img src="https://life-is-tech.com/news/wp-content/uploads/2019/01/Day8_244.jpg">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>Creative Hack for Local<br>- Life is Tech!</h2>
                               </div>
                               <p>経済産業省「未来の教室」の実証事業でメンターをしました。</p>
                               <p class="category">2018.1.21</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="https://itunes.apple.com/jp/app/limit/id1441079872?mt=8">
                           <div class="entry-image">
                               <img src="images/limit-thumbnail.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>Limitをリリース</h2>
                               </div>
                               <p>人生初、Appstoreにアプリをリリースしました。</p>
                               <p class="category">2018.11.21</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="">
                           <div class="entry-image">
                               <img src="images/mani-labo.png">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>ポートフォリオサイト「Gear」を公開</h2>
                               </div>
                               <p>１作目のポートフォリオサイトを公開しました。</p>
                               <p class="category">2018.11.21</p>
                           </div>
                           </a>
                       </article>
                       <article>
                           <a href="https://inaka-freelance.jp/mani-interview/">
                           <div class="entry-image">
                               <img src="images/inafree.jpg">
                           </div>
                           <div class="entry-description">
                               <div class="entry-title">
                                   <h2>田舎フリーランス養成講座<br>金谷13期</h2>
                               </div>
                               <p>１ヶ月間千葉県の田舎にプチ移住＆Web制作の仕事をしました。</p>
                               <p class="category">2018.2.5</p>
                           </div>
                           </a>
                       </article>
                    </div>
                </div>
                <div id="contact" class="section-margin fadein">
                    <img src="images/contact-bg.png" class="content-bg">
                    <h2 class="content-title">CONTACT</h2>
                    <div id="contact-detail">
                        <p>お問い合わせはこちらのフォームよりお願い致します。
                        <br>確認後３日以内にご返信致します。</p>
                    </div>
                    <form id="contact-form" name="contactform" action="send.php" method="post" onsubmit="return submitChk()" onchange="button_switch()">
                      <div class="form-group">
                        <label for="">お名前 - Your name</label>
                        <input class="form-control" type="text" name="name" value="<?php if( !empty($_POST['name']) ){ echo $_POST['name']; } ?>" placeholder="your name">
                      </div>
                      <div class="form-group">
                        <label for="">メールアドレス - Email</label>
                        <input class="form-control" type="text" name="mail" value="<?php if( !empty($_POST['mail']) ){ echo $_POST['mail']; } ?>" placeholder="email@example.com">
                      </div>
                      <div class="form-group">
                        <p>お問い合わせ内容 - Category</p>
                        <ul class="form-check form-check-inline">
                          <li><label class="form-check-label" for="q1"><input id="q1" class="form-check-input" type="radio" name="category" value="ご意見・ご相談">ご意見・ご相談</label></li>
                          <li><label class="form-check-label" for="q2"><input id="q2" class="form-check-input" type="radio" name="category" value="お仕事のご依頼">お仕事のご依頼</label></li>
                        </ul>
                        <ul class="form-check form-check-inline">
                          <li><label class="form-check-label" for="q3"><input id="q3" class="form-check-input" type="radio" name="category" value="ご質問">ご質問等</label></li>
                          <li><label class="form-check-label" for="q4"><input id="q4" class="form-check-input" type="radio" name="category" value="その他お問い合わせ">その他お問い合わせ</label></li>
                        </ul>
                      </div>
                      <div class="form-group">
                        <label class="" for="">メッセージ本文 - Message</label>
                        <textarea class="form-control" name="content" rows="8" cols="80" placeholder="Enter your massage" onchange="content_validation()" value="<?php if( !empty($_POST['content']) ){ echo $_POST['content']; } ?>"></textarea>
                      </div>
                      <button id="submit_button" class="btn btn-primary btn-lg btn-block" type="submit" name="submit" disabled>Submit</button>
                    </form>
                  </div>
                  <div id="copyright">
                    <p>Copyright © 2019 mani-labo All Rights Reserved.</p>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
      <script type="text/javascript">
        var mySwiper = new Swiper ('.swiper-container', {
          loop: true,
          parallax: true,
          slidesPerView: 1,
          spaceBetween: 0,
          speed: 5000,
          autoplay: 5000,
          centeredSlides : true,
          pagination: '.swiper-pagination'
        });

        $("#sent-button").click(function() {
          $.when(
            $("#finish_sending").addClass("send_close"),
            $("#finish_sending").removeClass("send_open")
          ).done(function() {
            setTimeout(function(){
          		$("#finish_sending").removeClass("send_close");
          	},1000);
          });
          document.contactform.reset();
        });

        let button = document.getElementById('submit_button');

        var name = null;
        var mail = null;
        var category = null;
        var content = null;

        function button_switch() {
          //入力値が全部揃った時に送信ボタンがEnableになる
          name = $('[name=name]').val();
          mail = $('[name=mail]').val();
          category = $('[name=category]').val();
          content = $('[name=content]').val();

          if (name!=""&&mail!=""&&category!=""&&content!="") {
            return button.disabled = "";
          } else {
            return button.disabled = "disabled";
          }
        }

        function submitChk () {
            /* 確認ダイアログ表示 */
            if (!$('[name=mail]').val().match(/.+@.+\..+/)) {
              mail = null;
              confirm("メールアドレスが正しい形式ではありません。\n入力内容を確認してください。")
              button.disabled = "disabled";
              return false;
            }  else {

              var final_confirm = confirm ( "この内容で送信します。よろしければOKを押してください。\n確認する場合は[キャンセル]ボタンを押して下さい。");

              if (final_confirm==false) {
                return false;
              }
              /* send_flg が TRUEなら送信、FALSEなら送信しない */
              var formDatas = document.getElementById("contact-form");
          		var postDatas = new FormData(formDatas);

          		// XHRの宣言
          		var XHR = new XMLHttpRequest();

          		// openメソッドにPOSTを指定して送信先のURLを指定します
          		XHR.open("POST", "send.php", true);

          		// sendメソッドにデータを渡して送信を実行する
          		XHR.send(postDatas);

          		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
          		XHR.onreadystatechange = function(){
          			if(XHR.readyState == 4 && XHR.status == 200){
          				// POST送信した結果を表示する
          				$("#finish_sending").addClass("send_open");
          			}
          		};
              return false;
            }
        }
      </script>
    </body>
</html>
