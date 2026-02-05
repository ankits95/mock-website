/* =====================================================
   GLOBAL VARIABLES (SAFE INIT)
===================================================== */
let modal = null;
let closeBtn = null;


/* =====================================================
   DOM READY
===================================================== */
window.addEventListener("DOMContentLoaded", function () {

    /* ================================
       Admission Modal Init
    ================================ */
    modal = document.getElementById("admissionModal");
    closeBtn = document.querySelector(".admission-close");

    if (modal) {
        const urlParams = new URLSearchParams(window.location.search);

        // Auto open modal ONLY if no success/error
        if (!urlParams.has("success") && !urlParams.has("error")) {
            setTimeout(openModal, 800);
        }
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", closeModal);
    }

    initSmoothScroll();
    initAdmissionForms();
    initScrollAnimations();
    initMobileMenu();
    initSuccessMessage();
});


/* =====================================================
   MODAL FUNCTIONS
===================================================== */
function openModal() {
    if (!modal) return;
    modal.classList.add("show");
    document.body.style.overflow = "hidden";
}

function closeModal() {
    if (!modal) return;
    modal.classList.remove("show");
    document.body.style.overflow = "auto";
}


/* Close modal on outside click */
window.addEventListener("click", function (e) {
    if (modal && e.target === modal) {
        closeModal();
    }
});

/* Close modal on ESC */
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modal && modal.classList.contains("show")) {
        closeModal();
    }
});


/* =====================================================
   SMOOTH SCROLLING
===================================================== */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");

            if (targetId === "#admissions") {
                e.preventDefault();
                openModal();
                return;
            }

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });
}


/* =====================================================
   SUCCESS MESSAGE HANDLING
===================================================== */
function initSuccessMessage() {
    const successMessage = document.getElementById("successMessage");

    if (!successMessage) return;

    setTimeout(() => {
        successMessage.style.opacity = "0";
        setTimeout(() => {
            successMessage.style.display = "none";
            if (window.history.replaceState) {
                const cleanUrl = window.location.href.split("?")[0];
                window.history.replaceState({}, document.title, cleanUrl);
            }
        }, 500);
    }, 5000);
}

function closeSuccessMessage() {
    const msg = document.getElementById("successMessage");
    if (!msg) return;

    msg.style.opacity = "0";
    setTimeout(() => {
        msg.style.display = "none";
    }, 300);
}


/* =====================================================
   ADMISSION FORM VALIDATION
===================================================== */
function initAdmissionForms() {

    const forms = document.querySelectorAll("form[action='admission_submit.php']");

    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            if (!validateAdmissionForm(this)) {
                e.preventDefault();
            }
        });
    });
}

function validateAdmissionForm(form) {

    const grade = form.querySelector("select[name='grade']");
    const student = form.querySelector("input[name='student_name']");
    const parent = form.querySelector("input[name='parent_name']");
    const email = form.querySelector("input[name='parent_email']");
    const phone = form.querySelector("input[name='parent_phone']");

    if (!grade || grade.value === "") {
        alert("Please select a grade");
        grade.focus();
        return false;
    }

    if (!student || student.value.trim() === "") {
        alert("Please enter student name");
        student.focus();
        return false;
    }

    if (!parent || parent.value.trim() === "") {
        alert("Please enter parent name");
        parent.focus();
        return false;
    }

    if (!email || email.value.trim() === "") {
        alert("Please enter parent email");
        email.focus();
        return false;
    }

    if (!phone || phone.value.trim() === "") {
        alert("Please enter parent mobile number");
        phone.focus();
        return false;
    }

    const digits = phone.value.replace(/\D/g, "");
    if (digits.length !== 10) {
        alert("Enter a valid 10-digit mobile number");
        phone.focus();
        return false;
    }

    return true;
}


/* =====================================================
   SCROLL ANIMATIONS
===================================================== */
function initScrollAnimations() {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll(
        ".program-card, .facility-item, .stat, .contact-item, .notice-item, .about-text, .admission-info"
    ).forEach(el => {
        el.style.opacity = "0";
        el.style.transform = "translateY(20px)";
        el.style.transition = "all 0.6s ease";
        observer.observe(el);
    });
}


/* =====================================================
   MOBILE MENU
===================================================== */
function initMobileMenu() {
    const toggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector("nav ul");

    if (!toggle || !menu) return;

    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
        toggle.classList.toggle("active");
    });

    document.addEventListener("click", e => {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove("active");
            toggle.classList.remove("active");
        }
    });
}


/* =====================================================
   CONSOLE BRANDING (OPTIONAL)
===================================================== */
console.log("%c Welcome to Our School Website ", "background:#4CAF50;color:white;padding:10px;font-size:16px;");
console.log("%c Built with ❤️ using PHP & JS ", "color:#FF5722;font-size:12px;");
