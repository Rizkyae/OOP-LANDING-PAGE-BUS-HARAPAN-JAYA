<?php
$routes       = $routes ?? [];
$fleet        = $fleet ?? [];
$testimonials = $testimonials ?? [];
?>

<!-- ══════════ HERO ══════════ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-text">
      <div class="hero-badge">🌸 #1 Bus Travel Terpercaya di Jawa</div>
      <h1 class="hero-title">
        Perjalanan <span class="highlight">Impian</span><br>
        Bersama Harapan Jaya
      </h1>
      <p class="hero-desc">
        Nikmati perjalanan nyaman, aman, dan menyenangkan bersama armada bus premium kami.
        Dari Jawa hingga Bali — Harapan Jaya selalu hadir untuk Anda. 🎌
      </p>
      <div class="hero-btns">
        <a href="#booking" class="btn-primary">🎫 Pesan Tiket Sekarang</a>
        <a href="#rute" class="btn-outline">🗺️ Lihat Rute</a>
      </div>
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-num">500K+</span>
          <span class="stat-label">Penumpang / Tahun</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">25+</span>
          <span class="stat-label">Rute Aktif</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">98%</span>
          <span class="stat-label">On Time</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">4.9⭐</span>
          <span class="stat-label">Rating Google</span>
        </div>
      </div>
    </div>

    <div class="hero-visual">
      <div class="bus-card">
        <span class="bus-emoji">🌸🚌🌸</span>
        <h3>Harapan Jaya Express</h3>
        <p>Armada terbaru 2024 – AC Double, WiFi & USB Charger</p>
        <div class="bus-route">
          <span>Surabaya</span>
          <span class="arrow">⟶</span>
          <span>Jakarta</span>
        </div>
        <div class="bus-route" style="margin-top:8px">
          <span>🕗 Berangkat 08:00</span>
          <span class="arrow">·</span>
          <span>💺 42 Kursi</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ SEARCH / BOOKING CEPAT ══════════ -->
<div class="search-section" id="booking">
  <div class="search-box">
    <h3>🔍 Cari Tiket Bus</h3>
    <form class="search-form" id="searchForm">
      <div class="form-group">
        <label for="from">Kota Asal</label>
        <select id="from" name="from" required>
          <option value="">Pilih Kota</option>
          <option>Surabaya</option>
          <option>Jakarta</option>
          <option>Malang</option>
          <option>Yogyakarta</option>
          <option>Semarang</option>
          <option>Bandung</option>
          <option>Denpasar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="to">Kota Tujuan</label>
        <select id="to" name="to" required>
          <option value="">Pilih Kota</option>
          <option>Jakarta</option>
          <option>Surabaya</option>
          <option>Bali</option>
          <option>Yogyakarta</option>
          <option>Semarang</option>
          <option>Bandung</option>
          <option>Malang</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Tanggal Berangkat</label>
        <input type="date" id="date" name="date" required
               min="<?= date('Y-m-d') ?>">
      </div>
      <div class="form-group">
        <label for="pax">Jumlah Penumpang</label>
        <select id="pax" name="pax">
          <option>1 Penumpang</option>
          <option>2 Penumpang</option>
          <option>3 Penumpang</option>
          <option>4 Penumpang</option>
          <option>5+ Penumpang</option>
        </select>
      </div>
      <button type="submit" class="search-btn">🔍 Cari</button>
    </form>
  </div>
</div>

