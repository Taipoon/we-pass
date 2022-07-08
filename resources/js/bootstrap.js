window._ = require("lodash");

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"; // 追加

// ベースURLの設定
const baseUrl = process.env.MIX_URL;

// ベースURLに api を追加
window.axios.defaults.baseURL = `${baseUrl}/api/`;

// 自動的にクッキーをクライアントサイドに送信
window.axios.defaults.withCredentials = true;

// requestの設定
window.axios.interceptors.request.use((config) => {
    return config;
});
