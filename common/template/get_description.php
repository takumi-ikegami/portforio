<?php
if (is_front_page()) {
    echo 'takumi ikegamiのポートフォリオサイトです';
} else if (is_page()) {
    echo 'takumi ikegamiのポートフォリオサイトのコンタクトページです';
} else if (is_404()) {
    echo 'takumi ikegamiのポートフォリオサイトの404ページです';
}
