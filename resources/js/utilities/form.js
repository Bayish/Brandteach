export function filterOptions (items, id) {
    const filteredItems = items.filter(item => item.id === parseInt(id));
    return filteredItems.length > 0 ? filteredItems[0].cities : [];
}
