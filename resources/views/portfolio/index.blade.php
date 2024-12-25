@extends('layouts.app')

@section('title', 'ポートフォリオ')
@section('style')
<style>
    p {
        font-size: 1rem;
        /* 16px */
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        margin-bottom: 1.2rem;
        /* 各段落の下に適度なスペースを追加 */
    }

    .p2 {
        font-size: 1rem;
        /* 16px */
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        margin-bottom: 1.2rem;
        /* 各段落の下に適度なスペースを追加 */
    }

    .p3 {
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        margin-bottom: 1.2rem;
        /* 各段落の下に適度なスペースを追加 */
    }

    strong {
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
    }

    h3,
    h4,
    h5,
    h6 {
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
    }

    [v-cloak] {
        display: none;
    }

    .aomori {
        background-color: lightblue;
    }

    .kagoshima {
        background-color: lightcoral;
    }

    .mie {
        background-color: #BCF4BC;
    }

    .yellow {
        background-color: #FFFFCC;
    }

    .inline-table {
        display: inline-block;
        margin-right: 1.25rem;
        /* テーブル間の余白調整 */
        vertical-align: top;
        /* 上揃え */
    }

    .tag {
        background-color: white;
        /* 背景色を白に設定 */
        border: 0.0625rem solid black;
        /* 黒いボーダー */
        padding: 0rem;
        /* パディングを追加 */
    }

    /* h1目次 */
    .green-bg {
        background-color: #BCF4BC;
        width: 100%;
        height: auto;
        margin: 0 0 1.25rem 0;
        padding: 0.7rem 0rem 0.7rem 0rem;
        font-size: 2.5rem;
        text-align: center;
        border-radius: 0.5rem;
        /* 角を丸くする */
    }

    /* 図形 */
    .gray-bg {
        border: 0.2rem solid rgb(223, 222, 222);
        /* 枠線の太さを0.25remに変更 */
        border-radius: 0.75rem;
        /* 角を丸くする */
        padding: 0.85rem 1.25rem;
        /* 内容と枠線の間隔を確保 */
        background-color: rgb(248, 248, 248);
        /* 背景色（灰色） */
        box-shadow: 0.625rem 0.625rem 1.25rem 0rem rgba(140, 140, 140, 0.3);
        /* 影の追加 →方向, ↓方向, 全体のぼかし, box-shadowだけ（影のサイズ調整 */
    }

    /* 灰色の図形が浮き出る */
    .gray-bg:hover {
        transform: translateY(-0.3rem) scale(1.03);
    }

    /* @media (max-width: 48rem) { */

    .modal-dialog {
        max-width: 90%;
        /* モーダルの幅を90%にする */
    }

    .modal-content {
        max-height: 80vh;
        /* ビューポートの80%に制限 */
        overflow-y: auto;
        /* 縦方向にスクロール */
    }

    .modal-body p {
        font-size: 0.9rem;
        /* 小さい画面ではフォントサイズを少し小さく */
    }

    /* } */

    .space0 {
        margin-top: 0.3rem;
    }

    .space1 {
        margin-top: 1rem;
    }

    .space2 {
        margin-top: 2rem;
    }

    .space25 {
        margin-top: 2.5rem;
    }

    .space3 {
        margin-top: 3rem;
    }

    .space4 {
        margin-top: 4rem;
    }

    .double-space {
        margin-top: 1rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .double-space2 {
        margin-top: 2rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .double-space25 {
        margin-top: 2.5rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .double-space3 {
        margin-top: 3rem;
    }

    .double-space4 {
        margin-top: 4rem;
    }

    .d-s {
        margin-top: 5rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .d-s2 {
        margin-top: 9rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .m-t {
        /* display: inline-block; */
        margin-top: 0.25rem;
        /* 2行分の余白を追加 (1行 = 1em) */
        padding-left: 0.2rem;
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        margin-bottom: 1.2rem;
        /* 各段落の下に適度なスペースを追加 */
    }

    .d-m-t {
        margin-top: 0.5rem;
        /* 見出しの縦の行間スペース用 */
    }

    .d-m-t2 {
        margin-top: 0.25rem;
        /* 振り返りなどの縦の行間スペース用 */
    }

    .m-t0 {
        display: inline-block;
        margin-top: 0rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .m-t2 {
        display: inline-block;
        margin-top: 1.5rem;
        /* 2行分の余白を追加 (1行 = 1em) */
    }

    .p-l {
        padding-left: 1.62rem;
        /* 2行目以降の左余白を1emだけ追加 */
    }

    .p-l2 {
        margin-left: -0.25rem;
        /* 2行目以降の左余白を1emだけ追加 */
    }

    .p-l3 {
        margin-left: -0.4rem;
        /* 2行目以降の左余白を1emだけ追加 */
    }

    .rounded-box {
        border: 0.2rem solid rgb(222, 222, 222);
        /* 枠線の太さを0.25remに変更 */
        border-radius: 0.75rem;
        /* 角を丸くする */
        padding: 0.85rem 1.25rem;
        /* 内容と枠線の間隔を確保 */

        /* background-color: #FFFFFF; */
        background-color: #f9f9f9;
        /* background-color: #fcfcfc; */
        /* background-color: rgb(253, 253, 253); */
        /* 背景色（必要なら設定） */
    }

    .r-box {
        font-size: 1rem;
        /* 16px */
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        /* margin-bottom: 1.2rem; */
        /* 各段落の下に適度なスペースを追加 */
        border: 0.2rem solid rgb(222, 222, 222);
        /* 枠線の太さを0.25remに変更 */
        border-radius: 0.5rem;
        /* 角を丸くする */
        background-color: #f9f9f9;
        /* 背景色（必要なら設定） */
        color: #007bff;
        /* 特定のリンクの色 */
        text-decoration: none;
        /* 下線を削除 */
        display: inline-block;
        /* ボックス要素として扱う */
        padding: 0.5em 1em;
        /* 余白を追加して、クリックしやすいエリアを広げる */
        transition: background-color 0.3s ease, color 0.3s ease;
        /* ホバー時の変化をスムーズに */
    }

    .r-box2 {
        font-size: 1rem;
        line-height: 1.6;
        letter-spacing: 0.05rem;
        word-spacing: 0.1rem;
        border: 0.2rem solid rgb(222, 222, 222);
        border-radius: 0.5rem;
        background-color: #f9f9f9;
        color: #007bff;
        text-decoration: none;
        /* display: inline-block; */
        padding: 0.5em 1em;
        transition: background-color 0.3s ease, color 0.3s ease;
        display: flex;
        justify-content: space-between;
        /* テキストとアイコンを左右に配置 */
        align-items: center;
        /* 上下中央揃え */
    }

    .r-box:hover {
        background-color: #007bff;
        /* ホバー時の背景色を変更 */
        color: #ffffff;
        /* 文字色を白に */
    }

    .r-box2:hover {
        background-color: #2ecc71;
        color: #ffffff;
    }

    .r-b2:hover {
        background-color: #2ecc71;
        color: #ffffff;

        font-size: 1rem;
        line-height: 1.6;
        letter-spacing: 0.05rem;
        word-spacing: 0.1rem;
        border-radius: 0.5rem;
    }

    /* フォーカス時の視認性を確保 */
    .r-box:focus {
        outline: 0.1875rem solid #f1c40f;
    }

    .r-box:active {
        background-color: #0056b3;
        /* クリック時の背景色を変更 */
        color: #ffffff;
        /* 文字色を白に */
    }

    .r-box2i {
        font-size: 1.1rem;
        /* フォントサイズを1remに設定 */
        display: inline-flex;
        align-items: center;
        /* アイコンを上下中央に配置 */
        margin-left: auto;
        /* アイコンを右に配置 */
        /* margin-left: 0.5rem; */
        /* アイコンとテキストの間隔 */
    }

    button.r-box {
        text-align: left;
        /* テキストを左揃えにする */
        width: 100%;
        /* 必要に応じてボタンの幅を100%にする */
        /* padding-left: 1em; */
        /* 左側に余白を追加 */
    }



    /* .r-b - アニメーション対象の要素のスタイル */
    .r-b {
        border: 0.2rem solid #BCF4BC;
        /* 枠線の設定、緑色の薄い枠 */
        border-radius: 0.75rem;
        /* 角を丸くする */
        padding: 2rem 0rem 1.25rem 0rem;
        /* 上、右、下、左の内側の余白を設定 */
        background-color: #FFFFCC;
        /* 背景色を薄い黄色に設定 */

        opacity: 0;
        /* 初期状態では非表示にする（透明） */
        transform: translateY(20%);
        /* 初期位置を画面外、下の方に設定 (画面外に配置) */
        transition: opacity 3s ease-out, transform 2s ease-out;
        /* 透明度と位置のアニメーション設定（1秒かけて移動） */
        position: relative;
        /* 相対的な位置を設定、これにより`transform`プロパティを使った位置変更が可能に */
    }

    /* .r-b.in-view - 要素がビューポート内に入ったときのスタイル */
    .r-b.in-view {
        opacity: 1;
        /* 画面内に入ったら透明度を1にして表示 */
        transform: translateY(0);
        /* 画面内にスライドインして元の位置に戻る（150%下から0%に移動） */
        /* スライドインアニメーションがここで発生 */
    }

    /* .r-b.landed - 要素が着地して最終的な位置に到達した後のスタイル */
    .r-b.landed {
        opacity: 1;
        /* 着地後、透明度は1のまま表示されたままに */
        transform: translateY(0);
        /* 最終的な位置に到達したため、位置はそのまま固定 */
        /* transition: transform 0.1s ease-out !important; */
        /* 位置の変化を0.5秒かけてアニメーション */
        /* `in-view`のスライドアニメーションとは異なり、位置の調整のみ行い、少し遅れて微調整 */
    }

    /* モーダルボタンのホバースタイル */
    .btn-link:hover {
        color: #2ecc71;
        /* ホバー時に青色に変更 */
        /* text-decoration: underline; */
        /* 下線を追加 */
    }

    a:hover {
        color: #2ecc71;
    }

    /* アニメーション */
    .text {
        font-size: 2rem;
        font-weight: bold;
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-bottom: 1rem;
    }

    .sand-effect span {
        font-size: 2rem;
        font-weight: bold;
        position: relative;
        display: inline-block;
        cursor: pointer;
        color: #333;
        overflow: hidden;
        margin-bottom: 1rem;
    }

    @keyframes disappear {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    @keyframes moveRight {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100vw);
            /* 画面外まで移動 */
        }
    }

    .move-text {
        /* font-size: 3rem; */
        font-weight: bold;
        color: red;
        /* position: absolute; */
        white-space: nowrap;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        animation: moveRight 3s linear forwards;

        position: fixed;
        /* これが重要！ */
        /* position: relative; */
        /* これが重要！ */
        /* height: 100vh; */
        /* 画面の高さを基準にする */
    }

    .bt {
        font-size: 1rem;
        cursor: pointer;
        border: 0.1rem solid #333;
        background-color: #fff;
        transition: background-color 0.3s;
    }

    .bt:hover {
        background-color: #ddd;
    }

    .container0 {
        display: flex;
        /* flex: 0 0 auto; */
        align-items: center;
        /* 子要素を中央揃え */
    }

    /* 表全体の配置 */
    .table-container {
        display: flex;
        /* 横並びに配置 */
        justify-content: center;
        /* 中央寄せ */
        /* margin: 2rem 0; */
        /* 上下の余白 */
        width: 100%;
        /* 表全体の幅を100%に設定 */
        max-width: 56.25rem;
        /* 表の最大幅を設定（900px） */
        margin: 1.25rem auto;
        /* 横方向の中央寄せ */
        padding: 1.25rem;
        /* 表周りのパディング */
        box-sizing: border-box;
        /* パディングを含めた幅設定 */
        overflow-x: auto;
        /* テーブルが画面外に出る場合スクロール可能に */
    }

    /* 表の基本スタイル */
    .simple-table {
        width: 100%;
        /* 表の幅を100%に設定 */
        font-size: 1rem;
        /* テキストの基本フォントサイズ */
        text-align: left;
        /* テキストを左揃え */
        background-color: #f9f9f9;
        /* 表の背景色（薄いグレー） */
        border-collapse: collapse;
        /* 格子線が重ならないように設定 */
    }

    /* 表のセルスタイル */
    .simple-table th,
    .simple-table td {
        padding: 0.5rem;
        /* セルの内側の余白 */
        /* background-color: #fff9c4; */
        /* セルの背景色（薄い黄色） */
        background-color: #FFFFCC;
        /* 図形の色 */
        font-size: 0.9rem;
        /* セル内のフォントサイズ */
        color: #333;
        /* セル内の文字色（暗い灰色） */
        border: 0.0625rem solid #ccc;
        /* セルのボーダー（細いグレーの線） */
        transition: background-color 0.3s ease;
        /* 背景色の変化にスムーズなトランジションを追加 */

        /* td */
        /* white-space: nowrap; */
        /* テキストの折り返しを防ぐ */
        /* word-wrap: normal; */
        /* テキストの折り返しを禁止 */
        overflow: hidden;
        /* コンテンツがはみ出さないようにする */
        text-overflow: ellipsis;
        /* はみ出したテキストに省略記号を追加（任意） */

        /* th */
        /* 見出し部分の背景色（薄い緑） */
        /* font-weight: bold; */
        /* 太字に設定 */

        text-align: left;
        /* 左揃えで読みやすく */
        word-wrap: break-word;
        /* 長いテキストを折り返す */
        line-height: 1.6;
        /* 行間は1.6倍（読みやすさを重視） */
        letter-spacing: 0.05rem;
        /* 少し文字間を広げて視認性を向上 */
        word-spacing: 0.1rem;
        /* 単語間を少し広げて、段落をスッキリ見せる */
        margin-bottom: 1.2rem;
        /* 各段落の下に適度なスペースを追加 */
    }


    /* colspan属性があるヘッダーセル（th）のスタイル */
    .simple-table th[colspan] {
        background-color: #BCF4BC;
        /* セル結合された見出しの背景色（緑） */
        text-align: center;
        /* セル結合部分を中央寄せ */
    }

    /* 表のタイトル（th）にホバー効果を適用 */
    .simple-table th:hover {
        background-color: #c8eddc;
        /* 薄い緑色に変更 */
        color: #000;
        /* 文字色を黒に変更（必要に応じて） */
    }

    /* tbody内のセルにホバー効果 */
    .simple-table tbody td:hover {
        background-color: #dcedc8;
        /* セル単体にもホバー効果を追加 */
    }

    /* 表全体にホバー効果 */
    .simple-table tbody tr:hover td {
        background-color: #e8f5e9;
        /* 行全体がハイライトされる */
    }
</style>
@endsection
@section('content')

<div class="container">
    <div class="space2"></div>

    <h1 class="green-bg" id="section3">【プロフィール】</h1>

    <div class="space2"></div>

    <div class="rounded-box">
        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fa-solid fa-user-circle" style="color: #3498db;"></i> 自己紹介
            </h4>

            <p class="gray-bg">
                私はアニメ、漫画、ゲーム（PSO2、ラチェット＆クランク、モンスターハンター、遊戯王）が好きなエンジニア志望です。
                <br>
                日々進化するスマホゲームやネットゲームを遊ぶ中で、テクノロジーに将来性を感じ、プログラミングを学びたいと思うようになりました。
                <br>
                これまで10年以上続けてきたゲームでは、問題の原因を特定したり、効率的な戦略を考える場面が多くあり、
                <br>
                その中で培った問題解決能力や論理的思考をプログラミングにも活かせると考えています。
                <br>
                就職を検討し始めた頃、通院先と連携している相談支援事業所から就労移行支援の紹介を受けた際に、
                <br>
                アップル梅田でプログラミングが学べることを知り、アップル梅田で本格的に学習を開始しました。
            </p>
        </div>

        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fa-solid fa-lightbulb" style="color: #f1c40f;"></i> 学習の動機と過程
            </h4>

            <p class="gray-bg">
                プログラミング関連の職に就くことを目指し、選択肢を広げるため、事業所で学べるものを中心に可能な限り学習に取り組みました。
                <br>
                java, PHP, HTML, CSS, Javascript, SQLなどの基礎学習から始め、<br>
                Laravel, Vue.js, React, Linuxといった幅広い技術に挑戦しながら、アプリ制作を通じてスキルの向上に努めています。
            </p>
        </div>

        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fa-solid fa-bullseye" style="color: #e74c3c;"></i> 将来の目標
            </h4>

            <p class="gray-bg">
                就職後は、研修等を通して実務に必要となるスキルや働くイメージを養い、
                <br>
                これまでの学びを開発現場で活かせる技術者に成長していきたいと思っています。
            </p>
        </div>

        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fas fa-home" style="color: #2ecc71;"></i> このサイトについて&ensp;
                <span style="margin-right: 5rem; font-size: 0.9rem;">
                    使用言語: HTML, CSS, JavaScript, Laravel10, Vue.js3.4, Bootstrap5.3</span>
            </h4>

            <p class="gray-bg">
                <span style="display: block; margin-top: 0.5rem;"></span>

                <a href="https://laravel10-vue3-client-manager-511pfnz1d-laravelbasics-projects.vercel.app/"
                    target="_blank" style="font-size: 1.5rem; color: #808080;">
                    <i class="fa-solid fa-desktop"></i> 初期の画面
                </a>

                <span style="margin-right: 7.5rem;"></span>

                <a href="https://laravel10-vue3-client-manager-7gtumsjgf-laravelbasics-projects.vercel.app/"
                    target="_blank" style="font-size: 1.5rem; color: #4682B4;">
                    <i class="fa-solid fa-desktop"></i> 中間の画面
                </a>

                <span style="margin-right: 7.5rem;"></span>

                <a href="#" target="_blank" style="font-size: 1.5rem; color: #32CD32;">
                    <i class="fa-solid fa-desktop"></i> 最新の画面
                </a>


                <br>
                <span style="margin-top: 2em; display: block;"></span>

                <strong style="font-size: 1.125rem;">初期の構成:</strong>
                <br>
                レイアウトはどのようにすれば良いのか見当がつかず、ChatGPTを活用して、タイトルや見出し、文章を中心にした文字主体の構成を試みました。
                <br>
                <span style="margin-top: 1em; display: block;"></span>

                <strong style="font-size: 1.125rem;">中間の構成:</strong>
                <br>
                構成に行き詰まったため、就労移行支援の職員に改良案を質問しました。
                <br>
                その後、いただいたアドバイスを取り入れながら、構成に迷った際には積極的に質問を行い、自ら試行錯誤して改良を加えました。
                <br>
                文章の背景色（background-color）を灰色に変更し、タイトルを緑に設定。デザインに変化を加え、視覚的に調整しました。
                <br>
                Font Awesome（フリー素材）を使ってアイコンを追加、区画を整理して、枠線（border）を追加しました。デザインが視覚的に整い始めました。
                <br>
                <span style="margin-top: 1em; display: block;"></span>

                <strong style="font-size: 1.125rem;">最新の構成:</strong>
                <br>
                図形に影をつけ、タイトルの順番を変更。&lt;p&gt;や&lt;h&gt;タグのフォントや行間をCSSで調整、視認性を向上。
                <br>
                一部にアニメーションを使用、文章やサイドバーの改善も行いました。
                <br>
                また、画面が小さくなるとサイドバーがハンバーガーアイコンに変わるようレスポンシブ対応し、絶対値（px）を相対値（rem）に変更しました。
                <br>
                <strong>レイアウトでは、UIの視認性を重視しました。</strong>
            </p>
        </div>


        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fa-solid fa-pencil" style="color: #e67e22;"></i> 学習内容
                {{-- 学習中の言語と開発環境 --}}
            </h4>

            <p class="gray-bg">
                <strong>プログラミング言語:</strong> Java, PHP, HTML, CSS, JavaScript
                <br>
                <strong>フレームワーク:</strong> Laravel 6 / 10 / 11, Vue.js 3.4, Bootstrap 5.3
                <br>
                <strong>データベース:</strong> MySQL, PostgreSQL
                <br>
                <strong>開発環境:</strong> XAMPP, Rocky Linux 9.4, Docker
                <br>
                <strong>デプロイ方法:</strong> GitHubにプッシュし、Vercelからデプロイを実行
            </p>
        </div>

        <div>
            <span class="m-t0"></span>

            <h4>
                <i class="fa-brands fa-github"></i> デプロイ経験
            </h4>
            <div class="gray-bg">

                <div class="d-m-t"></div>

                <strong style="font-size: 1.2rem;">
                    <i class="fas fa-flask" style="color:#9b59b6;"></i>
                    <span style="margin-left: 0.65rem;">試験的にアプリをネット上に公開する取り組み</span>
                </strong>

                <span style="margin-right: 2rem;"></span>
                <button type="button" class="btn btn-link" @click="showHelpModal1"
                    style="font-size: 1.5rem; position: relative; right: 0.75rem; top: -0.275rem;"><i
                        class="fa-solid fa-desktop"></i> 詳細画面へ
                </button>
                <div class="double-space"></div>

                <strong style="font-size: 1.2rem;">
                    <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
                </strong>

                <div class="d-m-t2"></div>

                <p style="text-indent: 1.8rem;">
                    <small style="text-indent: 1.8rem; font-size: 1rem;">Windows環境: XAMPP</small>
                    <br>
                    <small style="margin-left: 1.8rem; font-size: 1rem;">技術: Laravel 10, 11 / PHP 8.2 /
                        PostgreSQL</small>
                    <br>
                    <small style="margin-left: 1.8rem; font-size: 1rem;">成果: VercelDBとの接続に成功</small>

                    <hr>

                    <small style="margin-left: 1.8rem; font-size: 1rem;">Linux環境: VirtualBox + Rocky Linux 9.4</small>
                    <br>
                    <small style="margin-left: 1.8rem; font-size: 1rem;">技術: Laravel 6 / PHP 7.4 / PostgreSQL</small>
                    <br>
                    <small style="margin-left: 1.8rem; font-size: 1rem;">成果: Linux環境も成功</small>
                </p>
            </div>
            <div class="space25"></div>
        </div>
    </div>

    <div class="double-space4"></div>

    <h1 class="green-bg" id="section4">【学習履歴】</h1>

    <div class="space2"></div>

    <div class="rounded-box">

        <div class="double-space"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fab fa-java" style="color: #f89820;"></i> 2023年10月: Javaの学習（プログラミングを0から学習開始）
        </h5>

        <p class="gray-bg">
            10月&ensp;1日&ensp;〜&ensp;1月19日: Java基礎、アルゴリズム、2次元配列、例外処理、ファイル入出力など（約4ヶ月）
            <br>
            &ensp;1月22日&ensp;〜&ensp;2月13日: エクリプス上で動くブラック・ジャックを制作（約3週間）
        </p>

        <div class="double-space2"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fab fa-php" style="color: #8993be;"></i> 2024年2月: PHPの学習（その他: HTML,CSS,JavaScript,SQL）
        </h5>

        <p class="gray-bg">
            &ensp;2月15日&ensp;〜&ensp;3月14日: PHP基礎, アルゴリズム基礎15問, 応用15問
            <br>
            &ensp;3月15日&ensp;〜&ensp;3月16日: HTML,CSS,JavaScript
            <br>
            &ensp;3月19日&ensp;〜&ensp;3月22日: JavaScript
            <br>
            &ensp;3月25日&ensp;〜&ensp;3月27日: SQL
            <br>
            &ensp;3月29日&ensp;〜&ensp;4月&ensp;1日: Python
            <br>
            &ensp;4月&ensp;1日&ensp;〜&ensp;4月30日: <i class="fa-solid fa-file-word" style="color: #2b5797;">
            </i> <i class="fa-solid fa-file-excel" style="color: #217346;">
            </i> <i class="fa-solid fa-file-powerpoint" style="color: #D54E00;">
            </i> Microsoft Officeを学習
            <br>
            &ensp;4月25日&ensp;〜&ensp;5月17日: PDO（PHP Data Objects）
        </p>

        <div class="double-space2"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 2024年5月:
            Laravelの学習（XAMPP,composer,MySQL,Vue.js,React）
        </h5>

        <p class="gray-bg">
            &ensp;5月20日&ensp;〜&ensp;6月24日: Laravel基礎（PHPのフレームワーク）
            <br>
            &ensp;6月25日&ensp;〜&ensp;7月&ensp;4日: ①メルカリ風フリマアプリ制作、
            <i class="fa-solid fa-file-excel" style="color: #217346;"></i> 企業案件Excelデータ入力(一日目10件、二日目20件)
            <br>
            &ensp;7月&ensp;8日&ensp;〜&ensp;7月24日: ②SNS風アプリ制作、PC4台キッティング作業
            <br>
            &ensp;7月26日&ensp;〜&ensp;7月31日: 職員が作成した基本設計書をもとに、③本管理アプリの機能変更、追加。
            <i class="fab fa-react" style="color: #61DBFB;"></i>React学習
            <br>
            &ensp;7月31日&ensp;〜&ensp;8月&ensp;5日: JavaScript、Git、HTML&CSS
            <br>
            &ensp;8月&ensp;6日&ensp;〜&ensp;8月&ensp;7日: JavaScriptによるDOM操作
            <br>
            &ensp;8月&ensp;8日&ensp;〜&ensp;8月16日: 実習に備えて<i class="fab fa-vuejs" style="color: #42b883;"></i>Vue.js3
        </p>

        <div class="double-space2"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fa-solid fa-gear" style="color: #2ecc71;"></i> 2024年8月: プログラミング企業実習
        </h5>

        <p class="gray-bg">
            &ensp;8月19日&ensp;〜&ensp;9月19日: 企業実習（株式会社リテラル）
            <br>
            &ensp;9月24日&ensp;〜&ensp;9月27日: 実習のコードを改修に挑戦。④顧客管理システムを改修したアプリ、
            <i class="fa-solid fa-file-excel" style="color: #217346;"></i> Excel企業案件データ入力(約10件)
            <br>
            &ensp;9月28日&ensp;〜&ensp;9月30日: jQuery
            <br>
            10月&ensp;1日&ensp;〜10月&ensp;7日: 実習に備えて、事前にLinux学習（Ubuntu、LAMP構築）
            <br>
            10月&ensp;8日&ensp;〜10月10日: 企業実習（外部）、Rocky Linux 9 LAMP環境構築、⑤お問い合わせフォームアプリ制作
            <br>
            10月11日&ensp;〜10月16日: 実習の復習
        </p>

        <div class="double-space2"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #2ecc71;"></i> 2024年10月: デプロイに挑戦（成功後にポートフォリオ制作）
        </h5>

        <p class="gray-bg">
            10月17日&ensp;〜10月19日: 職員が制作中の教材をデバッグ。Docker学習。⑥Laravelでデプロイに挑戦。成功したので職員へフィードバック
            <br>
            10月18日&ensp;〜10月29日: ポートフォリオ一次制作、①～⑥デプロイの検証
        </p>

        <div class="double-space2"></div>

        <h5 style="font-size: 1.2rem;">
            <i class="fas fa-user-tie" style="color: black;"></i> 2024年10月: 就職活動（ポートフォリオ随時更新）
        </h5>

        <p class="gray-bg">
            10月29日&ensp;〜&ensp;&ensp;月&ensp;&ensp;日: 就職活動開始、ポートフォリオ随時更新（公開日 2024/10/29）
            <br>
            11月&ensp;1日&ensp;〜11月&ensp;7日: ②SNS風アプリの見直し、Vue.jsが本番で正常に動作するよう改善
            <br>
            11月&ensp;8日&ensp;〜11月20日: ①メルカリ風フリマアプリの見直し、デプロイ後に画像処理が動作するよう仕様を変更
            <br>
            11月21日&ensp;〜12月10日: ポートフォリオにJava追加
            <br>
            12月11日&ensp;〜&ensp;&ensp;月&ensp;&ensp;日: 職員からフィードバックを受けて、ポートフォリオのレイアウトを見やすさ重視に一新
        </p>
    </div>

    <div class="double-space4"></div>

    <h1 class="green-bg" id="section5">【企業実習】</h1>

    <div class="space2"></div>

    <div class="rounded-box">
        <div class="d-m-t"></div>

        <div>
            <h4>
                <strong>
                    <i class="fa-solid fa-gear" style="color: #2ecc71;"></i> 企業実習（株式会社リテラル）
                </strong>
            </h4>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        &ensp;&ensp;8/19～9/19（1ヶ月間）&ensp;&ensp;10～16時（休憩1時間）

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            過去の案件顧客管理システムの一部を基本設計書、詳細設計書を元に制作（マイグレーション、シーダー、モデルは事前に用意された物を使用）
            <br>
            環境構築: ローカル環境、XAMPP（Laravel 10, PHP 8.2）、GitHubを使用しBacklogにプッシュ。
            <br>
            使用言語: Laravel 10, CDN, Vue.js 3.3, Bootstrap 5.3, MySQL
            <br>
            コミュニケーションツール: 実習中にSlackを使用し、チームメンバーとのコミュニケーションを円滑に行いました。
            <br>
            成果: 4画面大体完成。ログイン機能は無し。実習の評価は優秀でした。
            <br>
            CSS（相対位置、絶対位置の違い）、データベース、コードの可読性などは更なる学習が必要と感じました。
        </p>
    </div>

    <div class="double-space"></div>

    <div class="rounded-box" id="section9">
        <div>
            <div class="d-m-t"></div>

            <h3>
                <strong style="margin-right: 5rem;">
                    <i class="fa-solid fa-users" style="color: #2ecc71;"></i> 顧客管理システムを改修したアプリ
                </strong>
            </h3>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem; position: relative; top: 0.05rem; display: inline-block;">
            <i class="fa-solid fa-chalkboard-teacher" style="color: #ffce47;"></i> アプリの説明
        </strong>

        <span style="margin-right: 5rem;"></span>

        <a href="https://laravel10-vue3-client-manager.vercel.app/learning-days" target="_blank"
            style="font-size: 1.5rem;">
            <i class="fa-solid fa-desktop"></i> アプリの画面
        </a>

        <span style="margin-right: 5rem;"></span>

        <a href="https://github.com/LaravelBasics/Laravel10_Vue3_ClientManager/tree/master" target="_blank"
            style="font-size: 1.5rem;">
            <i class="fa-brands fa-github"></i> GitHub
        </a>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            このアプリでは、プログラミング言語に紐付く教材、その教材に紐付く学習した日数など、データの管理を行います。
            <br>
            検索の一例:&ensp;「学習した日数一覧」画面に移動後、プログラミング言語を選択し、
            <br>
            教材をクリックすると、プログラミング言語に紐づいた教材が取得されます（取得するまでにタイムラグがあります）。
            <br>
            <strong class="yellow" style="font-weight: bold;">※検索ボタンを空のままクリックすると、データベースから全件取得されます。</strong>
            <br>
            左側のサイドバー「プログラミング」をクリック ➡ 「学習したプログラミング」から4つの画面にアクセスできます。
            <br>
            実習で使用していたサイドバー部分は「A-1」などの表記に変更しています。
            <br>
            登録、編集、削除、バリデーション（入力されたデータが正しいかどうかをチェックする仕組み）や、
            <br>
            ソート（昇順・降順）も行えます。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（1ヶ月）+&ensp;改修期間（1週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            実習中に制作した期間が1ヶ月で、その後1週間でコードの改修を行いました。
            <br>
            改修作業は実習後に行い、社外秘の情報が含まれているため、職員に確認を取り、実習で制作したコードを基に改修に挑戦しました。
            <br>
            元の仕様イメージ「親会社」に紐付く「子会社」を変更し、
            <br>
            「プログラミング言語」に紐づく「教材」、「教材」に紐づく「学習日数」という設計に変更しました。
            <br>
            これに伴い、マイグレーションでテーブル名やユニークカラムを変更し、それに応じてモデル、コントローラー、リクエストクラス、ブレードなどを修正しました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #ffce47;"></i> デプロイ
        </strong>
        <span class="p2">&ensp;（アプリをネット上に公開すること）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            CDNを使用していたため、Vue.jsやBootstrapの動作も問題なくスムーズにデプロイできました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
        </strong>

        <div class="d-m-t2"></div>

        <p class="gray-bg">Windows, Laravel 10, CDN Vuejs 3.3, Bootstrap 5.3</p>

    </div>

    <div class="double-space"></div>

    <div class="rounded-box">
        <div>
            <div class="d-m-t"></div>

            <h4>
                <strong>
                    <i class="fa-solid fa-cogs" style="color: #2ecc71;"></i> 企業実習（外部）
                </strong>
            </h4>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        &ensp;&ensp;10/8～10/10（3日間）&ensp;&ensp;13～17時（小休憩自由）

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            課題①バーチャルボックスを使用してローカルにLAMP環境を構築し、Laravel 11をインストール。
            <br>
            課題②として⑤簡易問い合わせフォームを制作（テスト用にメールトラップで受信を確認しました）。
            <br>
            成果: 初めてLinuxを学習（実習1週間前の情報は、バーチャルボックスでLAMP環境を構築することのみ、事前の学習期間は1週間）、
            <br>
            即戦力を求めていたため全体的に難しい課題だったものの、事前学習の甲斐もあり課題は達成できました。
        </p>
    </div>

    <div class="double-space"></div>

    <div class="rounded-box" id="section10">
        <div>
            <div class="d-m-t"></div>

            <h3>
                <strong style="margin-right: 5rem;">
                    <i class="fa-solid fa-envelope" style="color: #2ecc71;"></i> お問い合わせフォームアプリ
                </strong>
            </h3>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem; position: relative; top: 0.05rem; display: inline-block;">
            <i class="fa-solid fa-chalkboard-teacher" style="color: #ffce47;"></i> アプリの説明
        </strong>

        <span style="margin-right: 5rem;"></span>

        <a href="https://laravel11-contact-form.vercel.app/" target="_blank" style="font-size: 1.5rem;">
            <i class="fa-solid fa-desktop"></i> アプリの画面
        </a>

        <span style="margin-right: 5rem;"></span>

        <a href="https://github.com/LaravelBasics/Laravel11_ContactForm/tree/master" target="_blank"
            style="font-size: 1.5rem;">
            <i class="fa-brands fa-github"></i> GitHub
        </a>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            このアプリでは、必須項目を入力し、「個人情報の取り扱いに同意する」にチェックを入れて、
            <br>
            確認ボタンを押すと内容確認画面が表示されます。
            <br>
            その後、送信ボタンを押すと、管理者宛てにメールが送信され、
            <br>
            送信後はサンクス画面が表示「トップページに戻る」をクリックすると最初の画面に戻ります。
            <br>
            web画面は最低限の機能のみを実装しています。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（3～4時間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            外部実習で制作したアプリ。フロントエンドは最低限の機能（バリデーション、送信時に同意するチェックボックスなど）で実装しました。
            <br>
            テスト用にメールトラップで受信を確認しました。
            <br>
            Laravel 11は初めて触ったので、メール、管理者、送信者など難しかったです。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #ffce47;"></i> デプロイ
        </strong>
        <span class="p2">&ensp;（アプリをネット上に公開すること）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            デプロイ後も動作するのか気になったため挑戦し、無事にメールトラップで受信できました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
        </strong>

        <div class="d-m-t2"></div>

        <p class="gray-bg">バーチャルボックス, LAMP(RockyLinux9.4, apache 2.4, MySQL 8.0, PHP8.2), Laravel 11</p>
    </div>

    <div class="double-space4"></div>

    <h1 class="green-bg" id="section1">【PHP制作実績】</h1>

    <div class="double-space"></div>

    <div>
        <div class="double-space2"></div>

        <h5>
            <i class="fa-solid fa-sync-alt" style="color: #ffce47;"></i>
            <strong class="p3"> サーバーレス環境で稼働中のPHPアプリ（Vercel + Laravel + PostgreSQL）</strong>

            <br>

            <span class="p-l"></span>

            <span class="m-t">インターネット上に公開中です。無料プランのため通信速度など遅くなることがあります。予めご了承ください。</span>

            <br>

            <span class="p-l"></span>


            <span class="p3" style="font-weight: bold; font-size: 1rem; padding-left: 0.2rem;">
                ※Vercelの無料プランではリソース制限により、画像処理で504エラーが発生する場合があります。エラー時は少し時間を置いて再試行してください。
            </span>
        </h5>

        <div class="double-space2"></div>
    </div>

    <div class="double-space"></div>

    <div class="space2"></div>

    <div class="rounded-box" id="section6">
        <div>
            <div class="d-m-t"></div>

            <h3>
                <strong style="margin-right: 5rem;">
                    <i class="fa-solid fa-shopping-cart" style="color: #2ecc71;"></i> メルカリ風フリマアプリ
                </strong>
            </h3>
        </div>

        <div class="double-space"></div>

        <div>
            <strong style="font-size: 1.2rem; position: relative; top: 0.05rem; display: inline-block;">
                <i class="fa-solid fa-chalkboard-teacher" style="color: #ffce47;"></i> アプリの説明
            </strong>

            <span style="margin-right: 5rem;"></span>

            <a href="https://laravel6-flea-market.vercel.app/" target="_blank" style="font-size: 1.5rem;">
                <i class="fa-solid fa-desktop"></i> アプリの画面
            </a>

            <span style="margin-right: 5rem;"></span>

            <a href="https://github.com/LaravelBasics/Laravel6_FleaMarket/tree/main" target="_blank"
                style="font-size: 1.5rem;">
                <i class="fa-brands fa-github"></i> GitHub
            </a>
        </div>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            このアプリは、商品の出品・購入を管理できるフリマアプリです。
            <br>
            出品中の商品は検索可能で、購入済みの商品には「SOLD」のタグが表示されます。
            <br>
            メールアドレスとパスワードでログイン後、画面右上の▼アイコンからユーザーメニューにアクセスできます。
            <br>
            ユーザーのプロフィール（名前や画像）は編集可能です。
            <br>
            トップページには、画面左上のMelpitアイコンをクリックして移動できます。
            <br>
            画像のアップロードはPCのエクスプローラーから直接選択可能です。（詳細は「デプロイ」に記載）
        </p>

        <div class="double-space2"></div>

        <!-- 反省・評価アイコン -->
        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（3週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            教材の環境と異なるためエラー対応や、Laravel 6でLaravel 7の機能再現に挑戦しました。
            <br>
            クレジットカード決済（PAY.JP）、Mailtrap.ioによるメール送受信、
            <br>
            画像の保存処理にJavaScriptを利用するなど、基礎を学びつつエラー解決に取り組みました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #ffce47;"></i> デプロイ
        </strong>
        <span class="p2">&ensp;（アプリをネット上に公開すること）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            Windowsで制作したプロジェクト①をLinuxにコピーし、Laravel 6を使用して、デプロイに挑戦しました。
            <br>
            画像処理を除く機能は正常に動作しましたが、Vercelのサーバーレス環境ではPHPのライブラリが制限されており、
            <br>
            ユーザーがPCから選択した画像を直接保存して表示する機能が実現できませんでした。
            <br>
            そのため、事前にローカルでpublic/imagesに画像を保存し、デプロイ後に保存された画像を表示するように仕様を変更しました。
            <br>
            これにより、一時的に画像処理の機能が動作するようになりました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
        </strong>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            Windows, Laravel 6, JavaScript, MySQL（教材の環境: Windows, Laravel 7, Docker, JavaScript, MySQL）
        </p>
    </div>

    <div class="double-space"></div>

    <div class="rounded-box" id="section7">
        <div>
            <div class="d-m-t"></div>

            <h3>
                <strong style="margin-right: 5rem;">
                    <i class="fa-solid fa-comment-dots" style="color: #2ecc71;"></i> SNS風アプリ
                </strong>
            </h3>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem; position: relative; top: 0.05rem; display: inline-block;">
            <i class="fa-solid fa-chalkboard-teacher" style="color: #ffce47;"></i> アプリの説明
        </strong>

        <span style="margin-right: 5rem;"></span>

        <a href="https://laravel6-sns.vercel.app/" target="_blank" style="font-size: 1.5rem;">
            <i class="fa-solid fa-desktop"></i>
            アプリの画面
        </a>

        <span style="margin-right: 5rem;"></span>

        <a href="https://github.com/LaravelBasics/Laravel6_SNS" target="_blank" style="font-size: 1.5rem;">
            <i class="fa-brands fa-github"></i> GitHub
        </a>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            このSNS風アプリでは、記事の投稿・編集やいいね「<i class="fas fa-heart" style="color: red;"></i>」、ユーザーフォローが行えます。
            <br>
            メールアドレスとパスワードでログイン後、左上の「Memo」からトップページへ移動可能。
            <br>
            右上の「投稿する」ボタンで新規投稿ができ、投稿済みの記事は「︙」から編集が行えます。
            <br>
            <span class="tag">#タグ</span>
            をクリックすると同じタグの記事を検索でき、ユーザー名を押すとそのユーザーのページへ移動。
            <br>
            ユーザーページでは、そのユーザーの投稿が閲覧でき、フォロー／フォロー解除が行えます。
            <br>
            <i class="fas fa-heart" style="color: #808080;"></i>を押すといいね「<i class="fas fa-heart"
                style="color: red;"></i>」が付き、
            赤い状態でクリックすると逆に解除されます。
            <br>
            ※無料プランのため、「いいね」の反映には5～6秒のタイムラグがあります。
            <br>
            未ログイン時は一部機能が制限され、ポップアップで案内が表示されます。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（3週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            初めてのVue.jsとLaravelの環境構築に苦戦し、
            <br>
            特にnpm依存関係のエラーでVue.jsを2から3へバージョンアップしたため、記述の違いにさらに時間がかかりました。
            <br>
            教材通りの機能は実装できたものの、Vueコンポーネントの理解が不十分でした。
            <br>
            また、Googleアカウントでのログイン機能の実装も困難でしたが、無事に実現しました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #ffce47;"></i> デプロイ
        </strong>
        <span class="p2">&ensp;（アプリをネット上に公開すること）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            Linux上でLaravel 6を用いたデプロイに挑戦した際、Laravel Mixのmix.jsを使ったVue.js機能が本番環境で動作しないという課題に直面しました。
            <br>
            これに対して、npm run productionでビルドを行い、vercel.jsonの設定を見直した後、
            <br>
            npx vercel --forceで再度デプロイ、これによりVue.jsが本番で正常に動作するよう改善しました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
        </strong>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            Windows, Laravel 6, Vue.js 3, MySQL（教材の環境: MacOS, Laravel 6, Docker, Vue.js 2, PostgreSQL）
        </p>
    </div>

    <div class="double-space"></div>

    <div class="rounded-box" id="section8">
        <div>
            <div class="d-m-t"></div>

            <h3>
                <strong style="margin-right: 5rem;">
                    <i class="fa-solid fa-book-open" style="color: #2ecc71;"></i> 本管理アプリ
                </strong>
            </h3>
        </div>

        <div class="double-space"></div>

        <strong style="font-size: 1.2rem; position: relative; top: 0.05rem; display: inline-block;">
            <i class="fa-solid fa-chalkboard-teacher" style="color: #ffce47;"></i> アプリの説明
        </strong>

        <span style="margin-right: 5rem;"></span>

        <a href="https://laravel10-books.vercel.app/" target="_blank" style="font-size: 1.5rem;">
            <i class="fa-solid fa-desktop"></i> アプリの画面
        </a>

        <span style="margin-right: 5rem;"></span>

        <a href="https://github.com/LaravelBasics/Laravel10_Books" target="_blank" style="font-size: 1.5rem;">
            <i class="fa-brands fa-github"></i> GitHub
        </a>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            画面右上からメールアドレスとパスワードでログイン後、
            <br>
            「Books」をクリックすると、本管理ページに移動します。
            <br>
            このページでは、本の登録・編集・削除が可能で、ページネーションにも対応しています。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（1週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            就労支援の職員が作成した基本設計書をもとに、本管理アプリの機能変更と追加を行いました。
            <br>
            Laravelシーダーのファクトリークラスでダミーデータを生成した際に、ダミーデータを英語から日本語に変更するのに苦戦しました。
            <br>
            職員に動作確認をしてもらい機能自体は完成しましたが、Reactの理解が不十分でした。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-cloud-upload-alt" style="color: #ffce47;"></i> デプロイ
        </strong>
        <span class="p2">&ensp;（アプリをネット上に公開すること）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            デプロイ経験を積んでいたので、React（JSXファイル）のデプロイはスムーズに進みました。
        </p>

        <div class="double-space2"></div>

        <strong style="font-size: 1.2rem;">
            <i class="fab fa-laravel" style="color: #F65314;"></i> 開発環境
        </strong>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            Windows, Laravel 10, React, 認証パッケージBreeze, PostgreSQL
        </p>
    </div>

    <div class="double-space4"></div>

    <h1 class="green-bg" id="section2">【Java制作実績】</h1>

    <div class="space2"></div>

    <div class="rounded-box" id="section13">
        <h4>
            <i class="fa-solid fa-layer-group" style="color: #3498db;"></i> <button type="button" class="btn btn-link"
                @click="showHelpModal2" style="font-size: 1.5rem; position: relative; right: 0.75rem;">青森鹿児島問題（二次元配列）
            </button>
        </h4>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（約2週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            問題を【1】から順番に解いたため、コードは問題【4】、研究問題【1】のみです。（不要なコードもあります。テスト用など）
            <br>
            また、研究問題【1】のコードは実行時間3秒（ひとつのメソッドにまとめ、メソッドを呼ぶ回数を減らすと、2秒でした）
            <br>
            研究問題【2】 5 * 5に減らすなどして、コード自体は完成したものの、
            <br>
            100 * 100だと、数分待っても処理が終わらないため、実行時間も含めると20 * 20までが限界でした。
            <br>
            コードの書き方次第で処理速度が大きく変わるなど、色々と勉強になりました。
        </p>
    </div>

    <div class="double-space"></div>

    <div class="rounded-box" id="section14">
        <h4>
            <span style="position: relative; top: 0.25rem;">&#127137; </span>
            <button type="button" class="btn btn-link" @click="showHelpModal3"
                style="font-size: 1.5rem; position: relative; right: 0.5rem;">ブラックジャック
            </button>
        </h4>

        <strong style="font-size: 1.2rem;">
            <i class="fa-solid fa-undo-alt" style="color: #ffce47;"></i> 振り返り
        </strong>
        <span class="p2">&ensp;&ensp;制作期間（3週間）</span>

        <div class="d-m-t2"></div>

        <p class="gray-bg">
            ゲームの仕様やカード処理の順番（一人用にするか、対戦できるようにするか、カードを引く順番など）を決めて、
            <br>
            処理の仕方が分からない部分は職員に質問し、何度もデバッグしながら挑戦しました。
            <br>
            特に、エース【1】の扱い、勝敗判定の条件式に苦戦しながら、無事に完成しました。
        </p>
    </div>

    <div class="double-space"></div>

    <div>
        <div class="d-s"></div>

        <div class="r-b" style="text-align: center; margin-right: 1rem;" ref="animatedElement">
            <p>最後までご覧いただき、ありがとうございます。</p>
            <p>これまでの学習と経験を活かし、さらに技術を磨いていきたいと思っております。</p>
            <p>ご興味をお持ちいただけましたら、ぜひお気軽にご連絡ください。</p>
            <p>どうぞよろしくお願いいたします。</p>
        </div>

        <div class="d-s2"></div>

        <hr>

        <button v-if="!isBtn" class="bt" @click="handle">おまけ</button>

        <div class="space"></div>

        <div v-if="isBtn" class="container0">
            <div class="text" @click="handleClick">@{{ displayText }}</div>
            <button class="bt" @click="handleClick" style="white-space: nowrap;">出荷する</button>
            <div class="sand-effect" ref="sandEffect"></div>
        </div>

        <!-- 「トラック」をv-ifで表示を切り替え -->
        <div v-if="showA" class="move-text" v-cloak>
            <!-- トラックアイコン -->
            <small style="font-size: 2.5rem; font-style: italic; color: #000000;">(´・ω・｀)</small>
            <i class="fa-solid fa-truck-fast" style="font-size: 5rem; color: #F4A300;"></i>
        </div>

        <div class="d-s2"></div>
    </div>

    <!-- 青森鹿児島問題モーダル -->
    <div class="modal fade" id="helpModal2" tabindex="-1" aria-labelledby="helpModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 52.03rem;">
            <div class="modal-content" style="height: 37.80rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel2">
                        青森鹿児島問題
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>二次元配列があり、中には0と1がランダムで入っています。※この二次元配列を世界と呼ぶことにします
                        <br>
                        世界の中から青森と鹿児島の数を数えて表示します。以下は青森と鹿児島の定義です
                    </p>
                    <hr>
                    <div>
                        <table class="inline-table" border="1">
                            <tb>青森</tb>
                            <tr>
                                <td class="aomori">1</td>
                                <td class="aomori">0</td>
                                <td class="aomori">1</td>
                            </tr>
                            <tr>
                                <td class="aomori">1</td>
                                <td class="aomori">1</td>
                                <td class="aomori">1</td>
                            </tr>
                        </table>
                        <table class="inline-table" border="1">
                            <tb>鹿児島</tb>
                            <tr>
                                <td class="kagoshima">1</td>
                                <td class="kagoshima">1</td>
                                <td class="kagoshima">1</td>
                            </tr>
                            <tr>
                                <td class="kagoshima">1</td>
                                <td class="kagoshima">0</td>
                                <td class="kagoshima">1</td>
                            </tr>
                        </table>
                        <table class="inline-table" border="1">
                            <tb>三重</tb>
                            <tr>
                                <td class="mie">1</td>
                                <td class="mie">0</td>
                            </tr>
                            <tr>
                                <td class="mie">1</td>
                                <td class="mie">1</td>
                            </tr>
                            <tr>
                                <td class="mie">1</td>
                                <td class="mie">0</td>
                            </tr>
                        </table>
                        <div class="inline-table">
                            <p>世界の例 ➡<br>
                                青森の数: 1個<br>
                                鹿児島の数: 2個
                            </p>
                        </div>
                        <table class="inline-table" border="1">
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <h5>問題 【1】</h5>
                    &ensp;&ensp;10 * 10 の世界を作成し、その中の青森と鹿児島の数を教えてください
                    <hr>
                    <h5>問題 【2】</h5>
                    &ensp;&ensp;3000 * 3000 の世界を作成し、その中の青森と鹿児島の数を教えてください。
                    ただし1秒以内に数え終わってください
                    <hr>
                    <h5>問題 【3】</h5>
                    &ensp;&ensp;新しく三重を追加します。
                    10 * 10 の世界を作成し、その中の青森と鹿児島と三重の数を教えてください
                    <hr>
                    <h5>問題 【4】
                        <a href="https://github.com/LaravelBasics/java/blob/master/src/%E9%9D%92%E6%A3%AE%E9%B9%BF%E5%85%90%E5%B3%B6%E5%95%8F%E9%A1%8C/Main.java"
                            target="_blank" style="padding-left: 4.3rem;">
                            <i class="fa-brands fa-github"></i> 自身で制作したコード
                        </a>
                    </h5>
                    &ensp;&ensp;5 * 5の世界の中に存在できる青森の最大の数と、その配置を求めてください
                    <hr>
                    <h5>研究問題 【1】
                        <a href="https://github.com/LaravelBasics/java/blob/master/src/%E9%9D%92%E6%A3%AE%E9%B9%BF%E5%85%90%E5%B3%B6%E5%95%8F%E9%A1%8C/kennkyuu.java"
                            target="_blank" style="padding-left: 2rem;">
                            <i class="fa-brands fa-github"></i> 自身で制作したコード
                        </a>
                    </h5>
                    &ensp;&ensp;10000 * 10000 の世界を作成し、その中の青森と鹿児島の数を教えてください
                    ただし、１秒以内に数えて終わってください
                    <hr>
                    <h5>研究問題 【2】</h5>
                    &ensp;&ensp;100 * 100の世界の中に存在できる青森、鹿児島、三重の合計の最大の数と、その配置を求めてください

                    <div class="double-space"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- ブラックジャックモーダル -->
    <div class="modal fade" id="helpModal3" tabindex="-1" aria-labelledby="helpModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 59.05rem;">
            <div class="modal-content" style="height: 37.80rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel3">
                        ブラックジャック
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>【自身で考えたゲームの流れ】
                        <a href="https://github.com/LaravelBasics/java/blob/master/src/%E3%83%96%E3%83%A9%E3%83%83%E3%82%AF%E3%82%B8%E3%83%A3%E3%83%83%E3%82%AF/Game.java"
                            target="_blank" style="padding-left: 2rem;">
                            <i class="fa-brands fa-github"></i> 自身で制作したコード
                        </a>
                        <hr>
                    </h5>

                    <h6>1.【カードの配布】</h6>
                    <p>
                        &ensp;&ensp;52枚のトランプ（ジョーカーなし）を使用します。
                        <br>
                        &ensp;&ensp;ゲーム開始時、『ディーラー』は『プレイヤー』にカードを2枚ずつ配ります。
                        <hr>
                    </p>

                    <h6>2.【ディーラーの手】</h6>
                    <p>
                        &ensp;&ensp;初めに、『ディーラー』の手のカードは2枚のうち1枚だけが開示されます。
                        <hr>
                    </p>

                    <h6>3.【プレイヤーの選択】</h6>
                    <p>
                        &ensp;&ensp;『プレイヤー』はカードを追加するか『ディーラー』に尋ねられます。
                        <br>
                        &ensp;&ensp;カードを追加したい場合は、【1】を入力します。
                        <br>
                        &ensp;&ensp;十分な点数だと思った場合は、【0】を入力し、その点数のままで『ディーラー』と勝負します。
                        <hr>
                    </p>

                    <h6>4.【カード追加のルール】</h6>
                    <p>
                        &ensp;&ensp;『プレイヤー』はカードを何枚でも追加できます。
                        <br>
                        &ensp;&ensp;ただし、21点を超えてしまうと『プレイヤー』の負けとなります。
                        <hr>
                    </p>

                    <h6>5.【ディーラーのターン】</h6>
                    <p>
                        &ensp;&ensp;『プレイヤー』が選択を終えた後、『ディーラー』がカードをめくります。
                        <br>
                        &ensp;&ensp;『ディーラー』は17点以上になるまでカードを引き続けます。
                        <hr>
                    </p>

                    <h6>6.【勝負のルール】</h6>
                    <p>
                        &ensp;&ensp;『ディーラー』が22点以上になると『ディーラー』の負け。
                        <br>
                        &ensp;&ensp;『プレイヤー』が21点以下の場合、『ディーラー』の負けとなり、『プレイヤー』の勝利となります。
                        <br>
                        &ensp;&ensp;『プレイヤー』が『ディーラー』よりも21点に近い場合、『プレイヤー』の勝ちとなります。
                        <br>
                        &ensp;&ensp;逆に、『ディーラー』よりも21点に遠い場合、『プレイヤー』は負けとなります。
                        <br>
                        &ensp;&ensp;同点の場合は引き分けです。
                        <hr>
                    </p>

                    <h6>7.【カードの数え方】</h6>
                    <p>
                        &ensp;&ensp;2～9 まではそのままの数字、10・J・Q・K は「すべて10点」と数えます。
                        <br>
                        &ensp;&ensp;また、 A （エース）は「1点」もしくは「11点」のどちらに数えても構いません。
                        <hr>
                    </p>

                    <h6>8.【特別な役】</h6>
                    <p>
                        &ensp;&ensp;最初に配られた2枚のカードが「Aと10点札」で21点が完成していた場合を
                        <br>
                        &ensp;&ensp;『ブラックジャック』といい、片方のみの場合その時点で勝ちとなります。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- デプロイ経験表モーダル -->
    <div class="modal fade" id="helpModal1" tabindex="-1" aria-labelledby="helpModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 59.05rem;">
            <div class="modal-content" style="height: 37.80rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel1">
                        デプロイ経験
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="table-container">
                        <table class="simple-table">
                            <thead>
                                <tr>
                                    <th colspan="2">1. 学習のきっかけ</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">学習内容</td>
                                    <td>Docker（WSL）とVercel（GitHub連携）を学べる教材を基に学習を開始。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">背景</td>
                                    <td>
                                        プログラミングの企業実習2か所が終了。学習を検討していた際、就労支援事業所の職員から制作中の教材を紹介される。
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2">2. 提案された学習および活動</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">教材の状況</td>
                                    <td>LaravelアプリをVercelにデプロイしたが、ログイン操作時に500サーバーエラーが発生したため、作業を中断した状態。
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">活動</td>
                                    <td>教材を元に学習を進め、並行してデバッグ作業を実施。デバッグの情報は、日報を通じて職員に共有。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; white-space: nowrap;">アプリの仕様</td>
                                    <td>Breezeを使用したログイン機能のみの状態で、テスト中のものだった。</td>
                                </tr>
                            </tbody>


                            <thead>
                                <tr>
                                    <th colspan="2">3. デプロイへの挑戦</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">環境</td>
                                    <td>Laravelの同一環境を使用し、自らも初のデプロイに挑戦。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">目的</td>
                                    <td>学習 + デプロイができれば、制作したアプリをインターネット上に公開できる。</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="2">4. 課題と解決策</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">課題.1</td>
                                    <td>環境変数とデータベース接続</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">問題</td>
                                    <td>Vercelでのvercel.jsonや.envファイルの記述方法に関する情報が（2024年10月時点）不十分。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">対応</td>
                                    <td>チャットGPTを活用し、情報を収集しつつ約15時間試行錯誤を繰り返した。</td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;">課題.2</td>
                                    <td>PostgreSQLの接続とデプロイ制限</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">問題</td>
                                    <td>ローカル環境でのPostgreSQLインストール、接続設定の必要性が発生。職員と同じ状況まで到達</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">試行</td>
                                    <td>100回デプロイを試行した結果、Vercelの1日あたり100回のデプロイ制限に到達。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">対応</td>
                                    <td>制限解除の待ち時間を活用し就寝、起床後これまでの試行内容を整理。約5時間後デプロイに成功。</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="2">5. 成果と振り返り</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">成功の要因</td>
                                    <td>設定が成功した後、必要な項目を整理し、最初からデプロイを複数回実施。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">情報共有</td>
                                    <td>重要そうな情報をまとめて職員に共有。数日後、職員も無事デプロイに成功。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">成果</td>
                                    <td>学習と試行錯誤の結果、事業所の業務に貢献するに至る。</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="2">6. Linux環境でのデプロイ挑戦</th> <!-- colspanを使ってセルを結合 -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">試行内容</td>
                                    <td>外部の実習で使用したRocky Linuxを活用し、Linux環境にてデプロイに挑戦しました。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">環境構築</td>
                                    <td>VirtualBox + Rocky Linux 9.4環境でのLaravel 6 / PHP 7.4 / PostgreSQLの構成を構築。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">工夫</td>
                                    <td>Windowsでの経験を活かし、環境変数の設定やデータベースの接続方法を調整。</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">結果</td>
                                    <td>工夫を重ねた結果、Linux環境でも無事デプロイに成功しました。</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const app = Vue.createApp({
    data() {
      return {
        isVisible: false, // 初期状態では要素は非表示（アニメーション前）
        isBtn: false, // おまけボタン
        isbar: false, // 初期状態は非表示
        isSidebar: true, // サイドバーの表示・非表示を管理
        menu: {
          jisyu: false,
          php: false,
          java: false,
        },
        phrases: [
          "(´・ω・`)そんなー.;:…(´・ω...:.;::..(´・;::: .:.;: ｻﾗｻﾗ..",
        ],
        clickCount: 0,
        displayText: "(´・ω・｀)らんらん♪",
        showA: false, // ★トラックアイコンを表示するかどうかを管理
      };
    },
    mounted() {
      // ページがロードされたときにスクロールイベントを監視開始
      window.addEventListener('scroll', this.checkVisibility); // スクロール時に`checkVisibility`メソッドを呼び出す
      this.checkVisibility(); // 初期ロード時にも`checkVisibility`メソッドを呼び出し、現在の要素の位置を確認
    },
    unmounted() {
      // コンポーネントが破棄されるときにスクロールイベントの監視を解除
      window.removeEventListener('scroll', this.checkVisibility); // スクロールイベントの監視を解除
    },
    watch: {
      // `isVisible`の値が変わったときに、アニメーションのクラスを切り替える
      isVisible(newVal) {
        const element = this.$refs.animatedElement; // アニメーション対象の要素（`ref`で指定した要素）
        if (newVal) {
          // `isVisible`が`true`になった（要素がビューポート内に入った）場合
          element.classList.add('in-view'); // `in-view`クラスを追加してアニメーションを開始
          element.classList.remove('landed'); // もし`landed`クラスが追加されていれば、それを削除（着地後にスライドが再度発生しないように）
        } else {
          // `isVisible`が`false`になった（要素がビューポート外に出た）場合
          element.classList.add('landed'); // `landed`クラスを追加して、着地後のアニメーションを終了
          element.classList.remove('in-view'); // `in-view`クラスを削除して、スライドアニメーションを停止
        }
      }
    },
    methods: {
      tbar() {
        this.isbar = true; // サイドメニューを表示
      },
      cbar() {
        this.isbar = false; // サイドメニューを非表示
      },
      toggleSubMenu(selectedMenu) {
        // クリックされたメニューがすでに開いているかを確認
        const isOpen = this.menu[selectedMenu];

        // すべてのメニューを一度falseにする
        for (const key in this.menu) {
          this.menu[key] = false;
        }

        // クリックされたメニューが「閉じる」状態なら開く（trueにする）
        if (!isOpen) {
          // クリックされたメニューだけをトグル（trueにする）
          this.menu[selectedMenu] = true;
        }
      },
      toggleSubMenu2(selectedMenu) {
        // すべてのメニューをfalseにする
        for (const key in this.menu) {
          this.menu[key] = false;
        }
      },
      showHelpModal1() {
        const modal = new bootstrap.Modal(document.getElementById('helpModal1'));
        modal.show();
      },
      showHelpModal2() {
        const modal = new bootstrap.Modal(document.getElementById('helpModal2'));
        modal.show();
      },
      showHelpModal3() {
        const modal = new bootstrap.Modal(document.getElementById('helpModal3'));
        modal.show();
      },
      toggleSidebar() {
        // サイドメニューの表示、非表示を変更する
        this.isSidebar = !this.isSidebar;
      },
      handle() {
        this.isBtn = true;
      },
      handleClick() {
        if (this.clickCount % 2 === 0) {
          const newPhrase = this.phrases[0];
          this.displayText = "";
          this.showA = false; // クリックのたびに「トラック」を非表示にする
          this.$refs.sandEffect.innerHTML = ""; // 砂効果の要素をリセット

          this.$nextTick(() => {
            newPhrase.split("").forEach((char, i) => {
              const span = document.createElement("span");
              span.textContent = char;
              span.style.animationDelay = `${i * 0.1}s`; // 0.1秒ずつずらす
              span.style.animation = `disappear 1s forwards ${i * 0.1 + 0.1}s`; // 0.1秒後に消える

              // ★ これがポイント！最後の文字だけanimationendを監視する
              if (i === newPhrase.length - 1) {
                span.addEventListener('animationend', () => {
                  this.showA = true; // 最後の文字のアニメーションが終了したら「トラック」を表示
                });
              }

              this.$refs.sandEffect.appendChild(span);
            });
          });
        } else {
          this.displayText = "(´・ω・｀)らんらん♪";
          this.$refs.sandEffect.innerHTML = ""; // 砂効果をリセット
          this.showA = false; // 「トラック」を非表示にする
        }
        this.clickCount++;
      },
      checkVisibility() {
        const element = this.$refs.animatedElement; // アニメーション対象の要素（`ref`で指定した要素）
        const rect = element.getBoundingClientRect(); // 要素の位置を取得。これにより、ビューポートに対する位置（上端、下端など）を取得できます。

        // 要素がビューポート内に表示されている場合にアニメーションを開始
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          // 要素の上端が画面内に入った、または下端が画面内に入った場合
          this.isVisible = true; // 要素がビューポート内に入ったので`isVisible`を`true`に設定
        } else {
          // 要素がビューポート外に出た場合
          this.isVisible = false; // 要素がビューポート外に出たので`isVisible`を`false`に設定
        }
      }
    }
  }).mount('#app');
</script>
@endsection