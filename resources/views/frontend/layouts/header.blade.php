<header>
    <div class="bottom-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('frontend/assets/images/logo.jpeg')}}" alt="Regulation" style="width: 120px;">
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="main-nav">
                    <ul>
                        @foreach(parentCategoryWithChield() as $category)
                            <li>
                                <a href="#">{{$category->name}}</a>
                                @if(count($category->childs) > 0)
                                    <ul class="dropdown">
                                        @foreach($category->childs as $sub)
                                            <li><a href="#">{{$sub->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <!-- Right Side (Contact Info + WhatsApp) -->
                <div class="header-right">
                    <div class="contact-info">
                        <ul>
                            <li><a href="tel:9625432342"><img src="https://www.whizseeddigital.com/frontend/assets/images1/call-icon.png" alt="Call"> 9625432342</a></li>
                            <li><a href="mailto:info@Regulationwala.com">info@regulationwala.com</a></li>
                        </ul>
                    </div>

                    <!-- WhatsApp Icon -->
                    <div class="header-buttons">
                        <a href="https://api.whatsapp.com/send?phone=919625432342" class="whatsapp-icon">
                            <img src="https://www.whizseeddigital.com/frontend/assets/images1/whatsapp-wh.png" alt="Whatsapp Now : 9625432342">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<style>
/* General header styling */
header {
    position: sticky;
    top: 0;
    background: #fff;
    z-index: 9999;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}


/* Flex container to align everything in one row */
.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

/* Logo */
.logo img {
    max-width: 120px;
}

/* Contact Info */
.contact-info ul {
    list-style: none;
    display: flex;
    gap: 15px;
    margin: 0;
    padding: 0;
}

.contact-info ul li {
    display: flex;
    align-items: center;
}

.contact-info ul li img {
    width: 16px;
    margin-right: 5px;
}

.contact-info ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
}

/* Navigation */
.main-nav {
    flex-grow: 1;
    text-align: center;
}

.main-nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 25px;
    margin: 0;
    padding: 0;
}

.main-nav ul li {
    position: relative;
}

.main-nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
}

/* Dropdown menu */
.main-nav ul .dropdown {
    display: none;
    position: absolute;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 10px;
    list-style: none;
    min-width: 150px;
}

.main-nav ul li:hover .dropdown {
    display: block;
}

/* WhatsApp Icon */
.header-buttons {
    margin-left: auto;
}

/* Header right section (Contact Info + WhatsApp aligned right) */
.header-right {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* Adjust the contact-info list */
.contact-info ul {
    display: flex;
    gap: 15px;
}

/* WhatsApp icon size */
.whatsapp-icon img {
    width: 30px;
}

</style>
