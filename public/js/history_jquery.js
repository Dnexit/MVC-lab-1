$(document).ready( function() {
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
        let list = $(ids[i]);
        for (let page in storage) {
            if (!(page in reservedKeys)) {
                let list_item = $(`<li>страница ${page} - ${storage[page]} посещений</li>`);
                list.append(list_item);
            }
        }
    }
});