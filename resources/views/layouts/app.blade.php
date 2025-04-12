<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'タイトル')</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* スマホ用サイドメニュー */
        .sbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 15.625rem;
            background: #f8f9fa;
            /* 明るい背景色 */
            box-shadow: 0.125rem 0 0.3125rem rgba(0, 0, 0, 0.1);
            z-index: 1001;
            transform: translateX(-100%);
            /* 初期状態: 非表示 */
            transition: transform 0.3s ease-in-out;
            /* アニメーション */

            max-width: 90%;
            /* モーダルの幅を90%にする */
            /* max-height: 80vh; */
            /* ビューポートの80%に制限 */
            overflow-y: auto;
            /* 縦方向にスクロール */
            font-size: 0.9rem;
            /* 小さい画面ではフォントサイズを少し小さく */
        }

        .slide-in {
            transform: translateX(0);
            /* メニューが画面内に表示される */
        }

        /* スライドアウトアニメーション */
        .slide-out {
            transform: translateX(-100%);
            /* メニューが画面外にスライド */
        }

        /* 背景オーバーレイ */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            /* 半透明の黒背景 */
            z-index: 1000;
            /* サイドメニューの背面 */
        }

        /* ここまでスマホ用 */


        .sidebar {
            position: sticky;
            /* 固定されつつ、スクロールに追従 */
            top: 0;
            /* ビューポートの上端に固定 */
            height: 100vh;
            /* 必要に応じて高さを設定 */

            overflow-y: auto;
            max-width: 90%;
            /* モーダルの幅を90%にする */
            /* max-height: 80vh; */
            /* ビューポートの80%に制限 */
        }


        .navhidden .navbar-toggler {
            z-index: 1050;
            /* アイコンが他の要素より前面に表示されるように調整 */
        }

        /* スクリーン幅が768px未満のときに、positionを解除 */
        @media (max-width: 48rem) {
            .sidebar {
                position: static;
                /* スクロール追従を解除 */
                /* height: auto; */
                /* 高さを自動に設定 */
                display: none;
                /* スマホサイズなどはサイドバー非表示 */
                /* overflow-y: auto; */
            }

            .navbar-toggler {
                top: 0.3125rem;
                /* 必要に応じて調整 */
                right: 0.3125rem;
            }

            .navbar .container-fluid {
                justify-content: center;
                /* コンテンツを中央寄せ */
            }

            .navhidden {
                display: block;
                width: 100%;
            }

            .btnHidden {
                display: none;
            }

            .icon-box {
                font-size: 1.5rem;
                border: 0.125rem solid black;
                /* ボーダーの色と太さ */
                padding: 0.5rem;
                /* アイコンと枠線の間隔 */
                display: inline-block;
                /* ボックス化 */
                border-radius: 0.5rem;
                transform: translateX(-0.55rem);
                /* 左に移動（調整値） */
            }

            .icon-box2 {
                font-size: 1.45rem;
                border: 0.125rem solid black;
                /* ボーダーの色と太さ */
                padding: 0.525rem 0.6rem;
                /* アイコンと枠線の間隔 */
                display: inline-block;
                /* ボックス化 */
                border-radius: 0.5rem;
                transform: translateX(-0.55rem);
                /* 左に移動（調整値） */
            }

            .navbar {
                position: sticky;
                /* stickyに変更 */
                top: 0;
                /* スクロールしても画面の上に固定 */
                z-index: 100;
                /* 他の要素より上に表示 */
            }

            .col-md-10 {
                width: 100% !important;
                /* フル幅に変更 */
                padding: 0;
                /* 余白がある場合は調整 */
                /* box-sizing: border-box; */
                overflow-x: hidden;
                /* 横スクロールを防ぐ */
            }

            .mb-0 {
                font-size: 1.25rem;
            }

            .me-4 {
                font-size: 0.85rem;
            }
        }

        @media (min-width: 48rem) {
            .hidden1 {
                display: none;
            }
        }

        .update-info {
            white-space: nowrap;
            /* 文字が折り返されないようにする */
        }

        /* .sepia-bg2 {
            position: relative;
            top: 0;
            left: 0.9375rem;
            text-align: right;
        } */

        /* ローディング画面 */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* リングのスタイル */
        .spinner {
            border: 0.5rem solid #f3f3f3;
            /* 薄い色 */
            border-top: 0.5rem solid #3498db;
            /* トップ部分の色 */
            border-radius: 50%;
            /* 円形にする */
            width: 3.125rem;
            /* リングのサイズ */
            height: 3.125rem;
            animation: spin 1s linear infinite;
            /* アニメーションの設定 */
        }

        /* 回転のアニメーション */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    @yield('style')
</head>

<body>
    <!-- ローディング画面 -->
    <div id="loading-screen">
        <div class="spinner"></div> <!-- 回転するリング -->
    </div>
    <div id="app">
        <!-- ナビゲーションバー -->
        @include('includes.navbar')
        <div v-if="isbar" class="hidden1 sbar" :class="{ 'slide-in': isbar, 'slide-out': !isbar }">
            @include('includes.nav')
        </div>

        <!-- 背景オーバーレイ -->
        <div v-if="isbar" class="overlay" @click="cbar"></div>

        <div class="container-fluid">
            <div class="row">
                <!-- サイドメニュー← -->
                <div v-if="isSidebar" class="col-md-2 bg-light sidebar">
                    @include('includes.left')
                </div>

                <!-- コンテンツ -->
                <div class="col-md-10 mt-0">
                    @yield('content')
                </div>

                <!-- サイドメニュー→ -->
                <div v-if="!isSidebar" class="col-md-2 bg-light sidebar">
                    @include('includes.right')
                </div>

            </div>
        </div>
    </div>

    <!-- Vue 3 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3.3.0/dist/vue.global.prod.js"></script>
    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.4.0/dist/axios.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ページが完全に読み込まれたらローディング画面を非表示にする
        window.onload = function() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.display = 'none'; // ローディング画面を非表示
        };
    </script>

    <!-- スクリプト用のセクション -->
    @yield('scripts')

</body>

</html>