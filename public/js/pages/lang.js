function setLanguage(lang) {
    // Dil adlarını müəyyən edirik
    let langText = {
        'az': 'Az',
        'en': 'En',
        'ru': 'Rus'
    };

    // Dil menyusunu dəyişirik
    document.getElementById('selected-lang').innerText = langText[lang];

    // Seçilmiş dili yadda saxlayırıq
    // localStorage.setItem('selectedLanguage', lang);
}

// Səhifə yüklənəndə seçilmiş dili bərpa edirik
// window.onload = function() {
//     let savedLang = localStorage.getItem('selectedLanguage');
//     if (savedLang) {
//         setLanguage(savedLang); // Saxlanmış dili bərpa edirik
//     }
// };