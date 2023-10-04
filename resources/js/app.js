import {createApp} from 'vue';

import './bootstrap';

//add vue
import Header from './Header.vue';
import Footer from "./Footer.vue";


createApp(Header).mount("#header")
createApp(Footer).mount("#footer")


// 햄버거 아이콘 클릭 시 메뉴를 열고 닫음
const menuIcon = document.getElementById('menu-icon');
const menuContent = document.getElementById('menu-content');

menuIcon.addEventListener('click', () => {
    if (menuContent.style.display === 'block') {
        menuContent.style.display = 'none';
    } else {
        menuContent.style.display = 'block';
    }
});
