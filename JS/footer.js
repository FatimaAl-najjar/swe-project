
const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="photos/thewhiteicon.png" class="logo" alt="Thamaraii Logo" style="width:175px;height:175px;">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">Men</li>
                <li><a href="" class="footer-link">T-shirts</a></li>
                <li><a href="" class="footer-link">SweatShirts</a></li>
                <li><a href="" class="footer-link">Shirts</a></li>
                <li><a href="" class="footer-link">Jeans</a></li>
                <li><a href="" class="footer-link">Trousers</a></li>
                <li><a href="" class="footer-link">Shoes</a></li>
                <li><a href="" class="footer-link">Casuals</a></li>
                <li><a href="" class="footer-link">Formals</a></li>
                <li><a href="" class="footer-link">Sportive</a></li>
            </ul>
            <ul class="category">
                <li class="category-title">Women</li>
                <li><a href="#" class="footer-link">T-shirts</a></li>
                <li><a href="#" class="footer-link">SweatShirts</a></li>
                <li><a href="" class="footer-link">Shirts</a></li>
                <li><a href="" class="footer-link">Jeans</a></li>
                <li><a href="" class="footer-link">Trousers</a></li>
                <li><a href="" class="footer-link">Shoes</a></li>
                <li><a href="" class="footer-link">Casuals</a></li>
                <li><a href="" class="footer-link">Formals</a></li>
                <li><a href="" class="footer-link">Sportive</a></li>
            </ul>
            <!-- <ul class="category">
                <li class="category-title">Get Help</li>
                <li><a href="#" class="footer-link">Help Center</a></li>
                <li><a href="#" class="footer-link">Privacy Policy</a></li>
                <li><a href="#" class="footer-link">Terms</a></li>
                <li><a href="#" class="footer-link">Login</a></li>
            </ul> -->
        </div>
    </div>
    <h1 style="`;
}