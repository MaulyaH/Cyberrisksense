
document.addEventListener('DOMContentLoaded', () => {
  
  const yearElem = document.getElementById('year');
  if (yearElem) yearElem.textContent = new Date().getFullYear();

  
  const authModal = document.getElementById('authModal');
  const loginBtn = document.getElementById('loginBtn');
  const signupBtn = document.getElementById('signupBtn');
  const closeAuth = document.getElementById('closeAuth');

  const tabLogin = document.getElementById('tabLogin');
  const tabSignup = document.getElementById('tabSignup');

  const loginDiv = document.getElementById('loginDiv');
  const signupDiv = document.getElementById('signupDiv');

  const loginForm = document.getElementById('loginFormInner');
  const signupForm = document.getElementById('signupFormInner');

  function showAuth(mode) {
    if (!authModal) return;
    authModal.classList.remove('hidden');
    if (mode === 'login') {
      if (tabLogin) tabLogin.classList.add('active');
      if (tabSignup) tabSignup.classList.remove('active');
      if (loginDiv) loginDiv.classList.remove('hidden');
      if (signupDiv) signupDiv.classList.add('hidden');
    } else {
      if (tabSignup) tabSignup.classList.add('active');
      if (tabLogin) tabLogin.classList.remove('active');
      if (signupDiv) signupDiv.classList.remove('hidden');
      if (loginDiv) loginDiv.classList.add('hidden');
    }
  }

  if (authModal) {
    if (loginBtn) loginBtn.addEventListener('click', () => showAuth('login'));
    if (signupBtn) signupBtn.addEventListener('click', () => showAuth('signup'));
    if (tabLogin) tabLogin.addEventListener('click', () => showAuth('login'));
    if (tabSignup) tabSignup.addEventListener('click', () => showAuth('signup'));
    if (closeAuth) closeAuth.addEventListener('click', () => authModal.classList.add('hidden'));
    authModal.addEventListener('click', (e) => { if (e.target === authModal) authModal.classList.add('hidden'); });

   
    const modalContent = authModal.querySelector('.modal-content');
    if (modalContent) modalContent.addEventListener('click', (e) => e.stopPropagation());

   
    if (loginForm) {
      loginForm.addEventListener('submit', (e) => {
        
        const action = loginForm.getAttribute('action');
        if (!action || action.trim() === '') {
          e.preventDefault(); 
          alert('Login (modal) submitted (demo).');
          authModal.classList.add('hidden');
        } else {
          
          authModal.classList.add('hidden');
        }
      });
    }

    if (signupForm) {
      signupForm.addEventListener('submit', (e) => {
        const action = signupForm.getAttribute('action');
        if (!action || action.trim() === '') {
          e.preventDefault();
          alert('Sign up (modal) submitted (demo).');
          authModal.classList.add('hidden');
        } else {
          
          authModal.classList.add('hidden');
        }
      });
    }
  } else {
    
    if (loginBtn) {
      loginBtn.addEventListener('click', () => {
        
        window.location.href = '/backend/login.php';
      });
    }
    if (signupBtn) {
      signupBtn.addEventListener('click', () => {
       
        window.location.href = '/backend/signup.php';
      });
    }
  }

 
  const quizForm = document.getElementById('quizForm');
  const quizResult = document.getElementById('quizResult');
  const scoreValue = document.getElementById('scoreValue');
  const resultText = document.getElementById('resultText');
  const securityCodeElem = document.getElementById('securityCode');
  const scoreInput = document.getElementById('scoreInput');
  const codeInput = document.getElementById('codeInput');

  if (quizForm) {
    quizForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const form = new FormData(quizForm);
      let score = 0;
      for (let [, v] of form.entries()) score += Number(v || 0);

      if (scoreValue) scoreValue.textContent = score;
      if (scoreInput) scoreInput.value = score;

      let text = '';
      if (score >= 16) text = 'Excellent — strong security posture.';
      else if (score >= 10) text = 'Fair — some improvements needed.';
      else text = 'High risk — immediate attention required.';
      if (resultText) resultText.textContent = text;

      const code = generateSecurityCode(score);
      if (securityCodeElem) securityCodeElem.textContent = code;
      if (codeInput) codeInput.value = code;

      if (quizResult) {
        quizResult.classList.remove('hidden');
        quizResult.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  }

  function generateSecurityCode(score) {
    const t = Date.now().toString(36).slice(-4);
    return `CRS-${score}-${t}`.toUpperCase();
  }
});
