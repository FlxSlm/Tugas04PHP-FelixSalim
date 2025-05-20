// Toggle "Baca Selengkapnya" di Blog
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.toggle-content').forEach(btn => {
    btn.addEventListener('click', () => {
      const more = btn.parentElement.nextElementSibling;
      if (more.style.display === 'none') {
        more.style.display = 'block';
        btn.textContent = 'Sembunyikan';
      } else {
        more.style.display = 'none';
        btn.textContent = 'Baca Selengkapnya';
      }
    });
  });

  // Form Contact (untuk halaman HTML lama, tetap dipertahankan)
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    const responseDiv = document.getElementById('response');
    
    // Jika form disubmit tanpa action PHP (hanya untuk versi HTML)
    if (contactForm.getAttribute('action') === '#') {
      contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        if (responseDiv) {
          responseDiv.textContent = 'Terima kasih, pesan Anda telah terkirim!';
          responseDiv.style.color = '#4CAF50';
        }
        this.reset();
      });
    }
  }
});

// Animasi scroll sederhana
window.addEventListener('scroll', function() {
  const scrollPosition = window.scrollY;
  const header = document.querySelector('header');
  
  if (scrollPosition > 50) {
    header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
  } else {
    header.style.boxShadow = 'none';
  }
});

// Fungsi untuk validasi form sederhana
function validateForm() {
  const name = document.getElementById('name');
  const email = document.getElementById('email');
  const message = document.getElementById('message');
  let isValid = true;
  
  if (name && name.value.trim() === '') {
    name.style.borderColor = 'red';
    isValid = false;
  } else if (name) {
    name.style.borderColor = '#ccc';
  }
  
  if (email && email.value.trim() === '') {
    email.style.borderColor = 'red';
    isValid = false;
  } else if (email) {
    email.style.borderColor = '#ccc';
  }
  
  if (message && message.value.trim() === '') {
    message.style.borderColor = 'red';
    isValid = false;
  } else if (message) {
    message.style.borderColor = '#ccc';
  }
  
  return isValid;
}