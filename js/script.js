let pricingTable = document.querySelector(".pricingtable");
pricingTable.onmouseover = function(event) {
    let target = event.target.closest(".pricingtable-wrapper");
    if (!target) return;

    let isActive = target.classList.contains("active");
    if (isActive) return;

    let activeTable = pricingTable.querySelector('.active');
    activeTable.classList.remove("active");
    target.classList.add("active");

}