<!-- ══════════ RUTE POPULER ══════════ -->
<section class="routes-section" id="rute">
  <div class="section-header">
    <div class="section-tag">🗺️ Destinasi</div>
    <h2 class="section-title">Rute <span class="pink">Populer</span> Kami</h2>
    <p class="section-desc">Jelajahi berbagai rute tersedia dengan harga terjangkau dan jadwal fleksibel setiap harinya.</p>
  </div>
  <div class="routes-grid" style="max-width:1200px;margin:auto">
    <?php foreach ($routes as $r): ?>
    <div class="route-card">
      <?php if (!empty($r['popular'])): ?>
        <div style="position:absolute;top:14px;right:14px;background:var(--pink-main);color:white;font-size:11px;font-weight:800;padding:3px 10px;border-radius:10px;">🔥 TERPOPULER</div>
      <?php endif; ?>
      <span class="route-emoji"><?= $r['emoji'] ?></span>
      <div class="route-path">
        <span class="route-city"><?= htmlspecialchars($r['from']) ?></span>
        <span class="route-arrow">→</span>
        <span class="route-city"><?= htmlspecialchars($r['to']) ?></span>
      </div>
      <div class="route-meta">
        <span>⏱️ <?= $r['duration'] ?></span>
        <span>💺 <?= $r['seats'] ?></span>
      </div>
      <div style="font-size:12px;color:var(--gray);margin-bottom:12px;">🕐 <?= $r['depart'] ?></div>
      <div class="route-price">
        <?= $r['harga'] ?> <small>/ orang</small>
      </div>
      <a href="https://wa.me/6281234567890?text=Saya+ingin+pesan+tiket+<?= urlencode($r['from'].' ke '.$r['to']) ?>" class="route-btn" target="_blank">
        🎫 Pesan Sekarang
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════ ARMADA ══════════ -->
<section class="fleet-section" id="armada">
  <div class="section-header">
    <div class="section-tag">🚌 Armada</div>
    <h2 class="section-title">Pilih <span class="pink">Kelas</span> Perjalanan</h2>
    <p class="section-desc">Dari ekonomi hingga sleeper class — semua untuk kenyamanan perjalanan Anda.</p>
  </div>
  <div class="fleet-grid" style="max-width:1100px;margin:auto">
    <?php foreach ($fleet as $f): ?>
    <div class="fleet-card">
      <div class="fleet-visual"><?= $f['emoji'] ?></div>
      <div class="fleet-info">
        <div class="fleet-badge"><?= $f['badge'] ?></div>
        <h3><?= htmlspecialchars($f['nama']) ?></h3>
        <p style="font-size:13px;color:var(--gray);margin-bottom:12px;"><?= $f['desc'] ?></p>
        <div class="fleet-features">
          <?php foreach ($f['features'] as $feat): ?>
            <span class="feature-tag">✓ <?= $feat ?></span>
          <?php endforeach; ?>
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px;">
          <div class="fleet-price"><?= $f['harga'] ?></div>
          <a href="#booking" class="route-btn" style="margin:0;padding:8px 16px;font-size:12px;">Pilih Kelas</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════ GOOGLE MAPS ══════════ -->
<section class="maps-section" id="lokasi">
  <div class="section-header">
    <div class="section-tag">📍 Lokasi</div>
    <h2 class="section-title">Temukan <span class="pink">Kantor</span> Kami</h2>
    <p class="section-desc">Kunjungi agen terdekat kami atau hubungi CS online 24 jam.</p>
  </div>
  <div class="maps-container">
    <div class="maps-wrapper">
      <div class="maps-info">
        <h3>🌸 Kantor Kami</h3>
        <p>Kami hadir di berbagai kota besar Jawa & Bali untuk melayani Anda. Datang langsung atau booking online!</p>
        <div class="office-list">
          <div class="office-item">
            <h4>🏢 Kantor Pusat – Bondowoso</h4>
            <p>Jl. Raya Jember No. 88</p>
            <p>📞 (0332) 421-888</p>
            <p>🕐 Buka 24 Jam</p>
          </div>
          <div class="office-item">
            <h4>🏢 Agen Surabaya</h4>
            <p>Jl. Basuki Rahmat No. 120</p>
            <p>📞 (031) 567-8900</p>
            <p>🕐 06:00 – 22:00</p>
          </div>
          <div class="office-item">
            <h4>🏢 Agen Jakarta</h4>
            <p>Jl. Kramat Raya No. 45</p>
            <p>📞 (021) 392-4567</p>
            <p>🕐 06:00 – 22:00</p>
          </div>
        </div>
      </div>
      <div class="maps-iframe-wrap">
        <!-- Google Maps embed – Bondowoso, Jawa Timur -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126720.77065960348!2d113.81093219453122!3d-7.910028199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6908a0c571b85%3A0x9c10a50b8e1ae481!2sBondowoso%2C%20Kabupaten%20Bondowoso%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1715000000000!5m2!1sid!2sid"
          width="100%"
          height="420"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi Harapan Jaya Bondowoso">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ TESTIMONI ══════════ -->
