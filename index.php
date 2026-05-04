<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>岡崎不動産株式会社｜愛知県岡崎市の不動産売買・賃貸・土地活用</title>
  <meta name="description" content="愛知県岡崎市大西の地域密着型不動産。不動産売買・賃貸仲介・物件管理・土地活用・建物解体・外壁塗装まで、岡崎の暮らしを一貫してサポートします。宅建免許 愛知県知事(9)第15304号。">
  <meta name="robots" content="index,follow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@500;700;900&family=Shippori+Mincho:wght@600;800&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/favicon.ico'); ?>" type="image/ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" defer></script>
</head>

<body>
  <div class="topbar">
    <div class="wrap">
      <div class="topbar__biz">営業時間 9:00–18:00　<strong>定休日</strong>　水曜日（土日祝もご予約で対応可）</div>
      <div class="topbar__tel">
        <span class="topbar__tel-label">お電話でのお問い合わせ</span>
        <a href="tel:0564461655">0564-46-1655</a>
      </div>
    </div>
  </div>

  <header>
    <div class="wrap">
      <a href="#" class="logo" data-sec="home">
        <div class="logo__mark">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="岡崎不動産ロゴ">
        </div>
        <div class="logo__text">
          <div class="logo__name">岡崎不動産</div>
          <div class="logo__sub">OKAZAKI REAL ESTATE</div>
        </div>
      </a>
      <a href="#" class="cta-header" data-sec="contact">無料相談・査定</a>
    </div>
  </header>

  <nav>
    <ul>
      <li><a href="#" data-sec="home" class="active">ホーム</a></li>
      <li><a href="#" data-sec="properties">物件検索</a></li>
      <li><a href="#" data-sec="services">サービス内容</a></li>
      <li><a href="#" data-sec="company">会社概要</a></li>
      <li><a href="#" data-sec="staff">スタッフ紹介</a></li>
      <li><a href="#" data-sec="reviews">お客様の声</a></li>
      <li><a href="#" data-sec="faq">よくある質問</a></li>
      <li><a href="#" data-sec="contact">お問い合わせ</a></li>
    </ul>
  </nav>

  <main>

    <section class="section active" id="sec-home">

      <div class="hero">
        <picture class="hero__bg">
          <source media="(max-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero-pc.webp" alt="岡崎の風景" loading="eager" fetchpriority="high">
        </picture>
        <div class="wrap">
          <div>
            <div class="hero__eyebrow">愛知県岡崎市・地域密着 三十余年</div>
            <h2>
              岡崎の<span class="hero__accent">土地</span>と<span class="hero__accent">暮らし</span>を、<br>
              一貫してお任せください。
              <span class="hero__small">— 売買・賃貸・土地活用・解体まで —</span>
            </h2>
            <p class="hero__lead">
              岡崎市大西を拠点に、地域の不動産取引をきめ細やかにサポート。売買仲介から賃貸管理、土地活用のご提案、建物解体・外壁塗装まで、ワンストップで対応する地域密着型不動産会社です。
            </p>
            <div class="hero__actions">
              <a href="#" class="btn btn-primary" data-sec="contact">無料相談はこちら</a>
              <a href="#" class="btn btn-ghost" data-sec="properties">物件を探す</a>
            </div>
            <div class="hero__meta">
              <div>取扱物件数<strong>120件超</strong></div>
              <div>免許番号<strong>愛知県知事(9)</strong></div>
              <div>得意エリア<strong>大西・田口町</strong></div>
            </div>
          </div>
          <div class="hero__search">
            <h3>かんたん物件検索</h3>
            <div class="hero__search-sub">条件を選ぶだけで、すぐに該当物件が表示されます</div>
            <label>物件種別</label>
            <select id="hero-type">
              <option value="">すべての種別</option>
              <option value="戸建て">戸建て</option>
              <option value="土地">土地</option>
              <option value="賃貸">賃貸</option>
            </select>
            <label>価格帯（売買のみ）</label>
            <select id="hero-price">
              <option value="">指定なし</option>
              <option value="1500">1,500万円以下</option>
              <option value="3000">3,000万円以下</option>
              <option value="5000">5,000万円以下</option>
              <option value="99999">5,000万円超</option>
            </select>
            <label>キーワード（地名など）</label>
            <input type="text" id="hero-key" placeholder="例：大西町">
            <button onclick="heroSearch()">この条件で物件を見る</button>
          </div>
        </div>
      </div>

      <div class="wrap">

        <div class="sec-head">
          <div class="sec-head__eyebrow">OUR STRENGTHS</div>
          <h2>選ばれる三つの理由</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="strengths">
          <div class="strength">
            <div class="strength__num">壱</div>
            <h3>岡崎市北部に強い<br>地域密着の情報網</h3>
            <p>大西町・田口町・北部エリアの物件と相場、周辺環境を熟知。地元での営業歴が長く、市場に出る前の物件情報もご紹介可能です。</p>
          </div>
          <div class="strength">
            <div class="strength__num">弐</div>
            <h3>売買から解体・塗装まで<br>ワンストップ対応</h3>
            <p>不動産仲介に加え、古家解体・外壁塗装・土地活用提案まで自社で完結。複数業者を探す手間とコストが省けます。</p>
          </div>
          <div class="strength">
            <div class="strength__num">参</div>
            <h3>福祉・医療施設用地の<br>仲介実績</h3>
            <p>障害児施設・グループホーム・クリニック等の用地仲介に注力。用途地域の確認から建築可能性調査まで一貫サポート。</p>
          </div>
        </div>

        <div class="sec-head">
          <div class="sec-head__eyebrow">FEATURED PROPERTIES</div>
          <h2>新着・おすすめ物件</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="property-grid" id="featured-list"></div>

        <div style="text-align:center;margin:24px 0 48px">
          <a href="#" class="btn btn-primary" data-sec="properties">すべての物件を見る →</a>
        </div>

      </div>
    </section>

    <section class="section" id="sec-properties">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">PROPERTY SEARCH</div>
          <h2>物件検索</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="filter-bar">
          <div class="filter-bar__field">
            <label>物件種別</label>
            <select id="f-type">
              <option value="">すべて</option>
              <option value="戸建て">戸建て</option>
              <option value="土地">土地</option>
              <option value="賃貸">賃貸</option>
            </select>
          </div>
          <div class="filter-bar__field">
            <label>価格上限（売買）</label>
            <select id="f-price">
              <option value="">指定なし</option>
              <option value="1500">1,500万円以下</option>
              <option value="3000">3,000万円以下</option>
              <option value="5000">5,000万円以下</option>
              <option value="99999">5,000万円超</option>
            </select>
          </div>
          <div class="filter-bar__field">
            <label>キーワード</label>
            <input type="text" id="f-key" placeholder="例：大西町">
          </div>
          <button onclick="filterProperties()">絞り込む</button>
        </div>
        <div class="filter-bar__result" id="f-result"></div>

        <div class="property-grid" id="property-list"></div>

        <p style="font-size:12px;color:var(--muted);margin:16px 0">
          ※ 掲載物件は一例です。最新情報は <a href="tel:0564461655" style="color:var(--shu);text-decoration:underline">0564-46-1655</a> までお問い合わせください。<br>
          ※ 価格は税込表示。仲介手数料は別途必要となります。
        </p>
      </div>
    </section>

    <section class="section" id="sec-services">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">SERVICES</div>
          <h2>サービス内容</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="services">
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 01</span></div>
            <h3>不動産売買仲介</h3>
            <p>戸建て・土地・マンションの売却および購入をサポート。査定・市場調査・広告出稿・契約手続きまで一貫対応します。<strong>査定は無料</strong>です。</p>
            <ul>
              <li>無料査定（机上査定／訪問査定）</li>
              <li>媒介契約（一般・専任・専属専任）に対応</li>
              <li>住宅ローン提携金融機関のご紹介</li>
              <li>引渡し後のアフターフォロー</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 02</span></div>
            <h3>賃貸仲介・物件管理</h3>
            <p>住居用・事業用の賃貸物件のお部屋探しと、オーナー様向けの物件管理を行います。広告出稿による集客サポートも実施。</p>
            <ul>
              <li>住居・事務所・倉庫・店舗・駐車場の仲介</li>
              <li>入居者募集・広告出稿による集客</li>
              <li>家賃集金・滞納対応・契約更新事務</li>
              <li>建物の維持管理・清掃手配</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 03</span></div>
            <h3>土地活用・コンサルティング</h3>
            <p>遊休地・相続地のご活用方法をご提案。立地条件と需要分析を踏まえた最適なプランをご提示します。<strong>ご相談は無料</strong>です。</p>
            <ul>
              <li>賃貸住宅・アパート建設プラン</li>
              <li>駐車場経営（月極・コインパーキング）</li>
              <li>事業用地としての売却・賃貸</li>
              <li>福祉・医療施設用地としての活用</li>
            </ul>
          </div>
          <div class="service">
            <div class="service__head"><span class="service__label">SERVICE 04</span></div>
            <h3>建物解体・外壁塗装</h3>
            <p>古家付き土地の解体、住宅の外壁塗装まで自社で対応。仲介から工事まで窓口を一本化でき、手続きがスムーズです。</p>
            <ul>
              <li>木造・鉄骨造・RC造の解体工事</li>
              <li>アスベスト調査・適正処理</li>
              <li>外壁塗装・屋根塗装の見積もり</li>
              <li>解体後の整地・売却までサポート</li>
            </ul>
          </div>
        </div>

        <div class="process">
          <h3>ご売却の流れ</h3>
          <div class="process__steps">
            <div class="step">
              <div class="step__circle">1</div>
              <h4>お問い合わせ</h4>
              <p>電話・メール・ご来店（無料）</p>
            </div>
            <div class="step">
              <div class="step__circle">2</div>
              <h4>物件査定</h4>
              <p>机上または訪問査定</p>
            </div>
            <div class="step">
              <div class="step__circle">3</div>
              <h4>媒介契約</h4>
              <p>査定価格にご納得後</p>
            </div>
            <div class="step">
              <div class="step__circle">4</div>
              <h4>販売活動</h4>
              <p>広告掲載・購入希望者紹介</p>
            </div>
            <div class="step">
              <div class="step__circle">5</div>
              <h4>売買契約</h4>
              <p>条件交渉・重要事項説明</p>
            </div>
            <div class="step">
              <div class="step__circle">6</div>
              <h4>決済・引渡し</h4>
              <p>残代金受領・物件引渡し</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section" id="sec-company">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">COMPANY PROFILE</div>
          <h2>会社概要</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="company-grid">
          <div class="company__info">
            <dl>
              <dt>商号</dt>
              <dd>岡崎不動産株式会社</dd>
              <dt>所在地</dt>
              <dd>〒444-0871<br>愛知県岡崎市大西3丁目2番地17</dd>
              <dt>代表者</dt>
              <dd>代表取締役　小林 和夫<br>取締役社長　小林 八重子<br>役員　倉木 寛子</dd>
              <dt>電話番号</dt>
              <dd><a href="tel:0564461655" style="color:var(--shu);text-decoration:underline">0564-46-1655</a></dd>
              <dt>FAX</dt>
              <dd>0564-23-0017</dd>
              <dt>営業時間</dt>
              <dd>9:00 – 18:00</dd>
              <dt>定休日</dt>
              <dd>水曜日（土日祝もご予約で対応）</dd>
              <dt>事業内容</dt>
              <dd>不動産売買・賃貸仲介・物件管理／土地活用提案／建物解体・外壁塗装／福祉・医療施設用地仲介</dd>
              <dt>免許番号</dt>
              <dd>宅地建物取引業<br>愛知県知事 (9) 第15304号</dd>
              <dt>所属団体</dt>
              <dd>(公社)愛知県宅地建物取引業協会 西三河支部</dd>
              <dt>取扱エリア</dt>
              <dd>愛知県岡崎市全域<br>（特に大西町・田口町・北部エリア）</dd>
              <dt>グループ会社</dt>
              <dd>株式会社まごころ<br>有限会社カズオフーズ<br>MKKサービス</dd>
              <dt>建設業許可</dt>
              <dd>愛知県知事 許可（8）第15304号</dd>
            </dl>
          </div>
          <div class="company__side">
            <div class="company__card">
              <h4>代表ごあいさつ</h4>
              <p>当社は岡崎の地で長年にわたり、皆さまの「住まい」と「土地」のご相談をお受けしてまいりました。地域に根を下ろすからこそ見える物件の良さ、相場の機微、そして暮らしの文脈。一件一件のご縁を大切に、これからも誠実に向き合ってまいります。</p>
              <p style="margin-top:14px;text-align:right;font-family:var(--serif);font-size:15px;color:var(--gold-light)">代表取締役　小林 和夫</p>
            </div>
            <div class="company__map-card">
              <div class="company__map-placeholder">岡崎市大西 — Google Maps</div>
              <div class="company__map-text">
                <strong>最寄駅</strong><br>
                名鉄「東岡崎駅」より車で約15分／JR「岡崎駅」より車で約20分<br>
                <strong style="display:inline-block;margin-top:8px">駐車場</strong> 来客用スペースあり<br>
                <a href="https://www.google.com/maps/search/?api=1&amp;query=%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%B2%A1%E5%B4%8E%E5%B8%82%E5%A4%A7%E8%A5%BF3-2-17" target="_blank" rel="noopener" style="color:var(--shu);text-decoration:underline;display:inline-block;margin-top:8px;font-size:12px">→ Googleマップで見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-staff">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">OUR TEAM</div>
          <h2>スタッフ紹介</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="staff-grid">
          <div class="staff-card">
            <img class="staff-card__avatar" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/kobayashi-ceo.webp'); ?>" alt="小林 和夫">
            <div class="staff-card__name">小林 和夫</div>
            <div class="staff-card__role">代表取締役</div>
            <p>創業以来、岡崎市の不動産取引に携わってまいりました。土地活用と相続対策が得意分野です。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">八</div>
            <div class="staff-card__name">小林 八重子</div>
            <div class="staff-card__role">取締役社長</div>
            <p>会社の経営を支え、お客様が安心してご相談いただける環境づくりに尽力しております。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">倉</div>
            <div class="staff-card__name">倉木 寛子</div>
            <div class="staff-card__role">役員 / 専任宅地建物取引士</div>
            <p>賃貸物件のご紹介、契約手続き、入居後のサポートまで担当。お気軽にご相談ください。</p>
          </div>
          <div class="staff-card">
            <div class="staff-card__avatar">管</div>
            <div class="staff-card__name">管理担当</div>
            <div class="staff-card__role">物件管理 / 工務担当</div>
            <p>賃貸管理、解体工事、塗装工事の窓口を担当。建物の維持管理についてご相談ください。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-reviews">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">CUSTOMER VOICES</div>
          <h2>お客様の声</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="review-grid">
          <div class="review">
            <p>相続した実家の売却で相談しました。古家付きだったため解体も含めて一括で対応してもらえ、別々の業者を探す手間が省けました。査定額も近隣相場と乖離がなく、納得して任せられました。</p>
            <div class="review__who"><strong>岡崎市内 60代男性</strong>　戸建て売却・解体</div>
          </div>
          <div class="review">
            <p>グループホーム用地を探していて、用途地域や周辺環境まで丁寧に調査してくれました。建築会社との連携もスムーズで、計画通りに開設できました。</p>
            <div class="review__who"><strong>医療法人 担当者様</strong>　施設用地仲介</div>
          </div>
          <div class="review">
            <p>初めての一人暮らしで賃貸を契約。希望条件が細かかったのですが、何件も内見に付き合ってくださり、納得のいく物件に決まりました。</p>
            <div class="review__who"><strong>岡崎市内 20代女性</strong>　賃貸契約</div>
          </div>
          <div class="review">
            <p>親から相続した土地の活用方法を相談。駐車場経営と売却の両方の試算を出してもらえて、家族でじっくり判断できました。押しつけがましさが無く、相談しやすかったです。</p>
            <div class="review__who"><strong>岡崎市内 50代女性</strong>　土地活用相談</div>
          </div>
        </div>

        <p style="font-size:12px;color:var(--muted);margin:0 0 24px">※ 個人情報保護のため、お客様情報の一部を抜粋・改変して掲載しています。</p>
      </div>
    </section>

    <section class="section" id="sec-faq">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">FREQUENTLY ASKED</div>
          <h2>よくある質問</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="faq-list">
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>査定にお金はかかりますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">いいえ、査定は無料です。机上査定・訪問査定どちらも料金はかかりません。査定後に媒介契約をするかどうかはお客様の自由です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>査定にはどれくらい時間がかかりますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">机上査定（簡易査定）は最短当日〜2営業日、訪問査定は現地確認後3〜5営業日程度で結果をお伝えします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>仲介手数料はいくらですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">宅建業法で定められた上限額を頂戴しています。売買価格400万円超の場合、（売買価格×3%＋6万円）＋消費税が上限となります。賃貸の場合は賃料1ヶ月分（＋消費税）が上限です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>遠方に住んでいますが、岡崎の物件を売却できますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">もちろん可能です。書類のやり取りは郵送・電子契約に対応しております。決済時のみご来岡いただくか、司法書士への委任で対応できます。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>古家付きの土地を売りたいのですが、解体してから売るべきですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">物件の状態と買主の希望次第です。解体費用や税金（特定空家・更地の固定資産税等）も考慮して、最適なご提案をいたします。当社で解体工事まで一括対応も可能です。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>賃貸を借りるとき、初期費用はどれくらい必要ですか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">一般的には家賃の4〜5ヶ月分（敷金・礼金・前家賃・仲介手数料・火災保険等）が目安です。物件によって異なりますので、個別にご案内いたします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>福祉施設用地を探していますが対応できますか？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">はい、障害児施設・グループホーム・クリニック等の用地仲介に注力しています。用途地域・接道・建築可能性の調査までサポートします。</div>
          </div>
          <div class="faq-item">
            <div class="faq-item__question" onclick="toggleFaq(this)"><span class="faq-item__qmark">Q.</span><span>水曜定休とのことですが、水曜に相談したい場合は？</span><span class="faq-item__arrow">▼</span></div>
            <div class="faq-item__answer">事前にご予約いただければ水曜日や夜間でも対応可能です。お電話またはお問い合わせフォームからご連絡ください。</div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-contact">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">CONTACT US</div>
          <h2>お問い合わせ</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="contact-grid">
          <div class="contact__side">
            <h3>お急ぎの方は<br>お電話が確実です</h3>
            <p style="font-size:13.5px;color:#333;line-height:1.85">物件のお問い合わせ・査定のご依頼・ご来店のご予約など、お気軽にどうぞ。</p>
            <div class="contact__big-tel">
              <span class="contact__tel-label">TEL</span>
              <a href="tel:0564461655"><strong>0564-46-1655</strong></a>
            </div>
            <div class="contact__hours">
              <strong>受付時間</strong>　9:00 – 18:00<br>
              <strong>定休日</strong>　水曜日<br>
              （土日祝もご予約で対応可）
            </div>
          </div>

          <div class="contact__form">
            <h3>メールでのお問い合わせ</h3>
            <p class="contact__lead">必要事項をご記入のうえ送信してください。<strong>2営業日以内</strong>にご返信いたします。</p>

            <form onsubmit="return submitForm(event)">
              <div class="form-row">
                <label>お問い合わせ種別<span class="form-row__req">*</span></label>
                <select name="type" required>
                  <option value="">選択してください</option>
                  <option>物件購入の相談</option>
                  <option>物件売却の相談（査定希望）</option>
                  <option>賃貸物件の相談</option>
                  <option>土地活用の相談</option>
                  <option>福祉・医療施設用地の相談</option>
                  <option>解体・塗装の相談</option>
                  <option>その他</option>
                </select>
              </div>
              <div class="form-row">
                <label>お名前<span class="form-row__req">*</span></label>
                <input type="text" name="name" required placeholder="例：岡崎 太郎">
              </div>
              <div class="form-row">
                <label>電話番号<span class="form-row__req">*</span></label>
                <input type="tel" name="tel" required placeholder="例：090-1234-5678">
              </div>
              <div class="form-row">
                <label>メールアドレス</label>
                <input type="email" name="email" placeholder="例：example@example.com">
              </div>
              <div class="form-row">
                <label>ご希望の連絡方法</label>
                <div class="form-row__radio-group">
                  <label><input type="radio" name="contact" value="tel" checked>電話</label>
                  <label><input type="radio" name="contact" value="mail">メール</label>
                  <label><input type="radio" name="contact" value="any">どちらでも</label>
                </div>
              </div>
              <div class="form-row">
                <label>ご相談内容<span class="form-row__req">*</span></label>
                <textarea name="message" required placeholder="物件の所在地・ご予算・ご希望条件など、できるだけ具体的にお書きください。"></textarea>
              </div>
              <div class="form-privacy">
                <label><input type="checkbox" required> <a href="#" data-sec="legal">プライバシーポリシー</a>に同意する<span class="form-row__req">*</span></label>
              </div>
              <button type="submit" class="form-submit">送信する</button>
              <div id="submit-result" class="submit-result"></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="sec-legal">
      <div class="wrap">
        <div class="sec-head">
          <div class="sec-head__eyebrow">LEGAL NOTICE</div>
          <h2>特定商取引法に基づく表記・プライバシーポリシー</h2>
          <div class="sec-head__deco"><span></span></div>
        </div>

        <div class="legal-section">
          <h3>特定商取引法に基づく表記</h3>
          <div class="legal-table">
            <dl>
              <dt>事業者名</dt>
              <dd>岡崎不動産株式会社</dd>
              <dt>代表者</dt>
              <dd>代表取締役 小林 和夫</dd>
              <dt>所在地</dt>
              <dd>〒444-0871 愛知県岡崎市大西3丁目2番地17</dd>
              <dt>電話番号</dt>
              <dd>0564-46-1655（受付時間 9:00–18:00／水曜定休）</dd>
              <dt>免許番号</dt>
              <dd>宅地建物取引業 愛知県知事(9)第15304号</dd>
              <dt>所属団体</dt>
              <dd>(公社)愛知県宅地建物取引業協会 西三河支部</dd>
              <dt>仲介手数料</dt>
              <dd>宅建業法で定められた上限額の範囲内（売買：価格400万円超で価格×3%＋6万円＋消費税が上限／賃貸：賃料1ヶ月分＋消費税が上限）</dd>
              <dt>支払方法</dt>
              <dd>銀行振込（売買契約成立時・決済時に分割してお支払い）</dd>
              <dt>キャンセル</dt>
              <dd>媒介契約解除に関しては媒介契約書の規定に従います</dd>
            </dl>
          </div>

          <h3>プライバシーポリシー</h3>
          <p>岡崎不動産株式会社（以下「当社」）は、個人情報保護法等の関連法令を遵守し、お客様の個人情報を以下の方針で取り扱います。</p>
          <ol>
            <li><strong>取得・利用目的</strong>：物件のご紹介・契約手続き・アフターサービス・お問い合わせ対応のために必要な範囲で利用します。</li>
            <li><strong>第三者提供</strong>：法令に基づく場合または契約履行に必要な場合（金融機関・司法書士等）を除き、第三者に提供しません。</li>
            <li><strong>安全管理</strong>：個人情報への不正アクセス・紛失・改ざん等を防止するため、必要かつ適切な安全管理措置を講じます。</li>
            <li><strong>開示・訂正・削除</strong>：ご本人からの請求があった場合、合理的な範囲で速やかに対応します。</li>
            <li><strong>お問い合わせ窓口</strong>：個人情報に関するお問い合わせは 0564-46-1655 までご連絡ください。</li>
          </ol>

          <h3>免責事項</h3>
          <p>当サイトに掲載されている物件情報・価格は、取引状況により予告なく変更・削除される場合があります。最新情報は必ず当社までご確認ください。当サイトの利用により生じたいかなる損害についても、当社は責任を負いかねます。</p>
          <p>当サイトの内容（文章・画像・データ）の無断転載・複製を禁じます。</p>
        </div>
      </div>
    </section>

  </main>

  <button class="chat-toggle" onclick="toggleChat()">💬 ご質問はこちら</button>
  <div class="chatbot" id="chatbot">
    <div class="chatbot__header">
      <strong>かんたん質問ナビ</strong>
      <button class="chatbot__close" onclick="toggleChat()" aria-label="閉じる">×</button>
    </div>
    <div class="chatbot__body" id="chat-body"></div>
  </div>

  <footer>
    <div class="wrap">
      <div class="footer__grid">
        <div class="footer__brand">
          <a href="#" class="logo" data-sec="home">
            <div class="logo__mark">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="岡崎不動産ロゴ">
            </div>
            <div class="logo__text">
              <div class="logo__name">岡崎不動産</div>
              <div class="logo__sub">OKAZAKI REAL ESTATE</div>
            </div>
          </a>
          <p>〒444-0871<br>愛知県岡崎市大西3丁目2番地17<br>TEL: 0564-46-1655<br>FAX: 0564-23-0017</p>
          <p style="margin-top:6px">営業時間 9:00–18:00／水曜定休</p>
          <div class="footer__license">
            宅地建物取引業<br>
            愛知県知事 (9) 第15304号
          </div>
        </div>
        <div>
          <h4>取扱業務</h4>
          <ul>
            <li><a href="#" data-sec="services">不動産売買仲介</a></li>
            <li><a href="#" data-sec="services">賃貸仲介・物件管理</a></li>
            <li><a href="#" data-sec="services">土地活用提案</a></li>
            <li><a href="#" data-sec="services">建物解体・塗装</a></li>
            <li><a href="#" data-sec="services">福祉・医療用地</a></li>
          </ul>
        </div>
        <div>
          <h4>サイトメニュー</h4>
          <ul>
            <li><a href="#" data-sec="home">ホーム</a></li>
            <li><a href="#" data-sec="properties">物件検索</a></li>
            <li><a href="#" data-sec="company">会社概要</a></li>
            <li><a href="#" data-sec="staff">スタッフ紹介</a></li>
            <li><a href="#" data-sec="reviews">お客様の声</a></li>
          </ul>
        </div>
        <div>
          <h4>サポート</h4>
          <ul>
            <li><a href="#" data-sec="faq">よくある質問</a></li>
            <li><a href="#" data-sec="contact">お問い合わせ</a></li>
            <li><a href="#" data-sec="legal">特商法表記</a></li>
            <li><a href="#" data-sec="legal">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__copy">© 岡崎不動産株式会社 All Rights Reserved.</div>
    </div>
  </footer>

  <script>
    const PROPERTIES = [{
        type: "戸建て",
        title: "大西町南ケ原 中古戸建て 4DK",
        addr: "岡崎市大西町字南ケ原",
        price: 1320,
        layout: "4DK",
        area: "建物98㎡／土地180㎡",
        year: "築22年"
      },
      {
        type: "戸建て",
        title: "大西町南ケ原 中古戸建て 2LDK",
        addr: "岡崎市大西町字南ケ原",
        price: 2950,
        layout: "2LDK",
        area: "建物85㎡／土地150㎡",
        year: "築8年"
      },
      {
        type: "土地",
        title: "大西町奥長入 売土地",
        addr: "岡崎市大西町字奥長入",
        price: 1300,
        layout: "-",
        area: "土地220㎡",
        year: "-"
      },
      {
        type: "土地",
        title: "大西町揚枝 売土地",
        addr: "岡崎市大西町字揚枝",
        price: 1780,
        layout: "-",
        area: "土地280㎡",
        year: "-"
      },
      {
        type: "土地",
        title: "大西町南ケ原 売土地（広め）",
        addr: "岡崎市大西町字南ケ原",
        price: 4000,
        layout: "-",
        area: "土地512.39㎡",
        year: "-"
      },
      {
        type: "戸建て",
        title: "田口町 中古戸建て 3LDK",
        addr: "岡崎市田口町",
        price: 1980,
        layout: "3LDK",
        area: "建物92㎡／土地165㎡",
        year: "築15年"
      },
      {
        type: "賃貸",
        title: "大西町 賃貸アパート 2DK",
        addr: "岡崎市大西町",
        price: 6.8,
        layout: "2DK",
        area: "45㎡",
        year: "築12年",
        rent: true
      },
      {
        type: "賃貸",
        title: "岡崎市内 貸事務所",
        addr: "岡崎市内",
        price: 18,
        layout: "事務所",
        area: "80㎡",
        year: "-",
        rent: true
      },
      {
        type: "賃貸",
        title: "大西町 月極駐車場",
        addr: "岡崎市大西町",
        price: 0.8,
        layout: "駐車場",
        area: "1台分",
        year: "-",
        rent: true
      },
      {
        type: "戸建て",
        title: "岡崎市北部 新築戸建て 4LDK",
        addr: "岡崎市北部",
        price: 3680,
        layout: "4LDK",
        area: "建物105㎡／土地180㎡",
        year: "新築"
      },
    ];

    function priceLabel(p) {
      if (p.rent) return p.price.toLocaleString() + '<span class="property__price-unit">万円/月</span>';
      return p.price.toLocaleString() + '<span class="property__price-unit">万円</span>';
    }

    function tagClass(t) {
      if (t === "土地") return "property__tag--land";
      if (t === "賃貸") return "property__tag--rent";
      return "";
    }

    function renderProperty(p, container) {
      const div = document.createElement("article");
      div.className = "property";
      div.innerHTML = `
    <div class="property__img">
      <span class="property__tag ${tagClass(p.type)}">${p.type}</span>
      <span class="property__img-icon">○</span>
    </div>
    <div class="property__body">
      <h4>${p.title}</h4>
      <div class="property__addr">${p.addr}</div>
      <div class="property__price">${priceLabel(p)}</div>
      <div class="property__spec">
        <div>間取<strong>${p.layout}</strong></div>
        <div>面積<strong style="font-size:11px">${p.area.split('／')[0]}</strong></div>
        <div>築年<strong>${p.year}</strong></div>
      </div>
      <div class="property__actions">
        <a href="tel:0564461655" class="property__tel-btn">電話する</a>
        <a href="#" class="property__mail-btn" onclick="navTo('contact');return false">メール</a>
      </div>
    </div>
  `;
      container.appendChild(div);
    }

    function renderFeatured() {
      const c = document.getElementById("featured-list");
      c.innerHTML = "";
      PROPERTIES.slice(0, 4).forEach(p => renderProperty(p, c));
    }

    function filterProperties() {
      const t = document.getElementById("f-type").value;
      const pmax = document.getElementById("f-price").value;
      const k = document.getElementById("f-key").value.trim();
      const c = document.getElementById("property-list");
      c.innerHTML = "";
      let n = 0;
      PROPERTIES.forEach(p => {
        if (t && p.type !== t) return;
        if (pmax && !p.rent && p.price > parseInt(pmax)) return;
        if (k && !(p.title.includes(k) || p.addr.includes(k))) return;
        renderProperty(p, c);
        n++;
      });
      document.getElementById("f-result").textContent = n + "件 該当しました";
      if (n === 0) c.innerHTML = '<p style="padding:40px;background:var(--paper-light);border:1px solid var(--line);text-align:center;color:var(--muted)">該当する物件がありませんでした。条件を変えて再度お試しください。</p>';
    }

    function heroSearch() {
      document.getElementById("f-type").value = document.getElementById("hero-type").value;
      document.getElementById("f-price").value = document.getElementById("hero-price").value;
      document.getElementById("f-key").value = document.getElementById("hero-key").value;
      navTo("properties");
      filterProperties();
    }

    function navTo(id) {
      document.querySelectorAll(".section").forEach(s => s.classList.remove("active"));
      const tgt = document.getElementById("sec-" + id);
      if (tgt) tgt.classList.add("active");
      document.querySelectorAll("nav a").forEach(a => a.classList.remove("active"));
      const navA = document.querySelector('nav a[data-sec="' + id + '"]');
      if (navA) navA.classList.add("active");
      window.scrollTo({
        top: 0,
        behavior: "instant"
      });
      if (id === "properties") filterProperties();
    }

    document.addEventListener("click", function(e) {
      const a = e.target.closest("[data-sec]");
      if (a) {
        e.preventDefault();
        navTo(a.dataset.sec);
      }
    });

    function toggleFaq(el) {
      el.parentElement.classList.toggle("faq-item--open");
    }

    function submitForm(e) {
      e.preventDefault();
      const r = document.getElementById("submit-result");
      r.classList.add("submit-result--show");
      r.textContent = "✓ お問い合わせを受け付けました。2営業日以内にご返信いたします。お急ぎの場合は 0564-46-1655 までお電話ください。";
      e.target.reset();
      r.scrollIntoView({
        behavior: "smooth",
        block: "center"
      });
      return false;
    }

    const CHAT_TREE = {
      root: {
        msg: "ご質問の種類をお選びください。",
        opts: [{
            label: "物件を探したい",
            goto: "property"
          },
          {
            label: "物件を売りたい・査定",
            goto: "sell"
          },
          {
            label: "営業時間・店舗情報",
            goto: "info"
          },
          {
            label: "仲介手数料について",
            goto: "fee"
          },
          {
            label: "土地活用・解体の相談",
            goto: "land"
          },
          {
            label: "その他のお問い合わせ",
            goto: "other"
          },
        ]
      },
      property: {
        msg: "物件の種別をお選びください。",
        opts: [{
            label: "戸建て・土地（購入）",
            action: () => {
              navTo("properties");
              document.getElementById("f-type").value = "戸建て";
              filterProperties();
              toggleChat();
            }
          },
          {
            label: "賃貸物件",
            action: () => {
              navTo("properties");
              document.getElementById("f-type").value = "賃貸";
              filterProperties();
              toggleChat();
            }
          },
          {
            label: "全物件を見る",
            action: () => {
              navTo("properties");
              toggleChat();
            }
          },
        ]
      },
      sell: {
        msg: "売却査定は無料です。机上査定なら最短当日〜2営業日で結果をお知らせします。詳しくはお問い合わせフォームからご連絡ください。",
        opts: [{
            label: "お問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
          {
            label: "電話で相談する",
            action: () => {
              location.href = "tel:0564461655";
            }
          },
        ]
      },
      info: {
        msg: "営業時間：9:00〜18:00／定休日：水曜日（土日祝も予約で対応可）／所在地：愛知県岡崎市大西3-2-17／TEL：0564-46-1655",
        opts: [{
            label: "会社概要を見る",
            action: () => {
              navTo("company");
              toggleChat();
            }
          },
          {
            label: "電話する",
            action: () => {
              location.href = "tel:0564461655";
            }
          },
        ]
      },
      fee: {
        msg: "売買仲介手数料は宅建業法上限（価格400万円超で価格×3%＋6万円＋消費税）まで。賃貸は賃料1ヶ月分＋消費税まで。",
        opts: [{
          label: "よくある質問を見る",
          action: () => {
            navTo("faq");
            toggleChat();
          }
        }, ]
      },
      land: {
        msg: "土地活用は駐車場・賃貸住宅・売却・福祉施設用地など多様にご提案します。建物解体・塗装も自社対応です。ご相談は無料です。",
        opts: [{
            label: "サービス内容を見る",
            action: () => {
              navTo("services");
              toggleChat();
            }
          },
          {
            label: "問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
        ]
      },
      other: {
        msg: "お問い合わせフォーム、またはお電話で承ります。",
        opts: [{
            label: "問い合わせフォームへ",
            action: () => {
              navTo("contact");
              toggleChat();
            }
          },
          {
            label: "電話する",
            action: () => {
              location.href = "tel:0564461655";
            }
          },
        ]
      },
    };

    function renderChat(node) {
      const body = document.getElementById("chat-body");
      body.innerHTML = "";
      const p = document.createElement("p");
      p.textContent = CHAT_TREE[node].msg;
      body.appendChild(p);
      const opts = document.createElement("div");
      opts.className = "chatbot__opts";
      CHAT_TREE[node].opts.forEach(o => {
        const b = document.createElement("button");
        b.textContent = "▶ " + o.label;
        b.onclick = () => {
          if (o.action) o.action();
          else if (o.goto) renderChat(o.goto);
        };
        opts.appendChild(b);
      });
      body.appendChild(opts);
      if (node !== "root") {
        const back = document.createElement("a");
        back.className = "chatbot__back";
        back.textContent = "← 最初に戻る";
        back.onclick = (e) => {
          e.preventDefault();
          renderChat("root");
        };
        body.appendChild(back);
      }
    }

    function toggleChat() {
      const c = document.getElementById("chatbot");
      c.classList.toggle("chatbot--open");
      if (c.classList.contains("chatbot--open")) renderChat("root");
    }

    renderFeatured();
  </script>

</body>

</html>