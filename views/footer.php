<!-- ── FOOTER ── -->
<footer>
  <div class="footer-container">

    <!-- Brand -->
    <div class="footer-brand">
      <div class="logo-text">🌸 Harapan Jaya</div>
      <p>Bus Travel Premium terpercaya sejak 1998. Mengantarkan jutaan penumpang ke seluruh penjuru nusantara dengan aman, nyaman, dan tepat waktu.</p>
      <div class="footer-social">
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" title="TikTok"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>

    <!-- Rute Populer -->
    <div class="footer-col">
      <h4>🗺️ Rute Populer</h4>
      <ul>
        <li><a href="#rute">🚌 Surabaya → Jakarta</a></li>
        <li><a href="#rute">🚌 Jakarta → Surabaya</a></li>
        <li><a href="#rute">🚌 Surabaya → Yogyakarta</a></li>
        <li><a href="#rute">🚌 Malang → Bali</a></li>
        <li><a href="#rute">🚌 Jakarta → Bandung</a></li>
        <li><a href="#rute">🚌 Surabaya → Semarang</a></li>
      </ul>
    </div>

    <!-- Layanan -->
    <div class="footer-col">
      <h4>🎀 Layanan</h4>
      <ul>
        <li><a href="#armada">🚍 Ekonomi AC</a></li>
        <li><a href="#armada">💺 Eksekutif</a></li>
        <li><a href="#armada">⭐ Super Executive</a></li>
        <li><a href="#armada">🛏️ Sleeper Class</a></li>
        <li><a href="#booking">🎫 Pesan Tiket Online</a></li>
        <li><a href="https://wa.me/6281234567890">💬 Customer Service</a></li>
      </ul>
    </div>

    <!-- Kontak -->
    <div class="footer-col footer-contact">
      <h4>📞 Hubungi Kami</h4>
      <p><span>📍</span> Jl. Raya Jember No. 88, Bondowoso, Jawa Timur 68219</p>
      <p><span>📞</span> (0332) 421-888</p>
      <p><span>📱</span> 0812-3456-7890 (WhatsApp)</p>
      <p><span>✉️</span> cs@harapanjaya.co.id</p>
      <p><span>🕐</span> Buka 24 Jam / 7 Hari</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© 2026 <a href="#">Harapan Jaya Bus Travel</a> 🌸 All Rights Reserved &nbsp;|&nbsp; Dibuat dengan 💕 oleh Tim Digital HJ</p>
  </div>
</footer>

<!-- JS -->
<script>
// ── Sakura Petals ──
(function() {
  const bg = document.getElementById('sakura-bg');
  for (let i = 0; i < 18; i++) {
    const p = document.createElement('div');
    p.className = 'petal';
    p.style.left            = Math.random() * 100 + 'vw';
    p.style.width           = (8 + Math.random() * 10) + 'px';
    p.style.height          = p.style.width;
    p.style.animationDuration  = (6 + Math.random() * 10) + 's';
    p.style.animationDelay     = (Math.random() * 10) + 's';
    p.style.opacity         = 0.4 + Math.random() * 0.5;
    bg.appendChild(p);
  }
})();

// ── Scroll to Top ──
const btn = document.getElementById('scrollTop');
window.addEventListener('scroll', () => {
  btn.classList.toggle('show', window.scrollY > 300);
  // Active nav link
  document.querySelectorAll('nav ul li a').forEach(a => {
    const sec = a.getAttribute('href');
    if (sec && sec !== '#') {
      const el = document.querySelector(sec);
      if (el) {
        const rect = el.getBoundingClientRect();
        if (rect.top <= 100 && rect.bottom > 100) {
          document.querySelectorAll('nav ul li a').forEach(x => x.classList.remove('active'));
          a.classList.add('active');
        }
      }
    }
  });
});
btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// ── Search form submit ──
const searchForm = document.getElementById('searchForm');
if (searchForm) {
  searchForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const from = document.getElementById('from').value;
    const to   = document.getElementById('to').value;
    const date = document.getElementById('date').value;
    if (!from || !to || !date) {
      alert('⚠️ Lengkapi semua field pencarian ya, Kak!');
      return;
    }
    alert(`🌸 Mencari tiket:\n✈️ ${from} → ${to}\n📅 ${date}\n\nSilakan hubungi kami via WhatsApp untuk pemesanan!`);
  });
}

// ── Booking form ──
const bookForm = document.getElementById('bookForm');
if (bookForm) {
  bookForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const name = document.getElementById('bName').value;
    const phone = document.getElementById('bPhone').value;
    if (name && phone) {
      alert(`🎉 Terima kasih, ${name}!\nPesanan akan dikonfirmasi via WhatsApp ke ${phone}\n\n🌸 Selamat datang di Harapan Jaya!`);
      bookForm.reset();
    }
  });
}
</script>
</body>
</html>
