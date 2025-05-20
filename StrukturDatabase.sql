-- Membuat database untuk website portofolio
CREATE DATABASE IF NOT EXISTS db_portofolio;
USE db_portofolio;

-- Membuat tabel artikel untuk halaman blog
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    short_description TEXT NOT NULL,
    content LONGTEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Menambahkan data awal untuk artikel
INSERT INTO articles (title, short_description, content, image) VALUES 
('BREN dan Prajogo Pangestu', 'Pembahasan mengenai perjalanan emiten BREN milik Prajogo Pangestu pada pasar modal Indonesia...', '<h3>IPO Spektakuler dan Lonjakan Harga Saham</h3>
<p>PT Barito Renewables Energy Tbk. (BREN) resmi melantai di Bursa Efek Indonesia (BEI) pada Oktober 2023 dengan harga penawaran umum perdana (IPO) sebesar Rp780 per saham. Sejak saat itu, saham BREN mengalami lonjakan signifikan, mencatat kenaikan sekitar 731% hingga mencapai level Rp6.450 per saham pada November 2023. Kenaikan ini menjadikan kapitalisasi pasar BREN mencapai Rp866,9 triliun, melampaui beberapa bank besar di Indonesia.</p>
<h3>Perhatian Regulator dan Suspensi Perdagangan</h3>
<p>Kenaikan harga saham yang drastis menarik perhatian BEI, yang kemudian melakukan pengawasan terhadap aktivitas pasar yang tidak biasa (Unusual Market Activity/UMA) dan sempat menghentikan sementara perdagangan saham BREN sebagai langkah pendinginan (cooling down). Pada Mei 2024, BEI kembali menyetop perdagangan saham BREN setelah sahamnya menyentuh harga tertinggi sepanjang masa (all-time high) sebesar Rp9.875 per saham.</p>
<h3>Masuknya Investor Asing dan ETF Global</h3>
<p>Salah satu faktor pendorong kenaikan harga saham BREN adalah masuknya saham ini ke dalam portofolio dua produk Exchange Traded Fund (ETF) milik BlackRock, yaitu iShares Global Clean Energy ETF (ICLN) dan iShares Global Clean Energy UCITS ETF (INRG). Kedua ETF ini mengacu pada indeks S&P Global Clean Energy Index. Masuknya BREN ke dalam ETF global ini menarik aliran dana asing ke saham BREN, dengan total inflow mencapai Rp1,1 triliun sejak awal tahun.</p>
<h3>Strategi Akuisisi dan Ekspansi Bisnis</h3>
<p>BREN aktif melakukan ekspansi bisnis di sektor energi terbarukan. Perusahaan menyelesaikan akuisisi Pembangkit Listrik Tenaga Angin Sidrap 1 senilai US$102,2 juta dengan kapasitas 75 MW. Selain itu, BREN bermitra dengan anak usaha ACEN Renewables International untuk mengakuisisi tiga aset pengembangan tahap akhir di Sulawesi Selatan, Sukabumi, dan Lombok. Langkah ini menunjukkan komitmen BREN dalam mendukung transisi energi Indonesia menuju net zero emission.</p>
<h3>Aksi Korporasi Prajogo Pangestu</h3>
<p>Prajogo Pangestu secara aktif menambah kepemilikan sahamnya di BREN. Pada Februari 2025, ia membeli 1,5 juta lembar saham BREN dengan harga Rp6.272 per saham, senilai Rp9,4 miliar. Selanjutnya, pada Maret 2025, ia kembali membeli 1,77 juta saham BREN senilai Rp8,8 miliar. Aksi ini menunjukkan kepercayaan Prajogo terhadap prospek jangka panjang BREN.</p>
<h3>Volatilitas Harga Saham dan Tantangan Pasar</h3>
<p>Meskipun mengalami lonjakan harga, saham BREN juga menghadapi volatilitas. Pada Mei 2024, saham BREN mengalami penurunan 10% setelah masuk ke papan pemantauan khusus full call auction. Namun, pada Juni 2024, saham BREN kembali menguat 29,75% dalam sepekan, menopang Indeks Harga Saham Gabungan (IHSG) sebesar 70,15 poin.</p>', 'Bren.jpg'),

('Jatuhnya saham GOTO sebagai emiten teknologi terbesar di Indonesia', 'Artikel mengenai jatuhnya kejayaan emiten GOTO dan sektor teknologi pada pasar modal Indonesia...', '<h3>Latar Belakang: GOTO sebagai Ikon Teknologi Indonesia</h3>
<p>PT GoTo Gojek Tokopedia Tbk (GOTO) merupakan hasil merger dua startup besar Indonesia, Gojek dan Tokopedia. Perusahaan ini melantai di Bursa Efek Indonesia (BEI) pada April 2022 dengan harga penawaran umum perdana (IPO) sebesar Rp338 per saham. Saat itu, GOTO menjadi simbol kebangkitan sektor teknologi di Indonesia.</p>
<h3>Penurunan Harga Saham GOTO</h3>
<p>Namun, sejak IPO, saham GOTO mengalami penurunan signifikan. Pada Desember 2023, saham GOTO turun hingga 12,9% ke level Rp94 per saham setelah pengumuman kerja sama strategis dengan TikTok. Kerja sama ini melibatkan investasi TikTok sebesar Rp23 triliun ke Tokopedia, namun investor merespons negatif karena kekhawatiran terhadap kontrol TikTok atas Tokopedia.</p>
<p>Pada Maret 2024, GOTO melaporkan kerugian sebesar Rp90 triliun akibat pembalikan nilai goodwill dari hilangnya pengendalian atas Tokopedia setelah akuisisi oleh TikTok.</p>
<h3>Faktor-Faktor Penyebab Penurunan</h3>
<ul>
  <li><strong>Kondisi Makroekonomi:</strong> Kenaikan suku bunga global dan ketidakpastian ekonomi mempengaruhi likuiditas dan valuasi perusahaan teknologi.</li>
  <li><strong>Aksi Profit Taking:</strong> Investor melakukan aksi ambil untung setelah pengumuman kerja sama GOTO dengan TikTok.</li>
  <li><strong>Kompetisi yang Ketat:</strong> Persaingan di sektor e-commerce semakin intens, terutama dengan masuknya pemain global seperti TikTok.</li>
</ul>
<h3>Dampak pada Sektor Teknologi</h3>
<p>Penurunan saham GOTO mencerminkan tantangan yang dihadapi sektor teknologi di Indonesia. Investor menjadi lebih selektif dalam menanamkan modal di perusahaan teknologi, terutama yang belum menunjukkan profitabilitas yang jelas. Hal ini berdampak pada valuasi dan kemampuan perusahaan teknologi untuk mengakses pendanaan di pasar modal.</p>', 'Goto.jpg'),

('BYAN dan Low Tuck Kwong', 'Membahas mengenai perjalanan Low Tuck Kwong menjadi orang terkaya di Indonesia melalui Bayan Resources pada tahun 2023...', '<h3>Awal Karier dan Transisi ke Industri Batu Bara</h3>
<p>Memulai karier di perusahaan konstruksi milik ayahnya di Singapura, Low Tuck Kwong memutuskan pindah ke Indonesia pada tahun 1972 untuk mencari peluang yang lebih luas. Di Indonesia, ia mendirikan PT Jaya Sumpiles Indonesia, sebuah perusahaan yang awalnya bergerak di bidang konstruksi. Pada tahun 1988, perusahaan ini bertransformasi menjadi entitas pertambangan batu bara, menandai langkah awal Low Tuck Kwong dalam industri energi fosil.</p>
<h3>Pembentukan dan Perkembangan Bayan Resources</h3>
<p>Pada tahun 1997, Low Tuck Kwong mengakuisisi tambang batu bara pertamanya melalui PT Gunungbayan Pratamacoal. Langkah ini menjadi fondasi bagi pendirian PT Bayan Resources Tbk pada tahun 2004. Di bawah kepemimpinannya, Bayan Resources berkembang pesat, menjadi salah satu perusahaan tambang batu bara terkemuka di Indonesia.</p>
<h3>Ekspansi Bisnis dan Diversifikasi</h3>
<p>Selain fokus pada industri batu bara, Low Tuck Kwong juga memperluas portofolio bisnisnya ke sektor energi terbarukan. Melalui Metis Energy Limited, sebelumnya dikenal sebagai Manhattan Resources, ia menunjukkan komitmennya terhadap pengembangan energi berkelanjutan.</p>
<h3>Pencapaian Kekayaan dan Penghargaan</h3>
<p>Pada tahun 2023, ia dinobatkan sebagai orang terkaya kedua di Indonesia dengan total kekayaan mencapai US$25,5 miliar atau sekitar Rp395,64 triliun. Pada Desember 2023, ia dianugerahi penghargaan sebagai Best CEO in Coal Mining and Resources dalam acara TOP CEO Awards 2023.</p>', 'Bayan.jpg');

-- Membuat tabel untuk kontak
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
