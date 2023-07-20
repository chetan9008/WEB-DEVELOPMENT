//create a array of tabItem and tabContent
const tabItem = document.querySelectorAll('.tab-item');
const tabContent = document.querySelectorAll('.tab-content-item');
//remove and add border and content on click
function selectItem() {
    removeBorder();
    removeShow();

    this.classList.add("tab-border");
    const tabContentItem  = document.getElementById(`${this.id}-content`);
    tabContentItem.classList.add('show');
}
function removeBorder()
{
    tabItem.forEach(item =>
        {
            item.classList.remove("tab-border");
        })
}
function removeShow()
{
    tabContent.forEach(e =>
        {
            e.classList.remove("show");
        })
}
tabItem.forEach(item => {
    item.addEventListener('click', selectItem);
});