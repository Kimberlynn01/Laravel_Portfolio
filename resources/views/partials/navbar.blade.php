<div class="container-navbar container-fluid">
    <nav>
        <div class="logo">
            <img src="/img/vektor_img.png" alt="">
            <h5>Portfolio | Danu</h5>
        </div>
        <ul>
            <li><a class="{{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="{{ ($title === "News") ? 'active' : '' }}" href="/news">News</a></li>
            <li><a class="{{ ($title === "About") ? 'active' : '' }}" href="/about">About Us</a></li>
            <li class="dropdown"><a href="#">Dropdown <svg width="17" height="17" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.9195 15.7981C19.7295 15.7981 19.5395 15.7281 19.3895 15.5781L12.8695 9.05813C12.3895 8.57813 11.6095 8.57813 11.1295 9.05813L4.60953 15.5781C4.31953 15.8681 3.83953 15.8681 3.54953 15.5781C3.25953 15.2881 3.25953 14.8081 3.54953 14.5181L10.0695 7.99812C11.1295 6.93813 12.8595 6.93813 13.9295 7.99812L20.4495 14.5181C20.7395 14.8081 20.7395 15.2881 20.4495 15.5781C20.2995 15.7181 20.1095 15.7981 19.9195 15.7981Z"
                            fill="#292D32" />
                    </svg>
                </a>
                <ul class="content-dropdown">
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Social Media</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
            <div class="box-search">
                <input class="search" type="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass search-i"></i>
            </div>
            <div class="btn-hp">
                <button>Login</button>
            </div>
        </ul>
        <div class="btn-desktop">
            <button>Login</button>
        </div>
    </nav>
    <div class="menu">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>