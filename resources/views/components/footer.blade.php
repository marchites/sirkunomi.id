<footer class="footer-sirkunomi">

    <div class="container">
        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-4 mb-4">
                <h4 class="footer-logo">
                    <img src="{{ asset('build/assets/images/logo-white.svg') }}" alt="Logo Sirkunomi" class="footer-logo-img">
                    Sirkunomi
                </h4>
                <p class="footer-desc">
                    Edukasi pengolahan limbah dari hulu ke hilir untuk menciptakan ekosistem berkelanjutan.
                </p>
            </div>

            <!-- MIDDLE -->
            <div class="col-lg-4 mb-4">
                <div class="row">

                    <div class="col-6">
                        <h6>Resources</h6>
                        <ul>
                            <li><a href="#">Edukasi</a></li>
                            <li><a href="#">Panduan</a></li>
                            <li><a href="#">Sistem</a></li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="#">Tentang</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-4 mb-4 text-center text-lg-start">
                <h5>Gabung Gerakan</h5>

                <div class="footer-input">
                    <input type="email" placeholder="Masukkan email...">
                    <button>→</button>
                </div>

            </div>

        </div>
    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom text-center">
        © {{ date('Y') }} Sirkunomi. All rights reserved.
    </div>

</footer>