<section class="testi-section" id="testimoni">
  <div class="section-header">
    <div class="section-tag">💬 Testimoni</div>
    <h2 class="section-title">Kata <span class="pink">Pelanggan</span> Kami</h2>
    <p class="section-desc">Ribuan pelanggan setia sudah mempercayai Harapan Jaya untuk perjalanan mereka.</p>
  </div>
  <div class="testi-grid">
    <?php foreach ($testimonials as $t): ?>
    <div class="testi-card">
      <div class="testi-stars">
        <?= str_repeat('★', $t['stars']) ?><?= str_repeat('☆', 5 - $t['stars']) ?>
      </div>
      <p class="testi-text">"<?= htmlspecialchars($t['teks']) ?>"</p>
      <div class="testi-author">
        <div class="testi-avatar"><?= $t['avatar'] ?></div>
        <div>
          <div class="testi-name"><?= htmlspecialchars($t['nama']) ?></div>
          <div class="testi-loc">📍 <?= htmlspecialchars($t['kota']) ?></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════ PROMO BANNER ══════════ -->
<section class="promo-section">
  <div class="promo-banner">
    <div class="promo-text">
      <h2>🎉 Promo Spesial Lebaran 2026!</h2>
      <p>Diskon hingga 30% untuk pemesanan tiket lebih dari 7 hari sebelum keberangkatan. Jangan lewatkan penawaran terbatas ini!</p>
    </div>
    <div class="promo-btns">
      <a href="https://wa.me/6281234567890?text=Saya+ingin+tahu+promo+lebaran" target="_blank">🎫 Klaim Promo Sekarang</a>
      <a href="#rute" class="outline-white">🗺️ Lihat Semua Rute</a>
    </div>
  </div>
</section>

<!-- ══════════ FORM RESERVASI ══════════ -->
<section style="padding:80px 24px;background:#fff0f7">
  <div class="section-header">
    <div class="section-tag">📝 Reservasi</div>
    <h2 class="section-title">Pesan <span class="pink">Tiket</span> Online</h2>
    <p class="section-desc">Isi formulir berikut dan tim kami akan menghubungi Anda untuk konfirmasi.</p>
  </div>
  <div style="max-width:700px;margin:auto;background:white;border-radius:28px;padding:40px;box-shadow:0 20px 60px rgba(233,30,140,0.12);border:2px solid var(--pink-light)">
    <form id="bookForm">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
        <div class="form-group">
          <label for="bName">Nama Lengkap</label>
          <input type="text" id="bName" placeholder="Nama kamu..." required>
        </div>
        <div class="form-group">
          <label for="bPhone">No. WhatsApp</label>
          <input type="tel" id="bPhone" placeholder="08xxxxxxxxxx" required>
        </div>
        <div class="form-group">
          <label for="bFrom">Kota Asal</label>
          <select id="bFrom">
            <option>Surabaya</option><option>Jakarta</option><option>Malang</option>
            <option>Yogyakarta</option><option>Semarang</option><option>Bandung</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bTo">Kota Tujuan</label>
          <select id="bTo">
            <option>Jakarta</option><option>Surabaya</option><option>Bali</option>
            <option>Yogyakarta</option><option>Semarang</option><option>Bandung</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bDate">Tanggal Berangkat</label>
          <input type="date" id="bDate" min="<?= date('Y-m-d') ?>" required>
        </div>
        <div class="form-group">
          <label for="bClass">Kelas Bus</label>
          <select id="bClass">
            <option>Ekonomi AC</option>
            <option>Eksekutif</option>
            <option>Super Executive</option>
            <option>Sleeper Class</option>
          </select>
        </div>
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="bNotes">Catatan Tambahan</label>
        <input type="text" id="bNotes" placeholder="Kursi khusus, kebutuhan lain, dll...">
      </div>
      <button type="submit" class="btn-primary" style="width:100%;border:none;font-size:16px;padding:16px;cursor:pointer">
        🎫 Kirim Permintaan Pemesanan
      </button>
    </form>
  </div>
</section>
