<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #7bc9fd, #3898ff);">
    <div class="container-fluid d-flex flex-wrap align-items-center">
        <!-- 左側のコンテンツ -->
        <div class="me-auto">
            <h3 class="mb-0">就労移行支援</h3>
            <small class="form-text text-muted" style="margin-left: 0ch;">アップル梅田</small>
        </div>

        <!-- 右側のコンテンツ -->
        <div class="d-flex ms-auto align-items-center justify-content-end">
            <span class="me-4">更新日: 2024/12/22</span>
            <a href="/" class="btn btn-outline-primary btnHidden"
                style="background-color: white; color: #0d6efd; border-color: #0d6efd; margin-top: 0.3rem;">
                トップページ
            </a>
        </div>

        <!-- ハンバーガーアイコン -->
        <i v-if="!isbar" class="fas fa-bars icon-box hidden1" @click="tbar"></i>
        <div v-if="isbar" @click="cbar"></div>
        <i v-if="isbar" class="fas fa-times icon-box2 hidden1" @click="cbar"></i>
    </div>
</nav>
