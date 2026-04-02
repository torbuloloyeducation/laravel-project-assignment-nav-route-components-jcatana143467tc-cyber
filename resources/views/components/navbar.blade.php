<nav>
    <a href="/" {{ request()->is('/') ? 'class=active' : '' }}>Home</a>
    <a href="/about" {{ request()->is('about') ? 'class=active' : '' }}>About</a>
    <a href="/contact" {{ request()->is('contact') ? 'class=active' : '' }}>Contact</a>
    <a href="/services" {{ request()->is('services') ? 'class=active' : '' }}>Services</a>
    <a href="/showcases" {{ request()->is('showcases') ? 'class=active' : '' }}>Showcases</a>
    <a href="/blog" {{ request()->is('blog') ? 'class=active' : '' }}>Blog</a>
</nav>
