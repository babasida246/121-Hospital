function randomString(length) {
    let result = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
function menuModifier(menu) {
    for (let ParentItem in menu) {
        menu[ParentItem]['target'] = ParentItem
        /* menu[ParentItem]['id'] = makeid(5) */
        let submenu_created = create_submenu(menu[ParentItem])
        menu[ParentItem] = submenu_created
    } 
    function create_submenu(ParentItem) {
        if (ParentItem['submenu']) {
            for (let SubMenuItem in ParentItem['submenu']) {
                ParentItem['submenu'][SubMenuItem]['target'] = SubMenuItem
                /* ParentItem['submenu'][SubMenuItem]['id'] = makeid(5) */
                create_submenu(ParentItem['submenu'][SubMenuItem])
            }
        }
        return ParentItem
    }
    return JSON.stringify(menu)
}

export default {randomString, menuModifier}
