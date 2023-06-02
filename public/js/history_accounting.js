let page = window.location.pathname.split("/").pop();
let storages = [localStorage, sessionStorage];

for (let storage of storages) {
    if (storage.getItem(page) == null) {
        storage.setItem(page, 0);
    }
    storage.setItem(page, (+storage.getItem(page))+1);
}