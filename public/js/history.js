let reservedKeys = {
    "length": true, 
    "clear": true, 
    "getItem": true, 
    "key": true, 
    "removeItem": true, 
    "setItem": true
};
let ids = ["#history_local ul", "#history_session ul"];

for (let i in storages) {
    let storage = storages[i];
    let list = document.querySelector(ids[i]);
    for (let page in storage) {
        if (!(page in reservedKeys)) {
            let list_item = document.createElement("li");
            list_item.innerText = `страница ${page} - ${storage[page]} посещений`;
            list.appendChild(list_item);
        }
    }
}