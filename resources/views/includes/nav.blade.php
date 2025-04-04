<nav class="nav flex-column">
    <div class="space0"></div>
    <div style="border-radius: 1rem; background-color: rgb(253, 253, 253);">
        <div style="padding-top: 0.5rem;">
            <strong class="sepia-bg2"><span>アプリ共通のアカウント</span></strong>
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
        <span class="p2" style="color: #007BFF; text-decoration: underline;">青字</span>をクリックすると詳細へ
    </div>

    <div class="double-space25">

    </div>

    <a class="nav-link r-box" href="/#section3" @click="toggleSubMenu2('close')">【プロフィール】</a>

    <a class="nav-link r-box" href="/#section4" @click="toggleSubMenu2('close')">【学習履歴】</a>

    <a class="nav-link r-box" href="/#section5" @click="toggleSubMenu4('jisyu')">【企業実習】
        <!-- <span class="float-end">
            <i v-if="!menu.jisyu" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span> -->
    </a>

    <!-- <div v-if="menu.jisyu">
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section9" @click="toggleSubMenu3">顧客管理システム改修</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section10" @click="toggleSubMenu3">お問い合わせフォーム</a>
    </div> -->

    <a class="nav-link r-box" @click="toggleSubMenu4('php')">【Laravel制作実績】
        <span class="float-end">
            <i v-if="!menu.php" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span>
    </a>

    <div v-if="menu.php">
        <!-- <a class="nav-link ms-0 ms-2 r-b2" href="/#section6" @click="toggleSubMenu3">メルカリ風フリマアプリ</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section7" @click="toggleSubMenu3">SNS風アプリ</a>
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section8" @click="toggleSubMenu3">本管理アプリ</a> -->
        <a class="nav-link ms-0 ms-2 r-b2" href="/#section15">備品管理アプリ</a>
    </div>

    <!-- <a class="nav-link r-box" href="/#section2" @click="toggleSubMenu4('java')">【Java制作実績】
        <span class="float-end">
            <i v-if="!menu.java" class="fas fa-chevron-right"></i>
            <i v-else class="fas fa-chevron-down"></i>
        </span>
    </a> -->

    <!-- <div v-if="menu.java"> -->
        <!-- <a class="nav-link ms-0 ms-2 r-b2" href="/#section13" @click="toggleSubMenu3">青森鹿児島問題</a> -->
        <!-- <a class="nav-link ms-0 ms-2 r-b2" href="/#section14" @click="toggleSubMenu3">ブラックジャック</a>
    </div> -->
</nav>