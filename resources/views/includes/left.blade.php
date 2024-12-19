<nav class="nav flex-column">
    <div class="space0"></div>
    <div style="border-radius: 1rem; background-color: rgb(253, 253, 253)">
        <div style="padding-top: 0.5rem;">
            <strong class="sepia-bg2"><span>PHPアプリ共通のアカウント</span></strong>
        </div>
        <div>
            <strong class="sepia-bg2">
                メールアドレス<span style="padding-left: 1.25rem;">test@test</sapn>
            </strong>
        </div>
        <div>
            <strong class="sepia-bg2">パスワード
                <span style="padding-left: 2.75rem;">testtest</sapn>
            </strong>
        </div>
    </div>

    <div style="padding: 0.5rem 0rem 0.5rem 0.85rem;">
        <span class="p2" style="color: #007BFF;">青字</span>をクリックすると詳細へ
    </div>

    <button @click="toggleSidebar" class="btn r-box2" style="text-align: left;">サイドバーを切り替え
        <i class="r-box2i fas fa-toggle-off float-end"></i>
    </button>

    <div class="double-space25">
        {{-- <sapn style="color: red;">(´・ω・｀)？</sapn> --}}
    </div>

    <a class="nav-link r-box" href="/#section3" @click="toggleSubMenu2('close')">【プロフィール】</a>

    <a class="nav-link r-box" href="/#section4" @click="toggleSubMenu2('close')">【学習履歴】</a>

    <a class="nav-link r-box" href="/#section5" @click="toggleSubMenu('jisyu')">【企業実習】
        <span class="float-end">
            <i v-if="!menu.jisyu" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span>
    </a>

    <div v-if="menu.jisyu">
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section9">顧客管理システム改修</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section10">お問い合わせフォーム</a>
    </div>

    <a class="nav-link r-box" href="/#section1" @click="toggleSubMenu('php')">【PHP制作実績】
        <span class="float-end">
            <i v-if="!menu.php" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span>
    </a>

    <div v-if="menu.php">
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section6">メルカリ風フリマアプリ</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section7">SNS風アプリ</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section8">本管理アプリ</a>
    </div>

    <a class="nav-link r-box" href="/#section2" @click="toggleSubMenu('java')">【Java制作実績】
        <span class="float-end">
            <i v-if="!menu.java" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span>
    </a>

    <div v-if="menu.java">
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section13">青森鹿児島問題</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section14">ブラックジャック</a>
    </div>
</nav>