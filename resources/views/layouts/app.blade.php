<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'タイトル')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .sidebar {
            position: sticky;
            /* 固定されつつ、スクロールに追従 */
            top: 0;
            /* ビューポートの上端に固定 */
            height: 100vh;
            /* 必要に応じて高さを設定 */
        }

        .navbar {
            position: relative;
            /* アイコン位置の基準 */
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
                height: auto;
                /* 高さを自動に設定 */
                /* display: none; */
                /* スマホサイズなどはサイドバー非表示 */
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
        }

        .update-info {
            white-space: nowrap;
            /* 文字が折り返されないようにする */
        }

        .sepia-bg2 {
            /* background-color: lightgreen; */
            position: relative;
            /* 相対位置指定 */
            top: 0;
            /* 上からの位置（デフォルトは0） */
            left: 0.9375rem;
            /* 左から50px移動（右に移動） */
            text-align: right;
        }

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